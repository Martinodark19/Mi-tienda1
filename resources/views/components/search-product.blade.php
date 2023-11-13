<!-- resources/views/components/search-product.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Resultados de la búsqueda</h2>

        @if(count($products) > 0)
            <ul class="product-list">
                @foreach($products as $product)
                    <li class="product-item">
                        <h3>{{ $product->product_name }}</h3>
                        <p>Precio: ${{ $product->price }}</p>
                        <p>{{ $product->description }}</p>
                        <!-- Puedes agregar más detalles o estilos según tus necesidades -->
                    </li>
                @endforeach
            </ul>
        @else
            <p>No se encontraron resultados.</p>
        @endif
    </div>
@endsection
