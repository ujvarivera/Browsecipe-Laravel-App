<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RecipeController::class, 'index'])->name('home');
Route::get('/{recipe:slug}', [RecipeController::class, 'show'])->name('recipes.show');
Route::get('/categories/{category:slug}', [RecipeController::class, 'getRecipesByCategory'])->name('categories.getRecipes');
