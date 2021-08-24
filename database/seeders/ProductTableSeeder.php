<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=> 'Laptop 1 u',
            'slug' => 'Laptop 1 u',
            'details' => '15.6 inch, 1TB SSD, 16GB RAM',
            'price' => 1500,
            'description' => 'Aliquam metus dui. orci, ornareidquet ut,DUI. nisi, dignissim gravida at',

        ]);
        Product::create([
            'name'=> 'Laptop 2 u',
            'slug' => 'Laptop 2 u',
            'details' => '15.6 inch, 1TB SSD, 16GB RAM',
            'price' => 1500,
            'description' => 'Aliquam metus dui. orci, ornareidquet ut,DUI. nisi, dignissim gravida at',

        ]);
        Product::create([
            'name'=> 'Laptop 3 u',
            'slug' => 'Laptop 3 u',
            'details' => '15.6 inch, 1TB SSD, 16GB RAM',
            'price' => 1500,
            'description' => 'Aliquam metus dui. orci, ornareidquet ut,DUI. nisi, dignissim gravida at',

        ]);
        Product::create([
            'name'=> 'Laptop 5 u',
            'slug' => 'Laptop 5 u',
            'details' => '15.6 inch, 1TB SSD, 16GB RAM',
            'price' => 1500,
            'description' => 'Aliquam metus dui. orci, ornareidquet ut,DUI. nisi, dignissim gravida at',

        ]);
        Product::create([
            'name'=> 'Laptop 6 u',
            'slug' => 'Laptop 6 u',
            'details' => '15.6 inch, 1TB SSD, 16GB RAM',
            'price' => 1500,
            'description' => 'Aliquam metus dui. orci, ornareidquet ut,DUI. nisi, dignissim gravida at',

        ]);
        Product::create([
            'name'=> 'Laptop 7 u',
            'slug' => 'Laptop 7 u',
            'details' => '15.6 inch, 1TB SSD, 16GB RAM',
            'price' => 1500,
            'description' => 'Aliquam metus dui. orci, ornareidquet ut,DUI. nisi, dignissim gravida at',

        ]);

    }
}
