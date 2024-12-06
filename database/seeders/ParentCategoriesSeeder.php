<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ParentCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Dairy Products', 'descriptions' => 'Products made from milk.'],
            ['name' => 'Meat and Poultry', 'descriptions' => 'Various types of meat and poultry.'],
            ['name' => 'Seafood', 'descriptions' => 'Fresh and frozen seafood products.'],
            ['name' => 'Bakery', 'descriptions' => 'Freshly baked breads and pastries.'],
            ['name' => 'Beverages', 'descriptions' => 'Drinks including soda, water, and juice.'],
            ['name' => 'Snacks', 'descriptions' => 'Chips, crackers, and other snack items.'],
            ['name' => 'Frozen Foods', 'descriptions' => 'Pre-packaged frozen meals and products.'],
            ['name' => 'Pantry Essentials', 'descriptions' => 'Staple items like rice, pasta, and flour.'],
            ['name' => 'Health and Wellness', 'descriptions' => 'Products for health and personal care.'],
            ['name' => 'Household Supplies', 'descriptions' => 'Cleaning products and household items.'],
        ];

        foreach ($categories as $category) {
            DB::table('parent_categories')->insert([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'descriptions' => $category['descriptions'],
                'image' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
