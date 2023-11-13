@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $product->product_name }}</h2>
        <p>Precio: ${{ $product->price }}</p>
        <img src="{{ $product->image_url }}" alt="{{ $product->product_name }}" width="200">
        <!-- Otros detalles del producto aquí -->
    </div>
@endsection
