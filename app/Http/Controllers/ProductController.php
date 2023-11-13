<?php
namespace App\Http\Controllers;

use App\Models\products; // Importamos el modelo de productos

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // En el método "index", obtenemos una lista de productos de la base de datos.
        $products = products::whereBetween('id', [6, 20])->get();
        
        // Luego, cargamos la vista 'components.product-view' y pasamos los productos a la vista.
        return view('components.product-view', compact('products'));
    }

   
    public function searchProduct(Request $request)
{
    $searchTerm = $request->input('search');

    // Buscar el producto en la base de datos
    $products = Products::where('product_name', 'like', '%' . $searchTerm . '%')
                ->orderBy('product_name', 'asc')
                ->get();

    // Si se encuentra al menos un producto, mostrar los detalles
    if ($products->isNotEmpty()) {
        $product = $products[0];
        return view('product-details', compact('product'));
    } else {
        // Si no se encuentra ningún producto, mostrar un mensaje o redirigir a una vista específica
        return view('no-results');
    }
}


    public function show($id)
    {
        // El método "show" se utiliza para mostrar los detalles de un producto específico basado en su ID.
        $product = Products::find($id);
         // Buscamos el producto en la base de datos.

        // Si el producto no se encuentra, generamos un error 404 (no encontrado).
        if (!$product) {
            abort(404);
        }

        // Si el producto se encuentra, cargamos la vista 'product.details' y pasamos el producto a la vista.
        return view('product-details', compact('product'));
    }
}
