<div>
    <h2>Categoría: Fragancias</h2>
    <div class="products">
        @foreach ($productosFragancias as $producto)
            <div class="product-container">
                <h3>{{ $producto->product_name }}</h3>
                <p>Precio: ${{ $producto->price }}</p>
                <img src="{{ $producto->image_url }}" alt="{{ $producto->product_name }}" width="200">
            </div>
        @endforeach
    </div>
</div>
