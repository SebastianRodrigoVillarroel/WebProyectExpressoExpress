@extends('layouts.app')

@section('content')
<div class="container custom-container">
    <h1 class="title">Publicaciones</h1>
    <div class="table-container">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>categoría</th>
                    <th>imagen</th>
                    <th>descripcion</th>
                    <th>fecha creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category }}</td>
                        <td>
                            @if($product->image)
                                <img src="{{ asset('resources/images/' . $product->image) }}" alt="{{ $product->name }}" width="100">
                            @endif
                        </td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product) }}" class="btn custom-btn">Modificar</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn custom-btn">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="button-container">
        <a href="{{ route('products.create') }}" class="btn custom-btn">Registrar</a>
    </div>
</div>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #F7F0E3;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    header {
        background-color: #665e59;
        color: #fff;
        padding: 20px;
        text-align: center;
        font-family: "Lobster", cursive;
    }

    .menuh {
        color: #665e59;
        font-size: 50px;
        text-align: center;
    }

    nav {
        background-color: #aa9e96;
        text-align: left;
        padding: 10px;
        font-size: 20px;
        font-family: "Lobster", cursive;
    }

    nav a {
        color: #ffffff;
        text-decoration: none;
        margin: 10px;
        margin-right: 235px;
    }

    .contenido {
        margin: 0 auto;
        padding: 20px;
        background-color: #ebebeb;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: left;
    }

    .custom-container {
        background-color: #f7f4f0;
        padding: 40px;
        border-radius: 10px;
    }

    .title {
        font-family: 'Lobster', cursive;
        font-size: 2.5em;
        color: #5a5a5a;
        text-align: left;
        margin-bottom: 20px;
    }

    .table-container {
        overflow-x: auto;
    }

    .styled-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 1em;
        font-family: 'Arial', sans-serif;
        color: #5a5a5a;
        text-align: left;
    }

    .styled-table thead tr {
        background-color: #eee;
        color: #333;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
        border: 1px solid #ddd;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #ddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #5a5a5a;
    }

    .nav-bar {
        text-align: right;
        margin-top: 20px;
    }

    .btn.custom-btn {
        background-color: #7c7050;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 10px;
        margin-right: 10px;
    }

    .btn.custom-btn:hover {
        background-color: #5e5540;
    }

    footer {
        background-color: #665e59;
        color: #FFF;
        text-align: center;
        padding: 10px;
    }

    footer p {
        margin-top: 10px;
    }

    .redes {
        text-align: center;
    }

    .circle-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 300px;
    }

    .circle-container img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin: 0 10px;
    }
</style>

@endsection
