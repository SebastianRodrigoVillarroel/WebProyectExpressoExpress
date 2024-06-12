<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Espresso Express - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('styles/stylesmain.css') }}">
</head>
<body class="container">
    <header>
        <h1>Espresso Express</h1>
        <p>Tu lugar para el mejor café.</p>
    </header>
    <nav>
        <a href="{{ route('main') }}">Inicio</a>
        <a href="#menu">Menú</a>
        <a href="#Redes">Redes</a>
        <a href="{{ route('login') }}">Iniciar Sesión</a>
    </nav>
    <div id="content">
        @yield('content')
    </div>
    <footer>
        <p>&copy; 2024 Espresso Express</p>
    </footer>
</body>
</html>
