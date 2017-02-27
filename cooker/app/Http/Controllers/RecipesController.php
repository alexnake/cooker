<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Implementation of Recipes Model
     *
     * @var App\Models\Recipes $recipes;
     */
    protected $recipes;

    /**
     * Creates new instance of Recipes
     *
     * @param App\Models\Recipes $recipes
     */
    public function __construct(Recipes $recipes)
    {
        $this->recipes = $recipes;
    }

    
    /**
     * Create a new recipe
     *
     * @param Illuminate\Http\Request $request
     * @return
     */
    public function create(Request $request)
    {
        $newRecipe = Recipes::create($request->all());
        
        return redirect()->back();
    }
    
    /**
     * Get recipes order by date desc
     *
     * @return
     */
    public function getAllOrderByDateDesc()
    {
        $clasicsRecipes = $this->recipes->getClasicsOrderByDateDesc();
        
        return view('menu')->with('recipes', $clasicsRecipes);
    }
}
