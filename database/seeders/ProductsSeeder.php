<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        // Ambil semua child categories dari tabel
        $childCategories = DB::table('child_categories')->get();

        $products = [
            'Milk' => [
                ['name' => 'Fresh Milk', 'regular_price' => 20000, 'weight' => 1000],
                ['name' => 'Almond Milk', 'regular_price' => 35000, 'weight' => 1000],
            ],
            'Cheese' => [
                ['name' => 'Cheddar Cheese', 'regular_price' => 50000, 'weight' => 500],
                ['name' => 'Mozzarella Cheese', 'regular_price' => 75000, 'weight' => 500],
            ],
            'Chicken' => [
                ['name' => 'Fresh Chicken', 'regular_price' => 30000, 'weight' => 1200],
                ['name' => 'Chicken Breast', 'regular_price' => 45000, 'weight' => 500],
            ],
            'Fish' => [
                ['name' => 'Salmon Fillet', 'regular_price' => 100000, 'weight' => 500],
                ['name' => 'Tuna Steak', 'regular_price' => 80000, 'weight' => 500],
            ],
            'Bread' => [
                ['name' => 'Whole Wheat Bread', 'regular_price' => 25000, 'weight' => 400],
                ['name' => 'French Baguette', 'regular_price' => 15000, 'weight' => 300],
            ],
            'Rice' => [
                ['name' => 'Basmati Rice', 'regular_price' => 60000, 'weight' => 1000],
                ['name' => 'Jasmine Rice', 'regular_price' => 50000, 'weight' => 1000],
            ],
        ];

        foreach ($childCategories as $child) {
            if (isset($products[$child->name])) {
                foreach ($products[$child->name] as $product) {
                    DB::table('products')->insert([
                        'category_child_id' => $child->id,
                        'name' => $product['name'],
                        'description' => "Description of {$product['name']}.",
                        'regular_price' => $product['regular_price'],
                        'sale_price' => $product['regular_price'] - 5000, // contoh diskon
                        'weight' => $product['weight'],
                        'image' => null,
                        'status' => 'Active',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
