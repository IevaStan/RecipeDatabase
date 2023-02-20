<?php

namespace Database\Seeders;

use App\Models\IngredientRecipe;
use Illuminate\Database\Seeder;

class IngredientRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredient_recipe = [
            [
                'recipe_id' => 1,
                'ingredient_id' => 1,
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 5,
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 23,
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 25,
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 2,
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 4,
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 26,
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 27,
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 29,
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 28,
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 6,
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 3,
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 9,
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 7,
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 29,
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 30,
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 31,
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 4,
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 32,
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 33,
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 43,
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 4,
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 6,
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 8,
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 5,
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 7,
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 10,
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 11,
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 12,
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 13,
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 14,
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 15,
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 16,
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 17,
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 18,
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 19,
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 20,
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 22,
            ],
        ];

        foreach ($ingredient_recipe as $item) {
            IngredientRecipe::create([
                'recipe_id' => $item['recipe_id'],
                'ingredient_id' => $item['ingredient_id'],
            ]);
        }
    }
}
