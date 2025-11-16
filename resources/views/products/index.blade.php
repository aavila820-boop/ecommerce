@extends('layouts.app')
@section('content')
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .contenedor {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 32px;
            color: #333;
        }

        .grid-productos {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }

        .tarjeta {
            background-color: #fff;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .tarjeta img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .contenido {
            padding: 15px;
            flex: 1;
        }

        .contenido h2 {
            font-size: 18px;
            margin: 0 0 10px;
            color: #222;
        }

        .contenido p {
            font-size: 14px;
            color: #555;
            margin: 5px 0;
        }

        .precio {
            font-size: 20px;
            color: #e91e63;
            font-weight: bold;
            margin-top: 10px;
        }

        .boton {
            display: block;
            text-align: center;
            background-color: #28a745;
            color: white;
            padding: 10px;
            text-decoration: none;
            font-weight: bold;
            border-top: 1px solid #eee;
        }

        .boton:hover {
            background-color: #218838;
        }

        .btn.activo {
            background-color: #007bff;
            color: #fff;
        }
    </style>

    <div class="contenedor">
        <h1 class="display-4 fw-bold text-center mb-4">Productos Disponibles</h1>

        {{-- Filtros de categoría --}}
        <div class="text-center mb-4">
            {{-- Botón TODOS --}}
            <a href="{{ route('products.index') }}"
                class="btn btn-secondary m-3 {{ !$selectedCategory ? 'activo' : '' }}">
                Todos
            </a>

            {{-- Botones por categoría --}}
            @foreach ($categories as $category)
                <a href="{{ route('products.index', ['category' => $category->id]) }}"
                    class="btn btn-secondary m-3 {{ $selectedCategory == $category->id ? 'activo' : '' }}">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>

        <div class="grid-productos mb-4">
            @foreach ($products as $product)
                <div class="tarjeta">
                    {{-- Imagen — usa un placeholder temporal si no tienes imagen --}}
                    <img src="https://http2.mlstatic.com/D_NQ_NP_877891-MLA88103811437_072025-O.webp" alt="{{ $product->name }}">

                    <div class="contenido">
                        <h2>{{ $product->name }}</h2>

                        {{-- Nombre de la categoría --}}
                        <p>Categoría: {{ $product->category->name }}</p>

                        {{-- Nombre de la marca --}}
                        <p>Marca: {{ $product->brand->name }}</p>

                        <p>{{ $product->description }}</p>

                        <p class="precio">$ {{ number_format($product->price) }}</p>
                    </div>

                    <a href="#" class="boton">Ver producto</a>
                    <a href="#" class="boton">Agregar al carrito</a>
                </div>
            @endforeach
        </div>

        {{ $products->links() }}
    </div>
@endsection
