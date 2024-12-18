<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Menampilkan halaman registrasi
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Menyimpan data pendaftaran
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:login,email', // Tabel login
            'password' => 'required|min:6|confirmed', // Harus ada password confirmation
        ]);

        // Simpan user ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('login.show')->with('success', 'Account successfully created! Please login.');
    }
}
