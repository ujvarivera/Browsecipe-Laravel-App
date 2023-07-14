<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::query()->where('active', 1)->paginate(5);

        return view('recipes.index', compact('recipes'));
    }

    public function show(Recipe $recipe)
    {
        if(!$recipe->active == 1) {
            abort(404);
        }

        $prev_recipe = Recipe::query()
                        ->where('active', 1)
                        ->where('id', '<', $recipe->id)
                        ->first();

        $next_recipe = Recipe::query()
                    ->where('active', 1)
                    ->where('id', '>', $recipe->id)
                    ->first();

        return view('recipes.show', compact('recipe', 'prev_recipe', 'next_recipe'));
    }

    public function getRecipesByCategory(Category $category)
    {
        $recipes = Recipe::query()
            ->join('category_recipe', 'recipes.id', '=', 'category_recipe.recipe_id')
            ->where('category_recipe.category_id', '=', $category->id)
            ->where('recipes.active', 1)
            ->orderBy('recipes.created_at', 'desc')
            ->paginate(10);

        dd($recipes);
        //return view('recipes.index', compact('recipes', 'category'));
    }
}
