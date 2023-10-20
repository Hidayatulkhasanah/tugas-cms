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
    <div class="container">
        <h3>Daftar Berita</h3>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('berita.create') }}" button type="button" class="btn btn-primary" enable>Tambah</button>
            </a>
        </div>

        @foreach ($berita as $berita)
            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><a href="{{ route('berita.show', $berita->id) }}">{{ $berita->judul }}</a></p>
                    <p>{{ $berita->deskripsi }}</p>
                </div>
                <a href="{{ route('berita.edit', $berita->id) }}" button type="button" class="btn btn-warning mb-2"
                    enable>Edit</button>
                </a>
                <a href="{{ route('berita.delete', $berita->id) }}"button type="button" class="btn btn-danger"
                    enable>Hapus</button>
                </a>
            </div>
        @endforeach
    </div>
@endsection
