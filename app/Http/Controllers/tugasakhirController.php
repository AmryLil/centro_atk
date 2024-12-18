<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tugasakhirController extends Controller
{
    
    public function showRegister()
    {
        return view('register');
    }
    public function showHome()
    {
        return view('home'); 
    }
    public function showBarang()
    {
        return view('barang'); 
    }
    public function showKeranjang()
    {
        return view('keranjang'); 
    }
    public function showPembayaran()
    {
        return view('pembayaran'); 
    }
    public function showHasil()
    {
        return view('hasilpembayaran'); 
    }
    public function showHomeAdmin()
    {
        return view('adminhome'); 
    }
    public function showBarangAdmin()
    {
        return view('barangadmin'); 
    }
    public function TambahBarangAdmin()
    {
        return view('tambahbarang'); 
    }
    public function EditBarangAdmin()
    {
        return view('editbarang'); 
    }
    public function RiwayatTransaksi()
    {
        return view('riwayat'); 
    }
}
