<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('user', 'room')->get();
        $rooms = Room::all();
        
        return view('reservations', compact('reservations', 'rooms'));
    }

    public function create($id = null)
    {
        $rooms = Room::all();
        $selectedRoom = $id ? Room::find($id) : null;
        return view('reservations-create', compact('rooms', 'selectedRoom'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipe_kamar' => 'required|string',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'jumlah_tamu' => 'required|integer|min:1',
        ]);

        $tipe_kamar = $request->tipe_kamar;
        $check_in = $request->check_in;
        $check_out = $request->check_out;

        $totalKamar = Room::where('tipe_kamar', $tipe_kamar)
            ->where('status_kamar', 'tersedia')
            ->count();

        // Hitung jumlah kamar yang sedang diperbaiki
        $totalKamarDiperbaiki = Room::where('tipe_kamar', $tipe_kamar)
            ->where('status_kamar', 'diperbaiki')
            ->count();

        // Jika semua kamar dalam tipe ini sedang diperbaiki, kasih alert
        if ($totalKamarDiperbaiki == $totalKamar) {
            return back()->with('error', 'Maaf, semua kamar tipe ' . $tipe_kamar . ' sedang dalam perbaikan.');
        }

        $bookingAktif = Reservation::where('tipe_kamar', $tipe_kamar)
            ->where(function ($query) use ($check_in, $check_out) {
                $query->whereBetween('check_in', [$check_in, $check_out])
                    ->orWhereBetween('check_out', [$check_in, $check_out])
                    ->orWhere(function ($q) use ($check_in, $check_out) {
                        $q->where('check_in', '<=', $check_in)
                            ->where('check_out', '>=', $check_out);
                    });
            })
            ->whereIn('status_pemesanan', ['Pending', 'Confirmed'])
            ->count();

        if ($bookingAktif >= $totalKamar) {
            return back()->with('error', 'Maaf, semua kamar tipe ' . $tipe_kamar . ' sudah penuh pada tanggal tersebut.');
        }

        Reservation::create([
            'user_id' => Auth::id(),
            'room_id' => null,
            'no_kamar' => null,
            'nama' => Auth::user()->nama,
            'tipe_kamar' => $tipe_kamar,
            'check_in' => $check_in,
            'check_out' => $check_out,
            'jumlah_tamu' => $request->jumlah_tamu,
            'status_pemesanan' => 'Pending',
            'status_pembayaran' => 'Pending',
        ]);

        return redirect()->route('customer.dashboard')->with('success', 'Reservasi berhasil! Tunggu konfirmasi admin.');
    }

    public function assignRoom(Request $request, Reservation $reservation)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
        ]);

        $isBooked = Reservation::where('room_id', $request->room_id)
            ->where(function ($query) use ($reservation) {
                $query->whereBetween('check_in', [$reservation->check_in, $reservation->check_out])
                    ->orWhereBetween('check_out', [$reservation->check_in, $reservation->check_out])
                    ->orWhere(function ($q) use ($reservation) {
                        $q->where('check_in', '<=', $reservation->check_in)
                            ->where('check_out', '>=', $reservation->check_out);
                    });
            })
            ->exists();

        if ($isBooked) {
            return back()->with('error', 'Kamar ini sudah dipesan di tanggal yang sama.');
        }

        $reservation->update([
            'room_id' => $request->room_id,
            'no_kamar' => Room::find($request->room_id)->no_kamar,
            'status_pemesanan' => 'Confirmed',
        ]);

        return redirect()->route('reservations.index')->with('success', 'Nomor kamar berhasil ditetapkan.');
    }

    public function edit(string $id)
    {
        $reservation = Reservation::findOrFail($id);
        $rooms = Room::all();

        return view('reservations-edit', compact('reservation', 'rooms'));
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
    
        // Cegah admin mengedit reservasi yang sudah "Completed"
        if ($reservation->status_pemesanan === 'Completed') {
            return back()->with('error', 'Reservasi yang sudah selesai tidak bisa diubah.');
        }
    
        $request->validate([
            'room_id' => 'nullable|exists:rooms,id',
            'tipe_kamar' => 'required|string',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'jumlah_tamu' => 'required|integer|min:1',
            'status_pemesanan' => 'required|in:Pending,Confirmed,Checked-In,Completed,Canceled',
            'status_pembayaran' => 'required|in:Pending,Paid,Verified',
        ]);
    
        // Jika tipe kamar berubah, reset room_id agar admin pilih ulang kamar
        if ($reservation->tipe_kamar !== $request->tipe_kamar) {
            $reservation->update(['room_id' => null]);
            $reservation->update(['no_kamar' => null]);
        }
    
        $reservation->update([
            'tipe_kamar' => $request->tipe_kamar,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'jumlah_tamu' => $request->jumlah_tamu,
            'status_pemesanan' => $request->status_pemesanan,
            'status_pembayaran' => $request->status_pembayaran,
        ]);
    
        return redirect()->route('reservations.index')->with('success', 'Reservasi berhasil diperbarui. Silakan pilih ulang kamar jika diperlukan.');
    }
    


    public function destroy(Reservation $reservation)
    {
        $room_id = $reservation->room_id;
        $reservation->delete();
        $this->updateRoomStatus($room_id);
        return redirect()->route('reservations.index')->with('success', 'Reservasi berhasil dihapus.');
    }
    public function batal(Reservation $reservation)
    {
        $room_id = $reservation->room_id;
        $reservation->delete();
        $this->updateRoomStatus($room_id);
        return redirect()->route('customer.dashboard')->with('success', 'Reservasi berhasil dibatalkan.');
    }

    private function updateRoomStatus($room_id)
    {
        $hasActiveReservations = Reservation::where('room_id', $room_id)
            ->whereIn('status_pemesanan', ['Pending', 'Confirmed', 'Checked-In'])
            ->exists();

        if (!$hasActiveReservations) {
            Room::where('id', $room_id)->update(['status_kamar' => 'tersedia']);
        }
    }
}
