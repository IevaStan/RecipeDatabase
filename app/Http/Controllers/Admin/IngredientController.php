<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ingredient;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class IngredientController extends Controller
{
    public function index(): View
    {
        $ingredients = Ingredient::query()->paginate(10);
        return view('admin/ingredients/index', [
            'ingredients' => $ingredients
        ]);
    }


    public function show(Ingredient $ingredient): View
    {
        return view('admin/ingredients/show', compact('ingredient'));
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'name' => 'required|max:20',
            ]
        );

        Ingredient::create($request->all());
        return redirect('admin/ingredients')
            ->with('success', 'Ingredient successfully added!');
    }


    public function create(): View
    {
        return view('admin/ingredients/create');
    }


    public function delete(int $id)
    {
        $ingredient = Ingredient::find($id);
        if ($ingredient === null) {
            abort(404);
        }
        $ingredient->delete();
        return redirect('admin/ingredients')->with('success', 'Ingredient removed successfully!');
    }


    public function edit(int $id, Request $request)
    {
        $ingredient = Ingredient::find($id);
        if ($ingredient === null) {
            abort(404);
        }

        if ($request->isMethod('post')) {
            $request->validate(
                [
                    'name' => 'required|max:20',
                ]
            );
            
            $ingredient->fill($request->all());
            $ingredient->is_active = $request->post('is_active', false);
            $ingredient->save();

            return redirect('admin/ingredients')->with('success', 'Ingredient updated successfully!');
        }

        return view('admin/ingredients/edit', [
            'ingredient' => $ingredient
        ]);
    }
}
