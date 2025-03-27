<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class LaporanController extends Controller
{
    public function laporanBulanan(Request $request)
    {
        $bulan = $request->input('bulan'); // Ambil bulan dari input form

        // Ambil data kamar yang statusnya "Completed" dan sesuai bulan yang dipilih
        $laporan = Reservation::where('status_pemesanan', 'Completed')
            ->where('check_in', 'like', "$bulan%")
            ->with('room') // Ambil relasi room
            ->get();

        return view('bulanan', compact('laporan'));
    }
}
