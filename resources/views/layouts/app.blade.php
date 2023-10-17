<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nama Aplikasi Anda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> <!-- Contoh Bootstrap CSS -->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Nama Aplikasi Anda</a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('berita.index') }}">Berita</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
        </li>
        <!-- Tambahkan navigasi lainnya di sini sesuai kebutuhan -->
    </ul>
</nav>

<div class="container">
    @yield('content') <!-- Ini adalah bagian yang akan diisi oleh view spesifik -->
</div>

<footer>
    <!-- Footer Anda di sini -->
</footer>

</body>
</html>
