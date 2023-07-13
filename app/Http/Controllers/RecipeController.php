<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::query()->where('active', 1)->paginate(5);

        return view('recipes.index', compact('recipes'));
    }
}
