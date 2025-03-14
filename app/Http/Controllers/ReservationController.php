<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    // admin
    public function index()
    {
        $reservations = Reservation::with('user', 'room')->get();
        return view('reservations', compact('reservations'));
    }

    public function create($room_id = null) {
        $rooms = Room::where('status_kamar', 'Tersedia')->get();
        $selectedRoom = $room_id ? Room::find($room_id) : null;
        return view('reservations-create', compact('rooms', 'selectedRoom'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'jumlah_tamu' => 'required|integer|min:1',
        ]);

        $room = Room::findOrFail($request->room_id);

        if ($room->status_kamar !== 'Tersedia') {
            return back()->with('error', 'Kamar tidak tersedia.');
        }

        Reservation::create([
            'user_id' => Auth::id(),
            'room_id' => $request->room_id,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'jumlah_tamu' => $request->jumlah_tamu,
            'status_reservasi' => 'Pending',
            'status_pembayaran' => 'Pending',
        ]);

        $room->update(['status_kamar' => 'Terisi']);

        return redirect()->route('reservations.index')->with('success', 'Reservasi berhasil.');
    }

    public function edit(Reservation $reservation)
    {
        return view('reservations-edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'status_reservasi' => 'required|in:Pending,Confirmed,Checked-in,Completed,Canceled',
            'status_pembayaran' => 'required|in:Pending,Paid,Verified',
        ]);

        $reservation->update([
            'status_reservasi' => $request->status_reservasi,
            'status_pembayaran' => $request->status_pembayaran,
        ]);

        if ($request->status_reservasi === 'Canceled') {
            $reservation->room->update(['status_kamar' => 'Tersedia']);
        }

        return redirect()->route('reservations.index')->with('success', 'Reservasi diperbarui.');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservations.index')->with('success', 'Reservasi dihapus.');
    }
}
