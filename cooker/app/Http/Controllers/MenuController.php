<?php

/*
    @Author -> Alejandro Manero
    Controller from Menu Page.
 */

namespace App\Http\Controllers;

use App\Models\Recipes;

class MenuController extends Controller
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
        $clasicsRecipes = $this->recipes->getClasicsOrderByDateDesc();

        if (count($clasicsRecipes) > 0) {
            return view('menu')->with('clasicsRecipes', $clasicsRecipes);
        }
        
        abort(403, 'No recipes in DDBB.');
    }
}
