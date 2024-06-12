@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Producto: {{ $product->name }}</h1>
    <p>Categoría: {{ $product->category }}</p>
    <p>Precio: ${{ number_format($product->price, 2) }}</p>
    @if($product->image)
        <img src="{{ Storage::url('images/' . $product->image) }}" alt="{{ $product->name }}" width="300">
    @endif
    <br><br>
    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</div>
@endsection
