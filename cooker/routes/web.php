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
Route::get('/', function () {
    return view('index');
});

/*
|--------------------------------------------------------------------------
| Menu route
|--------------------------------------------------------------------------
 */
Route::get('/menu', function () {
    return view('menu');
});

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
