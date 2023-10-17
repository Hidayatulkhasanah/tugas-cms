<!-- resources/views/berita/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar Berita atau Proyek</h1>
    <ul>
        @foreach($beritas as $berita)
            <li>
                <a href="{{ route('berita.show', $berita->id) }}">{{ $berita->judul }}</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('berita.create') }}">Tambah Berita atau Proyek Baru</a>
@endsection
