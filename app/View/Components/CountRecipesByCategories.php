<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class CountRecipesByCategories extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        $categories = Category::query()
            ->join('category_recipe', 'categories.id', '=', 'category_recipe.category_id')
            ->join('recipes', 'category_recipe.recipe_id', '=', 'recipes.id')
            ->where('recipes.active', 1)
            ->select('categories.title', 'categories.slug', DB::raw('count(*) as total'))
            ->groupBy([
                'categories.title', 'categories.slug'
            ])
            ->orderByDesc('total')
            ->limit(5)
            ->get();

        return view('components.count-recipes-by-categories', compact('categories'));
    }
}
