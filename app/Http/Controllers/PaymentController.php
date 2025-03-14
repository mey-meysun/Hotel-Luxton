<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller {
    // Menampilkan halaman pembayaran untuk customer
    public function show($id) {
        $reservation = Reservation::where('id', $id)
            ->where('id', Auth::id()) // Hanya pemilik reservasi yang bisa lihat
            ->firstOrFail();
        
        return view('payments', compact('reservation'));
    }

    // Simulasi pembayaran oleh customer
    public function pay($id) {
        $reservation = Reservation::where('id', $id)
            ->where('id', Auth::id()) // Pastikan customer hanya bisa bayar reservasi sendiri
            ->firstOrFail();

        if ($reservation->status_pembayaran === 'Pending') {
            $reservation->update(['status_pembayaran' => 'Paid']);
            return redirect()->route('customer.dashboard')->with('success', 'Pembayaran berhasil, menunggu verifikasi admin.');
        }

        return redirect()->route('customer.dashboard')->with('error', 'Pembayaran sudah dilakukan.');
    }

    // Admin memverifikasi pembayaran
    public function verify($id) {
        $reservation = Reservation::findOrFail($id);

        if ($reservation->status_pembayaran === 'Paid') {
            $reservation->update(['status_pembayaran' => 'Verified']);
            return redirect()->route('reservations.index')->with('success', 'Pembayaran telah diverifikasi.');
        }

        return redirect()->route('reservations.index')->with('error', 'Pembayaran belum dilakukan.');
    }
}

