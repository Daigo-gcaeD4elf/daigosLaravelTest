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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wasshoi/{str?}', 'WasshoiController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/menu', 'MenuController@index')->name('menu');

Route::get('/lookingForPokemon/{lookingForPokemonId?}', 'LookingForPokemonController@index')->name('lookingForPokemonTop');
Route::post('/lookingForPokemon/conf/{lookingForPokemonId?}', 'LookingForPokemonController@conf');
Route::post('/lookingForPokemon/done/{lookingForPokemonId?}', 'LookingForPokemonController@done');
