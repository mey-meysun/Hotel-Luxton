<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function customer() {
        $reservations = Reservation::where('user_id', Auth::id())->get();
        return view('dashboard-user', compact('reservations'));
    }

    public function profil(){
        return view('profil');
    }

    public function profiledit(){
        return view('profiledit');
    }

    
}