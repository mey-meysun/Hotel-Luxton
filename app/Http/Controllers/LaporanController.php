<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    public function bulanan(Request $request)
    {
        $bulan = $request->input('bulan');
        $laporan = [];

        if ($bulan) {
            $laporan = Laporan::whereMonth('tanggal', date('m', strtotime($bulan)))
                ->whereYear('tanggal', date('Y', strtotime($bulan)))
                ->get();
        }

        return view('laporan.bulanan', compact('laporan'));
    }
}