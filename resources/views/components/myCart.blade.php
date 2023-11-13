@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Carrito de Compras</h1>

        @if(count($productosEnCarrito) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productosEnCarrito as $producto)
                        <tr>
                            <td>{{ $producto->product_name }}</td>
                            <td>{{ $cantidades[$producto->id] }}</td>
                            <td>${{ $producto->price }}</td>      <br>
                            <img src="{{ $producto->image_url }}" width="200">
                            <td>
                                <form action="{{ route('cart.remove', ['productId' => $producto->id]) }}" method="post">
                                    @csrf
                                    <button type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No hay productos en el carrito.</p>
        @endif

        @if(count($productosEnCarrito) > 0)
        <table>
            <!-- ... (tabla de productos) ... -->
        </table>
    
        <p>Suma Total: ${{ $totalPrice }}</p>
    @else
        <p>No hay productos en el carrito.</p>
    @endif

        
    </div>
@endsection
