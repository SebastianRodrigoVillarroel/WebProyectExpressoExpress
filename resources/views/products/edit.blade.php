<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Editar Producto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F7F0E3;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            background-color: #f7f4f0;
            padding: 40px;
            border-radius: 10px;
            max-width: 600px;
            margin: 40px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            font-family: 'Lobster', cursive;
            font-size: 2.5em;
            color: #5a5a5a;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #5a5a5a;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
            box-sizing: border-box;
        }

        .btn {
            background-color: #7c7050;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 10px;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #5e5540;
        }

        .image-preview {
            margin-top: 20px;
        }

        .image-preview img {
            width: 100px;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('image-preview');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</head>
<body>
<div class="container">
    <h1>Editar Producto</h1>
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoría</label>
            <select class="form-control" id="category" name="category" required>
                <option value="Cafe" {{ $product->category == 'Cafe' ? 'selected' : '' }}>Café</option>
                <option value="Postre" {{ $product->category == 'Postre' ? 'selected' : '' }}>Postre</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" name="description" required>{{ $product->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="image" name="image" onchange="previewImage(event)">
            <div class="image-preview">
                @if($product->image)
                    <img id="image-preview" src="{{ asset('resources/images/' . $product->image) }}" alt="{{ $product->name }}">
                @else
                    <img id="image-preview" src="#" alt="Previsualización de la imagen">
                @endif
            </div>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Ubicación</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ $product->location }}" required>
        </div>
        <button type="submit" class="btn">Actualizar</button>
    </form>
</div>
</body>
</html>
