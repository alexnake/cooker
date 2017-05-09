<?php

/*
    @Author -> Alejandro Manero
    Controller from Index Page.
 */

namespace App\Http\Controllers;

use App\Models\Recipes;

class IndexController extends Controller
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
     * Show all recepies
     *
     * @return
     */
    public function index()
    {
        $indexRecipes = $this->recipes->getLastTen();

        if (count($indexRecipes) > 0) {
            return view('index')->with('indexRecipes', $indexRecipes);
        }
        
        abort(403, 'No recipes in DDBB.');
    }
}
