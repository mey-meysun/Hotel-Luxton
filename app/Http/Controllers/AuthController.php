<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        return redirect()->route('login')->with('success', 'Register successfully');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard')->with('success', 'Login Admin Berhasil');
            }

            return redirect()->route('customer.profil')->with('success', 'Login Berhasil');
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
        $user = Auth::user();
        return view('edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'     => 'required|min:3',
            'email'    => 'required|min:5',
            'username' => 'required|min:3',
            'hp'       => 'required|numeric|digits_between:10,13',
            'password' => 'nullable|min:3',
        ]);

        $user = User::findOrFail($id);

        $data = [
            'nama'     => $request->nama,
            'email'    => $request->email,
            'username' => $request->username,
            'hp'       => $request->hp,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password); // Pastikan hanya di-hash sekali
            $data['password_length'] = strlen($request->password); // Simpan panjang password
        }

        return redirect()->route('customer.profil')->with('success', 'Data user berhasil diperbarui!');
    }
}
