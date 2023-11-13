<?php

namespace Database\Seeders;
use App\Models\products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FragranceProductsSeeder extends Seeder
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
            'product_name' => 'Perfume floral de lujo',
            'image_url' => 'https://previews.123rf.com/images/anneleven/anneleven2303/anneleven230300990/199797936-perfume-de-lujo-con-aroma-floral-para-mujer-botella-de-fragancia-de-vidrio-en-el-jard%C3%ADn-de-flores.jpg',
            'price' => 79.99,
            'category_id' => 4, // ID de la categoría "Fragancias"
        ]);

        // Producto 2
        Products::create([
            'product_name' => 'Colonía refrescante para hombres',
            'image_url' => 'https://ae01.alicdn.com/kf/S5d2e21acff0e4984bc53861adccf562ap.jpg_640x640Q90.jpg_.webp',
            'price' => 59.99,
            'category_id' => 4, // ID de la categoría "Fragancias"
        ]);

        // Producto 3
        Products::create([
            'product_name' => 'Colonia polo red',
            'image_url' => 'https://www.paris.cl/dw/image/v2/BCHW_PRD/on/demandware.static/-/Sites-cencosud-master-catalog/default/dw0a01790b/images/imagenes-productos/625/761203-0000-002.jpg',
            'price' => 94.99,
            'category_id' => 4, // ID de la categoría "Fragancias"
        ]);

        // Producto 4
        Products::create([
            'product_name' => 'Perfume de invierno con notas de vainilla',
            'image_url' => 'https://rdlasamericas.cl/img/cms/boss_bottled_200ml_-_2_1024x1024.png',
            'price' => 89.99,
            'category_id' => 4, // ID de la categoría "Fragancias"
        ]);

        // Producto 5
        Products::create([
            'product_name' => 'Colonia polo blue',
            'image_url' => 'https://cdnx.jumpseller.com/essencial/image/10109294/polo-blue-ralph-lauren_toilette.jpg?1623046584',
            'price' => 39.99,
            'category_id' => 4, // ID de la categoría "Fragancias"
        ]);
    }
}
