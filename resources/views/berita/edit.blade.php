<!-- resources/views/berita/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Berita</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('berita.update', $berita->id) }}">
        @csrf
        @if (isset($berita))
            @method('PUT')
        @endif
        <form>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="judul" name="judul" class="form-control" id="judul" aria-describedby="Judul" value="{{ $berita->judul }}">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3">{{ $berita->deskripsi }}</textarea>
            </div>
            <button type="submit" class="btn btn-outline-primary">Simpan</button>
            <button type="submit" class="btn btn-outline-success"><a href="{{ route('berita.index') }}"></a>Kembali</button>
            </div>
        </form>
        </div>
