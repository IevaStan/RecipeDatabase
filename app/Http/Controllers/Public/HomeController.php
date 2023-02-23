<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Database\Query\Builder as QueryBuilder;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{

    public function main(Request $request): View
    {
        $recipes = Recipe::query()->latest()->limit(10)->get();
        $categories = Category::where('is_active', '=', 1)->get();
        $ingredients = Ingredient::where('is_active', '=', 1)->get();
        return view('public/main', [
            'recipes' => $recipes,
            'categories' => $categories,
            'ingredients' => $ingredients,
            'category_id' => $request->query('category_id'),
            'name' => $request->query('name'),
        ]);
    }


    public function index(Request $request): View
    {
        $recipes = Recipe::where('is_active', '=', 1)->withWhereHas('category', function (Builder $query) {
            $query->where('is_active', true);
        });
        if ($request->query('name')) {
            $recipes->where('name', 'like', '%' . $request->query('name') . '%');
        }
        if ($request->query('category_id')) {
            $recipes->where('category_id', '=', $request->query('category_id'));
        }
        $categories = Category::where('is_active', '=', 1)->get();

        return view('public/recipes/index', [
            'recipes' => $recipes->paginate(20),
            'categories' => $categories,
            'category_id' => $request->query('category_id'),
            'name' => $request->query('name'),
        ]);
    }


    public function show($id): View
    {
        $recipe = Recipe::find($id);
        if ($recipe === null) {
            abort(404);
        }
        return view('public/recipes/show', ['recipe' => $recipe]);
    }
}
