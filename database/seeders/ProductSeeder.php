<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "product_name" => "Speaker External",
                "category" => "electronic",
                "price" => 200000
            ],
            [
                "product_name" => "Blender",
                "category" => "kitchen",
                "price" => 1200000,
                "discount" => 2.5
            ],
            [
                "product_name" => "Cleaner Robot",
                "category" => "electronic",
                "price" => 2000000,
                "discount" => 3.2
            ]
        ];

        foreach($data as $value){
            Product::create($value);
        }
    }
}
