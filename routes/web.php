<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\CartController;




Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Ruta protegida por middleware auth
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/create-paymentt', [MercadoPagoController::class,'createPayment'])->name('/create-paymentt');

    Route::group(['prefix' => 'cart'], function () {
        // Ruta para mostrar el contenido del carrito
    Route::get('/myCart', [CartController::class, 'index'])->name('cart.index');
    
        // Ruta para agregar un producto al carrito
    Route::post('/add/{productId}', [CartController::class, 'addProduct'])->name('cart.add');
    
        // Ruta para eliminar un producto del carrito
    Route::post('/remove/{productId}', [CartController::class, 'removeProduct'])->name('cart.remove');
    });    
    
});

// Ruta para mostrar productos públicos
Route::get('product/details/{id}', [ProductController::class, 'show'])->name('product.details');
Route::get('/categorias/belleza', [CategoriasController::class,"mostrarBelleza"])->name('categorias/belleza');
Route::get('/categorias/tecnologia', [CategoriasController::class,"mostrarTecnologia"])->name('categorias/tecnologia');
Route::get('/categorias/fragances', [CategoriasController::class,"mostrarFragancias"])->name('categorias/fragances');
Route::get('product/searchProduct', [ProductController::class, 'searchProduct'])->name('product/searchProduct');












require __DIR__.'/auth.php';

