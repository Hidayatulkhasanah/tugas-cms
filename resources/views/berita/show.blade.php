<!-- resources/views/berita/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $berita->judul }}</h1>
    <p>{{ $berita->deskripsi }}</p>
    <a href="{{ route('berita.index') }}">Kembali</a>
@endsection
