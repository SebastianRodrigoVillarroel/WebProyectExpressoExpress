<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('resources/css/xds.css') }}">
</head>
<body>

<div id="content" class="contentContainer">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <img src="{{ asset('resources/images/logo.png') }}" width="200px">
        <br><br><br>
        <input type="email" name="email" placeholder="Correo Electrónico" required><br><br>
        <input type="password" name="password" placeholder="Contraseña" required><br><br>
        <button type="submit"><strong>Iniciar Sesión</strong></button>
        <br>
        <p>____________________O____________________</p>
        <br>
    </form>
    <button id="registrarseBtn" onclick="window.location.href='{{ route('register') }}'"><strong>Registrarse</strong></button>
</div>

</body>
</html>
