<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Category::insert([
            [
                'name' => 'Camisetas',
                'description' => 'Camisetas de edición limitada',
            ],
            [
                'name' => 'Gorras',
                'description' => 'Gorras de edición limitada',
            ],
        ]);
        
        Product::insert([
            [
                'name' => 'Camiseta Overskull',
                'description' => 'Camiseta negra edición limitada',
                'price' => 89.90,
                'stock' => 50,
                'category_id' => 1,
            ],
            [
                'name' => 'Gorra Overskull',
                'description' => 'Gorra negra edición limitada',
                'price' => 19.99,
                'stock' => 50,
                'category_id' => 2,
            ],
        ]);
    }
}
