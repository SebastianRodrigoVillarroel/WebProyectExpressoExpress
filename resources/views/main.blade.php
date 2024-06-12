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
    <link rel="stylesheet" href="{{ asset('resources/css/stylesForMain.css') }}">
</head>
<body class="container">
    <header>
        <h1>Espresso Express</h1>
        <p>Encuentra las mejores cafeterías en Cochabamba, Bolivia</p>
    </header>
    <nav>
        <a href="#inicio">Inicio</a>
        <a href="{{ route('cafes') }}">Cafés</a>
        <a href="{{ route('postres') }}">Postres</a>
        <a href="{{ route('login') }}">Iniciar Sesión</a>
    </nav>
    <div id="inicio" class="contenido">
        <h2 class="bienvenida">Bienvenid@ a Espresso Express</h2>
        <p>Explora las mejores cafeterías en Cochabamba y disfruta de una experiencia única con una amplia variedad de productos. Conoce las especialidades de cada cafetería, sus ubicaciones, horarios, y más.</p>
        <br><br>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('resources/images/pastel.jpg') }}" class="d-block w-100 menu-image" alt="Pastel de café">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('resources/images/cafe1.png') }}" class="d-block w-100 menu-image" alt="Café 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('resources/images/orquidea.jpg') }}" class="d-block w-100 menu-image" alt="Orquídea con café">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('resources/images/cafe2.jpg') }}" class="d-block w-100 menu-image" alt="Café 2">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <h1 id="cafeterias" class="menuh"><strong>Cafeterías Destacadas</strong></h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('resources/images/capresso.jpg') }}" class="card-img-top menu-image" alt="Cafetería 1">
                <div class="card-body">
                    <h2 class="card-title"><strong>Café Capresso</strong></h2>
                    <p class="card-text">
                        Dirección: Calle San Martín #123<br>
                        Horario: Lunes a Viernes 8:00 AM - 10:00 PM<br>
                        Teléfono: +591 4 1234567<br>
                        Descripción: Un café elegante y moderno que ofrece una experiencia única con su variada selección de cafés especiales y deliciosos acompañamientos.
                    </p>
                    <a href="https://maps.app.goo.gl/4BgytZ8cq67Kcwgo6" class="btn btn-primary" target="_blank">Ver en Google Maps</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('resources/images/coccolate.jpg') }}" class="card-img-top menu-image" alt="Coccolate">
                <div class="card-body">
                    <h2 class="card-title"><strong>Coccolate</strong></h2>
                    <p class="card-text">
                        Dirección: Avenida Melchor Pérez #456<br>
                        Horario: Lunes a Sábado 9:00 AM - 9:00 PM<br>
                        Teléfono: +591 4 7654321<br>
                        Descripción: Conocido por sus deliciosos chocolates artesanales y una excelente variedad de bebidas de café, Coccolate es un lugar perfecto para relajarse y disfrutar.
                    </p>
                    <a href="https://maps.app.goo.gl/4BgytZ8cq67Kcwgo6" class="btn btn-primary" target="_blank">Ver en Google Maps</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="{{ asset('resources/images/miCafeteria.png') }}" class="card-img-top menu-image" alt="Chocolatería Central">
                <div class="card-body">
                    <h2 class="card-title"><strong>Chocolatería Central</strong></h2>
                    <p class="card-text">
                        Dirección: Plaza Principal #789<br>
                        Horario: Todos los días 7:00 AM - 8:00 PM<br>
                        Teléfono: +591 4 9876543<br>
                        Descripción: Especializada en chocolate y café, la Chocolatería Central es un lugar ideal para los amantes del dulce y los sabores intensos del café.
                    </p>
                    <a href="https://maps.app.goo.gl/QP2y2tSF5YD2HnFHA" class="btn btn-primary" target="_blank">Ver en Google Maps</a>
                </div>
            </div>
        </div>
    </div>

    <h1 id="noticias" class="menuh"><strong>Noticias y Novedades</strong></h1>
    <div class="contenido">
        <p>Mantente informado sobre las últimas noticias y novedades en el mundo del café en Cochabamba. Aquí encontrarás artículos sobre nuevas aperturas de cafeterías, innovaciones en la industria del café, y mucho más.</p>
        <ul>
            <li><strong>Nueva apertura:</strong> Café Aroma abre sus puertas en el centro de Cochabamba.</li>
            <li><strong>Innovación:</strong> Coccolate introduce una nueva línea de chocolates orgánicos.</li>
            <li><strong>Evento especial:</strong> Chocolatería Central celebra su aniversario con descuentos especiales.</li>
        </ul>
    </div>

    <h1 id="testimonios" class="menuh"><strong>Testimonios</strong></h1>
    <div class="contenido">
        <p>"El mejor café que he probado en mi vida. Definitivamente mi lugar favorito en Cochabamba." - María P.</p>
        <p>"Un ambiente acogedor y un servicio excelente. ¡Recomendado!" - Juan C.</p>
        <p>"Los pasteles son deliciosos y el café es simplemente perfecto." - Ana R.</p>
    </div>

    <footer>
        <p>&copy; 2024 Espresso Express</p>
    </footer>
</body>
</html>
