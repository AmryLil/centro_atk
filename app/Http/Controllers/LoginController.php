<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Menampilkan halaman login
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Proses login
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Cek kredensial pengguna
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Attempt login menggunakan tabel login
        if (Auth::attempt($credentials)) {
            // Redirect ke home jika berhasil login
            return redirect()->route('home')->with('success', 'Berhasil login!');
        }

        // Jika gagal login
        return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
    }

    /**
     * Logout pengguna
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.show')->with('success', 'Berhasil logout!');
    }
}
