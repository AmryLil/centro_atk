<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('barangadmin', compact('barang'));
    }

    public function create()
    {
        return view('tambahbarang');
    }

    public function store(Request $request)
    {
        try {
            $data = $request->all();

            if ($request->hasFile('gambar')) {
                $data['gambar'] = $request->file('gambar')->store('images', 'public');
            }

            Barang::create($data);

            return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            abort(500, 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('editbarang', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        try {
            $barang = Barang::findOrFail($id);
            $data   = $request->all();

            if ($request->hasFile('gambar')) {
                if ($barang->gambar) {
                    Storage::delete('public/' . $barang->gambar);
                }
                $data['gambar'] = $request->file('gambar')->store('images', 'public');
            }

            $barang->update($data);

            return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            abort(500, 'Terjadi kesalahan saat memperbarui data.');
        }
    }

    public function destroy($id)
    {
        try {
            $barang = Barang::findOrFail($id);

            if ($barang->gambar) {
                Storage::delete('public/' . $barang->gambar);
            }

            $barang->delete();

            return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            abort(500, 'Terjadi kesalahan saat menghapus data.');
        }
    }
}
