<!-- resources/views/berita/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Tambah Berita</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('berita.store') }}">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Simpan</button>
        <button type="submit" class="btn btn-outline-success"><a href="{{ route('berita.index') }}"></a>Kembali</button>
        </div>
    </form>
    </div>
