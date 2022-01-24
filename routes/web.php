<?php

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

Route::get('/', 'App\Http\Controllers\AppController@index');

// GAME ROUTES
Route::get('/games', 'App\Http\Controllers\GameController@index');
Route::get('/games/manage', 'App\Http\Controllers\GameController@showAllGame');
Route::get('/games/create', 'App\Http\Controllers\GameController@create');
Route::post('/games/create', 'App\Http\Controllers\GameController@store');
Route::get('/games/{id}', 'App\Http\Controllers\GameController@edit');
Route::put('/games/{id}', 'App\Http\Controllers\GameController@update');
Route::delete('games/{id}', 'App\Http\Controllers\GameController@destroy');


Route::get('/profile', function () {
    return 'Halaman Profile';
});
