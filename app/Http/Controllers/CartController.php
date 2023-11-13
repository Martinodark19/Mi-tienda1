<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class CartController extends Controller
{
    /**
     * Muestra el contenido del carrito.
     */
    public function index()
{
    // Obtiene el carrito de la sesión
    $cart = session('cart', []);

    // Obtiene los detalles de los productos en el carrito
    $productosEnCarrito = Products::whereIn('id', array_keys($cart))->get();

    // Calcula la suma total de precios
    $totalPrice = 0;
    foreach ($productosEnCarrito as $producto) {
        $totalPrice += $producto->price * $cart[$producto->id];
    }

    // Pasa los productos, las cantidades y la suma total a la vista
    return view('components.myCart', [
        'productosEnCarrito' => $productosEnCarrito,
        'cantidades' => $cart,
        'totalPrice' => $totalPrice,
    ]);
}

    /**
     * Agrega un producto al carrito.
     *
     * @param int $productId
     * @param int $quantity
     * @return \Illuminate\Http\RedirectResponse
     */


     public function addProduct($productId)
     {
         // Obtiene el carrito de la sesión
         $cart = session()->get('cart', []);
     
         // Agrega el producto al carrito con una cantidad de 1
         $cart[$productId] = isset($cart[$productId]) ? $cart[$productId] + 1 : 1;
     
         // Guarda el carrito en la sesión
         session()->put('cart', $cart);
     
         // Redirecciona directamente a la página del carrito
         return redirect()->route('cart.index')->with('success', 'Producto agregado al carrito');
     }

    /**
     * Elimina un producto del carrito.
     *
     * @param int $productId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeProduct($productId)
    {
        // Obtiene el carrito de la sesión
        $cart = session()->get('cart', []);

        // Elimina el producto del carrito
        unset($cart[$productId]);

        // Guarda el carrito actualizado en la sesión
        session()->put('cart', $cart);

        // Redirecciona de vuelta a la página del carrito con un mensaje de éxito
        return redirect()->route('dashboard')->with('success', 'Producto eliminado del carrito');
    }
}
