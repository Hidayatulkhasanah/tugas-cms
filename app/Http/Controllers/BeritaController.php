<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BeritaController; // Sesuaikan dengan nama model yang telah dibuat
use Laravel\Sail\Console\PublishCommand;

class BeritaController extends Controller
{
    Public function index()
    {
        $berita = Berita::all(); // Mengambil semua berita dari database
        return view('berita.index', ['beritas' => $beritas]);
    }

    Public function create()
    {
        return view('berita.create');
    }

    Public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        // Simpan berita baru ke dalam database
        Berita::create($validatedData);

        return redirect('/berita')->with('success', 'Berita berhasil ditambahkan');
    }

    Public function edit($id)
    {
        $berita = Berita::findOrFail($id); // Temukan berita berdasarkan ID
        return view('berita.edit', ['berita' => $berita]);
    }

    Public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        $berita = Berita::findOrFail($id); // Temukan berita berdasarkan ID
        $berita->update($validatedData); // Perbarui berita

        return redirect('/berita')->with('success', 'Berita berhasil diperbarui');
    }

    Public function destroy($id)
    {
        $berita = Berita::findOrFail($id); // Temukan berita berdasarkan ID
        $berita->delete(); // Hapus berita dari database

        return redirect('/berita')->with('success', 'Berita berhasil dihapus');
    }
}
    Public function create()
{
    if (auth()->user()->isAdmin()) {
        // Hanya admin yang bisa membuat berita
        return view('berita.create');
    } else {
        // Redirect atau menampilkan pesan akses ditolak
        return redirect('/berita')->with('error', 'Anda tidak diizinkan untuk menambah berita.');
    }
}
