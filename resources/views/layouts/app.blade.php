<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hida News</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Contoh Bootstrap CSS -->
</head>

<body>
    <style>
        footer {
            background-color: #333333;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>
    @yield('content')

    <footer>
        &copy; Hidayatul Khasanah - Studi Independen | Fullstack Web Developer at PT. Gits Indonesia
    </footer>
</body>
</html>
