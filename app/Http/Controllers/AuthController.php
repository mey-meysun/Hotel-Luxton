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
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|min:3|max:20|unique:users,username',
            'password' => 'required|min:3',
            'hp' => 'required|digits_between:10,15|unique:users,hp',
        ]);

        $user = new User();
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->password_length = strlen($request->password);
        $user->hp = $request->hp;
        $user->save();
        return redirect('/login')->with('success', 'Silahkan Login.');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {

        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect('/admin/dashboard')->with('success', 'Selamat Datang ' . ucwords($user->nama) . '!');
            }
            return redirect('/profil')->with('success', 'Selamat Datang ' . ucwords($user->nama) . '!');
        }
        return back()->with('error', 'Username atau Password salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Sampai Jumpa Kembali ~');
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

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'username' => 'required|string|min:3|max:20|unique:users,username,' . $user->id,
            'hp' => 'required|digits_between:10,15|unique:users,hp,' . $user->id,
            'password' => 'nullable|min:3',
        ]);

        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->hp = $request->hp;

        if (!empty($request->password)) {
            $user->password_length = strlen($request->password);
            $user->password = $request->password;
        }

        $user->save();
        return redirect()->route('customer.profil')->with('success', 'Profil berhasil diperbarui.');
    }
}
