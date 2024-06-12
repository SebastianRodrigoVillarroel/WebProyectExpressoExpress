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
    <title>Espresso Express</title>
    <link rel="stylesheet" href="{{ asset('resources/css/window.css') }}">
</head>
<body class="container">
    <header>
        <h1>Espresso Express</h1>
        <p>Encuentra las mejores cafeterías en Cochabamba, Bolivia</p>
    </header>
    <nav>
        <a href="{{ route('main') }}">Inicio</a>
        <a href="{{ route('cafes') }}">Cafés</a>
        <a href="{{ route('postres') }}">Postres</a>
        <a href="{{ route('login') }}">Iniciar Sesión</a>
    </nav>
    <div class="contenido">
        <h1>Ventana de Control</h1>
        <ul class="circle-container">
            <li>
                <a href="{{ route('products.index') }}">
                    <img src="{{ asset('resources/images/products.png') }}" alt="Productos">
                </a>
            </li>
            <li>
                <a href="{{ route('register.form') }}">
                    <img src="{{ asset('resources/images/user.png') }}" alt="Usuarios">
                </a>
            </li>
        </ul>
    </div>
</body>
</html>
