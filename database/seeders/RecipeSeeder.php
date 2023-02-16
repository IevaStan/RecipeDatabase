<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Recipe::create([
                'name' => fake()->name,
                'category' => fake()->name,
                'description' => fake()->name,
                'is_active' => fake()->boolean,
            ]);
        }

    }
}
