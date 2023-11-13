@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <div class="container">
        <!-- Formulario de búsqueda -->
        <form action="{{ route('product/searchProduct') }}" method="GET" class="search-form">
            <label for="search">Buscar Productos:</label>
            <input type="text" name="search" id="search" value="{{ request('search') }}">
            <button type="submit">Buscar</button>
        </form>
        
        <!-- mostramos los productos y si redirigimos a la url de cada producto -->
        @foreach ($products as $product)
            <div class="product-container">
                <a href="{{ route('product.details', ['id' => $product->id]) }}">
                    <h2>{{ $product->product_name }}</h2>
                    <p>Precio: ${{ $product->price }}</p>
                    <img src="{{ $product->image_url }}" alt="{{ $product->product_name }}" width="200">
                </a>
                
                <!-- Formulario para añadir al carrito -->
                <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="post">
                    @csrf
                    <button type="submit">Añadir al Carrito</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
