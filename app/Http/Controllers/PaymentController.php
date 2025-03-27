<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    // Menampilkan halaman pembayaran untuk customer
    public function show($id)
    {

        $reservation = Reservation::with('room')->where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $harga_kamar = $reservation->room
            ? $reservation->room->harga_kamar
            : Room::where('tipe_kamar', $reservation->tipe_kamar)->first()->harga_kamar;


            return view('payments', compact('reservation', 'harga_kamar'));
    }

    // Simulasi pembayaran oleh customer
    public function pay($id)
    {
        $reservation = Reservation::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        if ($reservation->status_pembayaran === 'Pending') {
            $reservation->update(['status_pembayaran' => 'Paid']);
            return redirect()->route('customer.dashboard')->with('success', 'Pembayaran berhasil, menunggu verifikasi admin.');
        }

        return redirect()->route('customer.dashboard')->with('error', 'Pembayaran sudah dilakukan.');
    }

    // Admin memverifikasi pembayaran sekaligus menetapkan nomor kamar
    public function verify(Request $request, $id)
    {
        $request->validate([
            'no_kamar' => 'required'
        ]);
    
        $reservation = Reservation::findOrFail($id);
    
        // Cari room berdasarkan nomor kamar
        $room = Room::where('no_kamar', $request->no_kamar)->first();
        if (!$room) {
            return back()->with('error', 'Nomor kamar tidak ditemukan.');
        }
    
        $reservation->update([
            'room_id' => $room->id,
            'no_kamar' => $room->no_kamar,
            'status_pembayaran' => 'Verified',
            'status_pemesanan' => 'Confirmed'
        ]);
    
        return back()->with('success', 'Reservasi telah diverifikasi dan kamar sudah ditetapkan.');
    }
    
}
