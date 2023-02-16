<?php

use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function(){
    return 'Veikia';
});

Route::get('recipes', [RecipeController::class, 'index']);
Route::get('recipes/{id}', [RecipeController::class, 'show'])->whereNumber('id');
Route::get('recipes/create', [RecipeController::class, 'create']);
Route::any('recipes/edit/{id}', [RecipeController::class, 'edit'])->name('recipe.edit');
Route::post('recipes/store', [RecipeController::class, 'store']);
Route::delete('recipes/delete/{id}', [RecipeController::class, 'delete'])->name('recipe.delete');

