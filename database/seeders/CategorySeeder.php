<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i = 0; $i < 11; $i++) {
        //     Category::create([
        //         'name' => fake()->name,
        //         'is_active' => fake()->boolean,
        //     ]);
        // }

        $category = [
            ['name' => 'African cuisine', 'is_active' => 0,],
            ['name' => 'American cuisine', 'is_active' => 1,],
            ['name' => 'Australian cuisine', 'is_active' => 0,],
            ['name' => 'British cuisine', 'is_active' => 1,],
            ['name' => 'Canadian cuisine', 'is_active' => 0,],
            ['name' => 'Caribbean cuisine', 'is_active' => 1,],
            ['name' => 'Chinese cuisine', 'is_active' => 0,],
            ['name' => 'Dach cuisine', 'is_active' => 1,],
            ['name' => 'French cuisine', 'is_active' => 1,],
            ['name' => 'Greek cuisine', 'is_active' => 1,],
            ['name' => 'Indian cuisine', 'is_active' => 0,],
            ['name' => 'Italian cuisine', 'is_active' => 1,],
            ['name' => 'Middle East cuisine', 'is_active' => 1,],
            ['name' => 'South American cuisine', 'is_active' => 0,],
            ['name' => 'Spanish cuisine', 'is_active' => 1,],
            ['name' => 'Thailand cuisine', 'is_active' => 1,],
        ];

        foreach ($category as $item) {
            Category::create([
                'name' => $item['name'],
                'is_active' => $item['is_active'],
            ]);
        }
    }
}
