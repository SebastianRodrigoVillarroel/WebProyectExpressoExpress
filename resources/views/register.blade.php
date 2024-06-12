<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="{{ asset('resources/css/xds.css') }}">
</head>
<body>

<div id="content" class="contentContainer2">
    <h1>Formulario De Registro</h1>
    <form method="POST" action="{{ route('register.post') }}">
        @csrf
        <input type="text" name="nombre" placeholder="Ingrese su Nombre" required><br>
        <input type="text" name="apellido_paterno" placeholder="Apellido Paterno" required><br>
        <input type="text" name="apellido_materno" placeholder="Apellido Materno" required><br>
        <input type="text" name="direccion" placeholder="Direccion" required><br>
        <input type="date" name="fecha_nacimiento" required><br>
        <input type="email" name="email" placeholder="Correo Electrónico" required><br>
        <input type="password" name="password" placeholder="Contraseña" required><br>
        <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" required><br>
        <select name="rol" required>
            <option value="administrador">Administrador</option>
            <option value="empleado">Empleado</option>
            <option value="cliente">Cliente</option>
        </select><br><br>
        <button type="submit">Registrar</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

</body>
</html>
