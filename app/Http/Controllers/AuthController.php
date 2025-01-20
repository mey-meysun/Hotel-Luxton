<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function register(){
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->hp = $request->hp;
        $user->save();
        return back()->with('success', 'Register successfully');
    }
}
