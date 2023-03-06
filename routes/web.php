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


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('admin/recipes', [RecipeController::class, 'index']);
    Route::get('admin/recipes/create', [RecipeController::class, 'create']);
    Route::post('admin/recipes/store', [RecipeController::class, 'store']);
    Route::get('admin/recipes/{id}', [RecipeController::class, 'show'])->whereNumber('id');

    Route::get('admin/categories', [CategoryController::class, 'index']);
    Route::get('admin/categories/create', [CategoryController::class, 'create']);
    Route::post('admin/categories/create', [CategoryController::class, 'store']);
    Route::get('admin/categories/{id}', [CategoryController::class, 'show']);

    Route::get('admin/ingredients', [IngredientController::class, 'index']);
    Route::get('admin/ingredients/create', [IngredientController::class, 'create']);
    Route::post('admin/ingredients/create', [IngredientController::class, 'store']);
    Route::get('admin/ingredients/{ingredient}', [IngredientController::class, 'show']);
});

Route::middleware(['auth', 'role'])->group(function () {
    Route::any('admin/recipes/edit/{id}', [RecipeController::class, 'edit'])->name('recipe.edit');
    Route::delete('admin/recipes/delete/{id}', [RecipeController::class, 'delete'])->name('recipe.delete');

    Route::any('admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::delete('admin/categories/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::any('admin/ingredients/edit/{id}', [IngredientController::class, 'edit'])->name('ingredient.edit');
    Route::delete('admin/ingredients/delete/{id}', [IngredientController::class, 'delete'])->name('ingredient.delete');
});

require __DIR__ . '/auth.php';
