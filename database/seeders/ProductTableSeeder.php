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
            'name'=> 'Laptop 11 u',
            'slug' => 'Laptop 11 u',
            'details' => '15.0 inch, 1TB SSD, 16GB RAM',
            'price' => 1600,
            'description' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ',

        ]);
        Product::create([
            'name'=> 'Laptop 12 u',
            'slug' => 'Laptop 12 u',
            'details' => '15.0 inch, 2TB SSD, 16GB RAM',
            'price' => 1800,
            'description' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ',

        ]);
        Product::create([
            'name'=> 'Laptop 13 u',
            'slug' => 'Laptop 13 u',
            'details' => '15.1 inch, 3TB SSD, 14GB RAM',
            'price' => 1900,
            'description' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ',

        ]);
        Product::create([
            'name'=> 'Laptop 15 u',
            'slug' => 'Laptop 15 u',
            'details' => '15.6 inch, 1TB SSD, 16GB RAM',
            'price' => 1200,
            'description' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ',

        ]);
        Product::create([
            'name'=> 'Laptop 16 u',
            'slug' => 'Laptop 16 u',
            'details' => '14.6 inch, 1TB SSD, 16GB RAM',
            'price' => 1500,
            'description' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ',

        ]);
        Product::create([
            'name'=> 'Laptop 17 u',
            'slug' => 'Laptop 17 u',
            'details' => '15.0 inch, 2TB SSD, 16GB RAM',
            'price' => 1500,
            'description' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ',

        ]);

    }
}
