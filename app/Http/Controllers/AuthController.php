<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
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

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect('/admin/dashboard')->with('success', 'Login Admin Berhasil');
            }
            return redirect('/user/dashboard')->with('success', 'Login Berhasil');

        }
        return back()->with('error', 'Username atau Password salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function customer()
    {
        return view('dashboard-user');
    }
}
