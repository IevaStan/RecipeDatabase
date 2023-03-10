<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i = 0; $i < 50; $i++) {
        //     Ingredient::create([
        //         'name' => fake()->name,
        //         'is_active' => fake()->boolean,
        //     ]);
        // }
        $ingredient = [
            ['name' => 'Egg', 'is_active' => 1,],
            ['name' => 'Bread', 'is_active' => 0,],
            ['name' => 'White bread', 'is_active' => 1,],
            ['name' => 'Beer', 'is_active' => 0,],
            ['name' => 'Brandy', 'is_active' => 0,],
            ['name' => 'Gin', 'is_active' => 0,],
            ['name' => 'Rum', 'is_active' => 0,],
            ['name' => 'Wine', 'is_active' => 0,],
            ['name' => 'Champagne', 'is_active' => 0,],
            ['name' => 'Red wine', 'is_active' => 1,],
            ['name' => 'Sherry', 'is_active' => 0,],
            ['name' => 'Sparkling wine', 'is_active' => 1,],
            ['name' => 'White wine', 'is_active' => 1,],
            ['name' => 'Coffee', 'is_active' => 0,],
            ['name' => 'Oats', 'is_active' => 0,],
            ['name' => 'Rice', 'is_active' => 1,],
            ['name' => 'Corn', 'is_active' => 1,],
            ['name' => 'Butter', 'is_active' => 1,],
            ['name' => 'Cottage cheese', 'is_active' => 0,],
            ['name' => 'Feta cheese', 'is_active' => 1,],
            ['name' => 'Goat cheese', 'is_active' => 0,],
            ['name' => 'Gruyere cheese', 'is_active' => 0,],
            ['name' => 'Mozzarella cheese', 'is_active' => 1,],
            ['name' => 'Parmesan cheese', 'is_active' => 1,],
            ['name' => 'Romano cheese', 'is_active' => 1,],
            ['name' => 'Swiss cheese', 'is_active' => 1,],
            ['name' => 'Milk', 'is_active' => 1,],
            ['name' => 'Yogurt', 'is_active' => 0,],
            ['name' => 'Clam', 'is_active' => 0,],
            ['name' => 'Mollusc', 'is_active' => 0,],
            ['name' => 'Oyster', 'is_active' => 1,],
            ['name' => 'Prawn', 'is_active' => 1,],
            ['name' => 'Shrimp', 'is_active' => 1,],
            ['name' => 'Codfish', 'is_active' => 1,],
            ['name' => 'Fish', 'is_active' => 1,],
            ['name' => 'Apple', 'is_active' => 1,],
            ['name' => 'Grape', 'is_active' => 1,],
            ['name' => 'Mango', 'is_active' => 0,],
            ['name' => 'Orange', 'is_active' => 1,],
            ['name' => 'Papaya', 'is_active' => 0,],
            ['name' => 'Peach', 'is_active' => 0,],
            ['name' => 'Pear', 'is_active' => 1,],
            ['name' => 'Roseapple', 'is_active' => 1,],
            ['name' => 'Blueberry', 'is_active' => 1,],
            ['name' => 'Cranberry', 'is_active' => 0,],
            ['name' => 'Raspberry', 'is_active' => 0,],
            ['name' => 'Lemon', 'is_active' => 1,],
            ['name' => 'Lime', 'is_active' => 1,],
            ['name' => 'Vanilla', 'is_active' => 1,],
            ['name' => 'Mushroom', 'is_active' => 1,],
            ['name' => 'Basil', 'is_active' => 1,],
            ['name' => 'Coriander', 'is_active' => 0,],
            ['name' => 'Dill', 'is_active' => 0,],
            ['name' => 'Fennel', 'is_active' => 1,],
            ['name' => 'Garlic', 'is_active' => 1,],
            ['name' => 'Mint', 'is_active' => 1,],
            ['name' => 'Rosemary', 'is_active' => 1,],
            ['name' => 'Sage', 'is_active' => 0,],
            ['name' => 'Tarragon', 'is_active' => 1,],
            ['name' => 'Thyme', 'is_active' => 0,],
            ['name' => 'Beef', 'is_active' => 1,],
            ['name' => 'Chicken', 'is_active' => 1,],
            ['name' => 'Ham', 'is_active' => 1,],
            ['name' => 'Pork', 'is_active' => 1,],
            ['name' => 'Turkey', 'is_active' => 1,],
            ['name' => 'Almond', 'is_active' => 0,],
            ['name' => 'Beans', 'is_active' => 1,],
            ['name' => 'Peanut', 'is_active' => 1,],
            ['name' => 'Peas', 'is_active' => 0,],
            ['name' => 'Soybean sauce', 'is_active' => 1,],
            ['name' => 'Walnut', 'is_active' => 1,],
            ['name' => 'Sesame', 'is_active' => 1,],
            ['name' => 'Laurel', 'is_active' => 0,],
            ['name' => 'Olive', 'is_active' => 1,],
            ['name' => 'Pine', 'is_active' => 0,],
            ['name' => 'Honey', 'is_active' => 1,],
            ['name' => 'Macaroni', 'is_active' => 0,],
            ['name' => 'Peanut oil', 'is_active' => 1,],
            ['name' => 'Vinegar', 'is_active' => 0,],
            ['name' => 'Celery', 'is_active' => 1,],
            ['name' => 'Cinnamon', 'is_active' => 1,],
            ['name' => 'Clove', 'is_active' => 1,],
            ['name' => 'Cumin', 'is_active' => 0,],
            ['name' => 'Ginger', 'is_active' => 1,],
            ['name' => 'Nutmeg', 'is_active' => 0,],
            ['name' => 'Oregano', 'is_active' => 1,],
            ['name' => 'Parsley', 'is_active' => 1,],
            ['name' => 'Pepper', 'is_active' => 1,],
            ['name' => 'Saffron', 'is_active' => 0,],
            ['name' => 'Green beans', 'is_active' => 1,],
            ['name' => 'Chive', 'is_active' => 1,],
            ['name' => 'Leek', 'is_active' => 1,],
            ['name' => 'Lettuce', 'is_active' => 0,],
            ['name' => 'Okra', 'is_active' => 1,],
            ['name' => 'Onion', 'is_active' => 1,],
            ['name' => 'Shallot', 'is_active' => 1,],
            ['name' => 'Cabbage', 'is_active' => 1,],
            ['name' => 'Cauliflower', 'is_active' => 1,],
            ['name' => 'Mustard', 'is_active' => 0,],
            ['name' => 'Kohlrabi', 'is_active' => 1,],
            ['name' => 'Capsicum', 'is_active' => 1,],
            ['name' => 'Tomato', 'is_active' => 1,],
            ['name' => 'Cucumber', 'is_active' => 0,],
            ['name' => 'Carrot', 'is_active' => 1,],
            ['name' => 'Parsnip', 'is_active' => 0,],
            ['name' => 'Potato', 'is_active' => 1,],
            ['name' => 'Canola oil', 'is_active' => 1,],
            ['name' => 'Apple cider vinegar', 'is_active' => 1,],
            ['name' => 'Jalapeno', 'is_active' => 0,],
            ['name' => 'Spinach', 'is_active' => 0,],
            ['name' => 'Water chestnut', 'is_active' => 1,],
            ['name' => 'White pepper', 'is_active' => 1,],
            ['name' => 'Basmati rice', 'is_active' => 1,],
            ['name' => 'Ricotta cheese', 'is_active' => 0,],
            ['name' => 'Redskin onion', 'is_active' => 0,],
            ['name' => 'Cashew nut', 'is_active' => 1,],
            ['name' => 'Capers', 'is_active' => 1,],
            ['name' => 'Chickpea', 'is_active' => 0,],
            ['name' => 'Millet', 'is_active' => 1,],
            ['name' => 'Cherry tomato', 'is_active' => 1,],
            ['name' => 'Wheat', 'is_active' => 1,],
            ['name' => 'Welsh onion', 'is_active' => 0,],
            ['name' => 'Hard wheat', 'is_active' => 1,],
            ['name' => 'Pasta', 'is_active' => 0,],
            ['name' => 'Arrowroot', 'is_active' => 0,],
            ['name' => 'Wild duck', 'is_active' => 0,],
            ['name' => 'Wild rice', 'is_active' => 1,],
            ['name' => 'Black-eyed pea', 'is_active' => 1,],
            ['name' => 'Vodka', 'is_active' => 1,],
            ['name' => 'Ice cream', 'is_active' => 0,],
            ['name' => 'Vermouth', 'is_active' => 0,],
            ['name' => 'Pizza', 'is_active' => 1,],
            ['name' => 'Pastry', 'is_active' => 0,],
            ['name' => 'Marzipan', 'is_active' => 1,],
            ['name' => 'Salad dressing', 'is_active' => 0,],
            ['name' => 'Salt', 'is_active' => 1,],
            ['name' => 'Cream', 'is_active' => 1,],
            ['name' => 'Sugar', 'is_active' => 1,],
            ['name' => 'Sausage', 'is_active' => 0,],
            ['name' => 'Meat bouillon', 'is_active' => 1,],
            ['name' => 'Water', 'is_active' => 1,],
            ['name' => 'Cocoa powder', 'is_active' => 1,],
            ['name' => 'Chocolate', 'is_active' => 0,],
            ['name' => 'Lasagna', 'is_active' => 1,],
            ['name' => 'Tapioca pearl', 'is_active' => 1,],
            ['name' => 'Relish', 'is_active' => 1,],
            ['name' => 'Margarine', 'is_active' => 1,],
            ['name' => 'Hummus', 'is_active' => 1,],
            ['name' => 'Zucchini', 'is_active' => 1,],
            ['name' => 'Lemon juice', 'is_active' => 1,],
            ['name' => 'Cayenne', 'is_active' => 0,],
            ['name' => 'Yeast', 'is_active' => 1,],
            ['name' => 'Baking powder', 'is_active' => 1,],
            ['name' => 'Food coloring', 'is_active' => 0,],
            ['name' => 'Garam masala', 'is_active' => 0,],
            ['name' => 'Curry powder', 'is_active' => 1,],
            ['name' => 'Vermicelli', 'is_active' => 0,],
            ['name' => 'Self rising flour', 'is_active' => 1,],
            ['name' => 'Mayonnaise', 'is_active' => 1,],
            ['name' => 'Salt-pepper', 'is_active' => 1,],
            ['name' => 'Mixed vegetables', 'is_active' => 1,],
            ['name' => 'Worcestershite sauce', 'is_active' => 0,],
            ['name' => 'Vegetable stock', 'is_active' => 1,],
            ['name' => 'Mascarpone', 'is_active' => 0,],
            ['name' => 'Ketchup', 'is_active' => 1,],
            ['name' => 'Pancetta', 'is_active' => 0,],
            ['name' => 'Phyllo', 'is_active' => 0,],
            ['name' => 'Flour', 'is_active' => 1,],
            ['name' => 'Ranch dressing', 'is_active' => 1,],
            ['name' => 'Poultry seasoning', 'is_active' => 0,],
            ['name' => 'Tomato paste', 'is_active' => 1,],
            ['name' => 'Tuna', 'is_active' => 1,],
            ['name' => 'Anchovy', 'is_active' => 0,],
            ['name' => 'Crab', 'is_active' => 1,],
            ['name' => 'Cooking oil', 'is_active' => 1,],
        ];

        foreach ($ingredient as $item) {
            Ingredient::create([
                'name' => $item['name'],
                'is_active' => $item['is_active'],
            ]);
        }
    }
}
