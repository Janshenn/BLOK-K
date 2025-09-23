<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // tampilkan form register
    public function showRegister()
    {
        return view('auth.register');
    }

    // proses simpan user baru
    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'no_telp'  => 'required|string|max:15',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'password.confirmed' => 'Password dan konfirmasi password tidak cocok!',
            'password.min'       => 'Password minimal 6 karakter.',
            'email.unique'       => 'Email sudah digunakan.',
        ]);

        User::create([
            'name'     => $validated['username'],
            'email'    => $validated['email'],
            'password' => Hash::make($validated['password']),
            'no_telp'  => $validated['no_telp'],
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
