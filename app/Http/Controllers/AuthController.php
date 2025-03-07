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
        $user->password_length = strlen($request->password);
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
            return redirect('/profil')->with('success', 'Login Berhasil');
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

    public function profil()
    {
        return view('profil');
    }

    public function edit()
    {
        return view('edit');
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->hp = $request->hp;

        if (!empty($request->password)) {
            $user->password_length = strlen($request->password);
            $user->password = $request->password;
        }

        $user->save();
        return redirect()->route('customer.profil')->with('success', 'Profil berhasil diperbarui');
    }
}
