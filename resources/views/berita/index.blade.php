<!-- resources/views/berita/index.blade.php -->

@extends('layouts.app')

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Hida News</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('berita.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@section('content')
    <h3>Daftar Berita</h3>
    <ul>
        @foreach ($berita as $berita)
            <li>
                <a href="{{ route('berita.show', $berita->id) }}">{{ $berita->judul }}</a>
            </li>
            <a href="{{ route('berita.create') }}" button type="button" class="btn btn-primary" enable>Tambah</button>
            </a>
            <a href="{{ route('berita.edit', $berita->id) }}" button type="button" class="btn btn-primary"
                enable>Edit</button>
            </a>
            <a href="{{ route('berita.delete', $berita->id) }}"button type="button" class="btn btn-primary"
                enable>Hapus</button>
            </a>
        @endforeach
    </ul>
@endsection
