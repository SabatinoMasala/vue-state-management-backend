<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Original products
            ['title' => 'Pizza', 'price' => 8.95, 'description' => 'A tasty pizza with tomato sauce, mozzarella cheese, and fresh basil.'],
            ['title' => 'Pasta', 'price' => 14.95, 'description' => 'A traditional pasta with tomato sauce, mozzarella cheese, and fresh basil.'],
            ['title' => 'Burger', 'price' => 12.95, 'description' => 'A delicious burger with cheddar cheese, lettuce, tomato, and pickles.'],
            ['title' => 'French fries', 'price' => 4.95, 'description' => 'Golden brown fries with ketchup.'],
            ['title' => 'Caesar Salad', 'price' => 9.95, 'description' => 'A classic Caesar salad with romaine lettuce, croutons, and parmesan cheese.'],
            ['title' => 'Sandwich', 'price' => 12.95, 'description' => 'A fresh sandwich with turkey, lettuce, tomato, and mayo.'],
            // Drinks
            ['title' => 'Water', 'price' => 1.95, 'use_for_upselling' => true, 'description' => 'Ideal for quenching your thirst.'],
            ['title' => 'Soda', 'price' => 2.95, 'use_for_upselling' => true, 'description' => 'A classic soda.'],
            ['title' => 'Beer', 'price' => 3.95, 'use_for_upselling' => true, 'description' => 'A refreshing drink.'],
        ];
        collect($data)->each(fn($product) => Product::create($product));
    }
}
