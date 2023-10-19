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
        $berita = Berita::findOrFail($id);
        return view('berita.show', ['berita' => $berita]);
    }
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        Berita::create($validatedData);
        return redirect('/berita')->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.edit', ['berita' => $berita]);
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->update($validatedData);

        return redirect('/berita')->with('success', 'Berita berhasil diperbarui');
    }

    public function delete($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect('/berita')->with('success', 'Berita berhasil dihapus');
    }
    public function create()
    {
        return view('berita.create');
    }
}