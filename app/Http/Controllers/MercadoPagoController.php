<?php
// MercadoPagoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercadoPago\SDK;
use MercadoPago\Preference;
use MercadoPago\Item;

class MercadoPagoController extends Controller
{
    public function createPayment(Request $request)
    {
        // Configurar la clave de acceso de Mercado Pago
        SDK::setAccessToken(config('MERCADO_PAGO_ACCESS_TOKEN'));

        // Obtener información del producto desde el formulario
        $productId = $request->input('product_id');
        $productName = $request->input('product_name');
        $productPrice = $request->input('product_price');

        // Crear un objeto de preferencia de pago
        $preference = new Preference();

        // Crear un ítem con la información del producto
        $item = new Item();
        $item->title = $productName;
        $item->quantity = 1;
        $item->unit_price = $productPrice; // Precio en la moneda de tu país
        $preference->items = [$item];

        // Guardar la preferencia
        $preference->save();

        // Obtener el enlace de pago
        $paymentUrl = $preference->init_point;

        // Redirigir al enlace de pago de Mercado Pago
        return redirect($paymentUrl);
    }
}
