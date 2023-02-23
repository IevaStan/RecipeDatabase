<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IngredientController;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Public\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'main']);
Route::get('public/recipes', [HomeController::class, 'index']);
Route::get('public/recipes/{id}', [HomeController::class, 'show'])->whereNumber('id');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'role'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('recipes', [RecipeController::class, 'index']);
    Route::get('recipes/{id}', [RecipeController::class, 'show'])->whereNumber('id');
    Route::get('recipes/create', [RecipeController::class, 'create']);
    Route::any('recipes/edit/{id}', [RecipeController::class, 'edit'])->name('recipe.edit');
    Route::post('recipes/store', [RecipeController::class, 'store']);
    Route::delete('recipes/delete/{id}', [RecipeController::class, 'delete'])->name('recipe.delete');

    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('categories/create', [CategoryController::class, 'create']);
    Route::post('categories/create', [CategoryController::class, 'store']);
    Route::any('categories/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::delete('categories/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    Route::get('categories/{id}', [CategoryController::class, 'show']);

    Route::get('ingredients', [IngredientController::class, 'index']);
    Route::get('ingredients/create', [IngredientController::class, 'create']);
    Route::post('ingredients/create', [IngredientController::class, 'store']);
    Route::any('ingredients/edit/{id}', [IngredientController::class, 'edit'])->name('ingredient.edit');
    Route::delete('ingredients/delete/{id}', [IngredientController::class, 'delete'])->name('ingredient.delete');
    Route::get('ingredients/{ingredient}', [IngredientController::class, 'show']);
});

require __DIR__ . '/auth.php';