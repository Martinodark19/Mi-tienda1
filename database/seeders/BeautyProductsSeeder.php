<?php

namespace Database\Seeders;
use App\Models\products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeautyProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        products::create([
            'product_name' => 'Rimel',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Mascara_de_pesta%C3%B1as.jpg/1200px-Mascara_de_pesta%C3%B1as.jpg',
            'price' => 25.99,
            'category_id' => 3, // ID de la categoría "Belleza"
        ]);

        // Producto 2
        products::create([
            'product_name' => 'Crema Facial',
            'image_url' => 'https://belcorpchile.vtexassets.com/arquivos/ids/353975-800-800?v=638242504620930000&width=800&height=800&aspect=true',
            'price' => 12.50,
            'category_id' => 3, // ID de la categoría "Belleza"
        ]);

        // Producto 3
        products::create([
            'product_name' => 'Esmalte de Uñas Duradero',
            'image_url' => 'https://belcorpchile.vtexassets.com/arquivos/ids/376005/200094826-FotoFondoBlanco.jpg?v=638330988147600000',
            'price' => 8.99,
            'category_id' => 3, // ID de la categoría "Belleza"
        ]);

        // Producto 4
        products::create([
            'product_name' => 'Champú Nutritivo para Cabello',
            'image_url' => 'https://cosmetis.com/media/catalog/product/cache/26d4a05fa16341dea4470cb3b852123c/e/l/elviveoleoextraordinariochampo400ml_1.jpg',
            'price' => 14.75,
            'category_id' => 3, // ID de la categoría "Belleza"
        ]);

        // Producto 5
        products::create([
            'product_name' => 'Paleta de Sombras de Ojos',
            'image_url' => 'https://cdnx.jumpseller.com/eldolarbeautystore-cl/image/25704374/PALETTT.webp?1657747573',
            'price' => 19.99,
            'category_id' => 3, // ID de la categoría "Belleza"
        ]);
    }
}
