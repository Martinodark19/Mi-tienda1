<?php

namespace App\Http\Controllers;
use App\Models\products;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    // funcion para mostrar productos de belleza
    public function mostrarBelleza()
{
    $productosBelleza = Products::whereBetween('id', [6, 10])->get();
    return view('components.categoria-belleza', compact('productosBelleza'));
}
// funcion para mostrar productos de tecnologia
public function mostrarTecnologia()
{
    $productosTecnologia = Products::whereBetween('id', [11, 15])->get();
    return view('components.categoria-tecnologia', compact('productosTecnologia'));
}
// funcion para mostrar productos de fragancias
public function mostrarFragancias()
{
    $productosFragancias = Products::whereBetween('id', [16, 20])->get();
    return view('components.categoria-fragances', compact('productosFragancias'));
}

}
