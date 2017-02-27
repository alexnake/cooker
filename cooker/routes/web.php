<?php

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

/*
|--------------------------------------------------------------------------
| Index route
|--------------------------------------------------------------------------
 */
Route::get('/', [
    'uses' => 'IndexController@index',
    'as' => 'index.index'
]);

/*
|--------------------------------------------------------------------------
| Menu route
|--------------------------------------------------------------------------
 */
Route::get('/menu', [
    'uses' => 'MenuController@index',
    'as' => 'menu.index'
]);

/*
|--------------------------------------------------------------------------
| Reserve route
|--------------------------------------------------------------------------
 */
Route::get('/reserve', function () {
    return view('reserve');
});

/*
|--------------------------------------------------------------------------
| Make reserve route
|--------------------------------------------------------------------------
 */
Route::post('/makeReserve', [
    'uses' => 'ReserveController@makeReserve',
    'as' => 'reserve.make_reserve'
]);

/*
|--------------------------------------------------------------------------
| Create recipe View
|--------------------------------------------------------------------------
 */
Route::get('/makeRecipe', function () {
    return view('newRecipe');
});

/*
|--------------------------------------------------------------------------
| Make new recipe
|--------------------------------------------------------------------------
 */
Route::post('/create', [
    'uses' => 'RecipesController@create',
    'as' => 'recipes.create'
]);

/*
|--------------------------------------------------------------------------
| Take all recipes
|--------------------------------------------------------------------------
 */
Route::get('/getRecipes', [
    'uses' => 'RecipesController@getAllOrderByDateDesc',
    'as' => 'recipes.getAllOrderByDateDesc'
]);
