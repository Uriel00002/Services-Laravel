<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Traje baronil de danza contemporanea',
            'slug' => '.',
            'details' => 'Traje completo',
            'price' => 2000.99,
            'shipping_cost' => 80.00,
            'description' => 'Vestuario',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'macbook-pro.png'
        ]);

        Product::create([
            'name' => 'Traje femenil de danza contemporanea',
            'slug' => '.',
            'details' => 'Traje completo',
            'price' => 2000.99,
            'shipping_cost' => 80.00,
            'description' => 'Vestuario',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'dell-v3557.png'
        ]);

        Product::create([
            'name' => 'Traje baronil de danza clasica',
            'slug' => '.',
            'details' => 'Traje completo',
            'price' => 2000.99,
            'shipping_cost' => 80.00,
            'description' => 'Vestuario',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'iphone-11-pro.png'
        ]);

        Product::create([
            'name' => 'Traje femenil de danza clasica',
            'slug' => '.',
            'details' => 'Traje completo',
            'price' => 2000.99,
            'shipping_cost' => 80.00,
            'description' => 'Vestuario',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'remax-610d.jpg'
        ]);

        Product::create([
            'name' => 'Traje baronil de danza folclorica',
            'slug' => '.',
            'details' => 'Traje completo',
            'price' => 2000.99,
            'shipping_cost' => 80.00,
            'description' => 'Vestuario',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'samsung-led-24.png'
        ]);

        Product::create([
            'name' => 'Traje femenil de danza folclorica',
            'slug' => '.',
            'details' => 'Traje completo',
            'price' => 2000.99,
            'shipping_cost' => 80.00,
            'description' => 'Vestuario',
            'category_id' => 5,
            'brand_id' => 4,
            'image_path' => 'samsung-mv800.jpg'
        ]);

        Product::create([
            'name' => 'CD best song ',
            'slug' => '.',
            'details' => 'Traje completo',
            'price' => 180.99,
            'shipping_cost' => 80.00,
            'description' => 'Vestuario',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'gr5-2017.jpg'
        ]);

       
    }
}
