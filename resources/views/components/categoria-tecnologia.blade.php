@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Categoría: Tecnología</h2>
        <div class="products">
            @foreach ($productosTecnologia as $producto)
                <div class="product-container">
                    <h3>{{ $producto->product_name }}</h3>
                    <p>Precio: ${{ $producto->price }}</p>
                    <img src="{{ $producto->image_url }}" alt="{{ $producto->product_name }}" width="200">
                </div>
            @endforeach
        </div>
    </div>
@endsection
