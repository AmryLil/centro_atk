<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\tugasakhirController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/barang', [BarangController::class, 'index'])->name('barang.index');

// Route untuk halaman form tambah barang (create)
Route::get('/admin/barang/create', [BarangController::class, 'create'])->name('barang.create');

// Route untuk menyimpan data barang (store)
Route::post('/admin/barang', [BarangController::class, 'store'])->name('barang.store');

// Route untuk menampilkan detail barang (show)
Route::get('/admin/barang/{id}', [BarangController::class, 'show'])->name('barang.show');

// Route untuk halaman form edit barang (edit)
Route::get('/admin/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');

// Route untuk memperbarui data barang (update)
Route::put('/admin/barang/{id}', [BarangController::class, 'update'])->name('barang.update');

// Route untuk menghapus barang (destroy)
Route::delete('/admin/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');

Route::get('/register', [RegisterController::class, 'create'])->name('register.show');

// Proses menyimpan registrasi
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
// Menampilkan form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.show');

// Memproses login
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Halaman Home setelah login
Route::get('/home', function () {
    return view('home');  // Gantilah sesuai halaman home Anda
})->name('home');

// Tambah barang

Route::get('/register', [tugasakhirController::class,                   'showRegister']);
Route::get('/barang', [tugasakhirController::class,                     'showBarang'])->name('barang');
Route::get('/keranjang', [tugasakhirController::class,                  'showKeranjang'])->name('keranjang');
Route::get('/keranjang/pembayaran', [tugasakhirController::class,       'showPembayaran'])->name('pembayaran');
Route::get('/keranjang/pembayaran/hasil', [tugasakhirController::class, 'showHasil'])->name('hasilpembayaran');
Route::get('/admin', [tugasakhirController::class,                      'showHomeAdmin'])->name('adminhome');

Route::get('/admin/riwayat', [tugasakhirController::class, 'RiwayatTransaksi'])->name('riwayat');
