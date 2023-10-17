<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Laravel\Sail\Console\PublishCommand;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita.index', ['berita' => Berita::all()]);
    }
    public function show($id)
    {
        $berita = Berita::findOrFail($id); // Temukan berita berdasarkan ID
        return view('berita.show', ['berita' => $berita]);
    }
    public function store(Request $request)
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

    public function edit($id)
    {
        $berita = Berita::findOrFail($id); // Temukan berita berdasarkan ID
        return view('berita.edit', ['berita' => $berita]);
    }

    public function update(Request $request, $id)
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

    public function delete($id)
    {
        $berita = Berita::findOrFail($id); // Temukan berita berdasarkan ID
        $berita->delete(); // Hapus berita dari database

        return redirect('/berita')->with('success', 'Berita berhasil dihapus');
    }
    public function create()
    {
        return view('berita.create');
    }
}
