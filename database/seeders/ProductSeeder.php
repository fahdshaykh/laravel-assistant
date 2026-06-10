<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Wireless Mouse',
                'category' => 'Electronics',
                'price' => 29.99,
                'stock' => 150,
                'description' => 'A high-precision wireless mouse with ergonomic design.',
            ],
            [
                'name' => 'Bluetooth Headphones',
                'category' => 'Electronics',
                'price' => 59.99,
                'stock' => 80,
                'description' => 'Noise-cancelling over-ear headphones with long battery life.',
            ],
            [
                'name' => 'Coffee Maker',
                'category' => 'Home Appliances',
                'price' => 89.99,
                'stock' => 40,
                'description' => 'Programmable coffee maker with a built-in grinder.',
            ],
        ];

        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}
