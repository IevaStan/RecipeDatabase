<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;


class RecipeController extends Controller
{
    public function index(Request $request): View
    {
        $recipes = Recipe::query();
        if ($request->query('category_id')) {
            $recipes->where('category_id', '=', $request->query('category_id'));
        }
        if ($request->query('name')) {
            $recipes->where('name', 'like', '%' . $request->query('name') . '%');
        }

        $categories = Category::where('is_active', '=', 1)->get();
        return view('admin/recipes/index', [
            'recipes' => $recipes->paginate(10),
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
        return view('admin/recipes/show', ['recipe' => $recipe]);
    }


    public function create(): View
    {
        $ingredients = Ingredient::all();
        $categories = Category::where('is_active', '=', 1)->get();

        return view('admin/recipes/create', [
            'ingredients' => $ingredients,
            'categories' => $categories
        ]);
    }


    public function edit(int $id, Request $request)
    {
        $recipe = Recipe::find($id);
        $ingredients = Ingredient::all();
        $categories = Category::where('is_active', '=', 1)->get();

        if ($recipe === null) {
            abort(404);
        }

        if ($request->isMethod('post')) {
            $request->validate(
                [
                    'name' => 'required|max:255',
                    'category_id' => 'required',
                    'ingredient_id' => 'required',
                    'image' => [File::types([
                        'jpg', 'jpeg', 'jfif', 'webp', 'avif',  'svg',
                        'gif',  'png',  'tif',  'tiff',  'bmp'
                    ])->max(10 * 1024)],
                ]
            );

            $recipe->update($request->all());
            $recipe->ingredients()->detach();

            $file = $request->file('image');
            $path = $file->store('recipe_images');
            Storage::disk('public')->put('katalogas', $file);
            $recipe->image = $path;
            $recipe->save();

            $ingredients = Ingredient::find($request->post('ingredient_id'));
            $recipe->ingredients()->attach($ingredients);

            return redirect('recipes')->with('success', 'Recipe updated successfully!');
        }

        return view('admin/recipes/edit', [
            'recipe' => $recipe,
            'ingredients' => $ingredients,
            'categories' => $categories
        ]);
    }


    public function store(Request $request): RedirectResponse|View
    {
        $request->validate(
            [
                'name' => 'required|max:255',
                'category_id' => 'required',
                'ingredient_id' => 'required',
                'image' => [File::types([
                    'jpg', 'jpeg', 'jfif', 'webp', 'avif',  'svg',
                    'gif',  'png',  'tif',  'tiff',  'bmp'
                ])->max(10 * 1024)],
            ]
        );

        $recipe = Recipe::create($request->all());

        $file = $request->file('image');
        $path = $file->store('recipe_images');
        Storage::disk('public')->put('katalogas', $file);
        $recipe->image = $path;
        $recipe->save();


        $ingredients = Ingredient::find($request->post('ingredient_id'));
        $recipe->ingredients()->attach($ingredients);
        $recipe->category()->attach($request->post('category_id'));


        return redirect('recipes')
            ->with('success', 'New recipe successfully added!');
    }


    public function delete(int $id)
    {
        $recipe = Recipe::find($id);
        if ($recipe === null) {
            abort(404);
        }
        $recipe->delete();
        return redirect('recipes')->with('success', 'Recipe removed successfully!');
    }
}
