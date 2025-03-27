<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        
        $rooms = Room::all();
        $reservations = Reservation::all();
        $reservations = Reservation::orderBy('created_at', 'desc')->get();
        // dd($reservations->toArray());
        return view('dashboard-admin', compact('rooms','reservations'));
    }
}
