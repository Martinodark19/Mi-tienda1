<?php

namespace Database\Seeders;
use App\Models\products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologyProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Producto 1
        Products::create([
            'product_name' => 'iphone 11',
            'image_url' => 'https://falabella.scene7.com/is/image/Falabella/14673304_1?wid=800&hei=800&qlt=70',
            'price' => 599.99,
            'category_id' => 2, // ID de la categoría "Tecnología"
        ]);

        // Producto 2
        Products::create([
            'product_name' => 'Portátil ultradelgado',
            'image_url' => 'https://http2.mlstatic.com/D_NQ_NP_714716-CBT51430694063_092022-O.webp',
            'price' => 899.99,
            'category_id' => 2, // ID de la categoría "Tecnología"
        ]);

        // Producto 3
        Products::create([
            'product_name' => 'Auriculares inalámbricos de alta calidad',
            'image_url' => 'https://falabella.scene7.com/is/image/Falabella/gsc_122875504_3460042_1?wid=800&hei=800&qlt=70',
            'price' => 79.99,
            'category_id' => 2, // ID de la categoría "Tecnología"
        ]);

        // Producto 4
        Products::create([
            'product_name' => 'Tablet HD',
            'image_url' => 'https://www.lenovo.com/medias/lenovo-tab-m8-hd-hero.png?context=bWFzdGVyfHJvb3R8MTQwODIzfGltYWdlL3BuZ3xoNmIvaDFkLzExMjYwNjY4NDExOTM0LnBuZ3w0NmUyMzg2ODM4ZmNjNjFmNjk2NmIzMWNmNjhmYTE4YTMwMGZjMGE3OTk1ZTFlZTM3NTEwMGRkMjAyZmJjMTY4',
            'price' => 199.99,
            'category_id' => 2, // ID de la categoría "Tecnología"
        ]);

        // Producto 5
        Products::create([
            'product_name' => 'Cámara resistente al agua',
            'image_url' => 'https://www.educaciontrespuntocero.com/wp-content/uploads/2020/07/61O11-t2L._AC_SL1001_-1.jpg',
            'price' => 149.99,
            'category_id' => 2, // ID de la categoría "Tecnología"
        ]);
    }
}
