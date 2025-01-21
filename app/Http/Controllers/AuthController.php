<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function register()
    {
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

    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $credetials = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        if (Auth::attempt($credetials)) {
            return redirect('/home')->with('success', 'Login berhasil');
        }
        return back()->with('error', 'Username or Password salah');
    }
}
