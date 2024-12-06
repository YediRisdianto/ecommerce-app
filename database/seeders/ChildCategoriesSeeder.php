<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChildCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $parentCategories = DB::table('parent_categories')->get();

        $childCategories = [
            'Dairy Products' => ['Milk', 'Cheese', 'Yogurt'],
            'Meat and Poultry' => ['Chicken', 'Beef', 'Pork'],
            'Seafood' => ['Shrimp', 'Fish', 'Crab'],
            'Bakery' => ['Bread', 'Croissants', 'Cakes'],
            'Beverages' => ['Soda', 'Juice', 'Coffee'],
            'Snacks' => ['Chips', 'Cookies', 'Candy'],
            'Frozen Foods' => ['Frozen Pizza', 'Ice Cream', 'Vegetables'],
            'Pantry Essentials' => ['Rice', 'Pasta', 'Oil'],
            'Health and Wellness' => ['Vitamins', 'Supplements', 'Personal Care'],
            'Household Supplies' => ['Cleaning Products', 'Paper Towels', 'Laundry Detergent'],
        ];

        foreach ($parentCategories as $parent) {
            if (isset($childCategories[$parent->name])) {
                foreach ($childCategories[$parent->name] as $childName) {
                    DB::table('child_categories')->insert([
                        'category_parent_id' => $parent->id,
                        'name' => $childName,
                        'slug' => Str::slug($childName),
                        'descriptions' => "This is a subcategory of {$parent->name}.",
                        'image' => null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
