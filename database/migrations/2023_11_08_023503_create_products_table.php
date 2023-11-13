<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Identificador del producto (int) - PK
            $table->string('product_name'); // Nombre del producto (varchar)
            $table->string('image_url'); // URL de la imagen (varchar)
            $table->float('price'); // Precio de producto (float)
            $table->unsignedBigInteger('category_id'); // Identificador de la categoría en tabla Categorías (int)
            $table->timestamps(); // Campos de fecha de creación y actualización

            // Definir la clave foránea para la relación con la tabla de categorías
            $table->foreign('category_id')->references('id')->on('categories'); // Reemplaza 'categorias' con el nombre real de tu tabla de categorías
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
