<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Espresso Express - Postres</title>
    <link rel="stylesheet" href="{{ asset('resources/css/stylesForMain.css') }}">
</head>
<body class="container">
    <header>
        <h1>Espresso Express</h1>
        <p>Tu lugar para el mejor café.</p>
    </header>
    <nav>
        <a href="{{ route('main') }}">Inicio</a>
        <a href="{{ route('cafes') }}">Cafés</a>
        <a href="{{ route('postres') }}">Postres</a>
        <a href="{{ route('login') }}">Iniciar Sesión</a>
    </nav>
    <h1 class="menuh"><strong>Postres</strong></h1>
    <div class="menu">
        <div class="row">
            @foreach($products as $product)
                @if($product->category == 'Postre')
                    <div class="col-md-6">
                        <div class="card" style="width: 100%;">
                            @if($product->image)
                                <img src="{{ asset('resources/images/' . $product->image) }}" class="card-img-top menu-image" alt="{{ $product->name }}">
                            @endif
                            <div class="card-body">
                                <h2 class="card-title"><strong>{{ $product->name }}</strong></h2>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">
                                    Precio: {{ number_format($product->price, 2) }} Bs.
                                </p>
                                @if($product->location)
                                    <a href="{{ $product->location }}" class="btn btn-primary" target="_blank">Ver Cafetería</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</body>
</html>
