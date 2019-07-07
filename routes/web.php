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
Route::resource('seasons', 'SeasonsController');

// displays the main view
Route::get('/', 'DashboardController@index');


Route::resource('matchPlayers', 'MatchPlayersController');

/*Route::get('/seasons', 'SeasonsController@index');
Route::get('/seasons/index', 'SeasonsController@back');
Route::get('/seasons/create', 'SeasonsController@create');
Route::post('/seasons', 'SeasonsController@store');
Route::get('/seasons/{show}', 'SeasonsController@show');
Route::get('/seasons/{seasons}/edit', 'SeasonsController@edit');
Route::patch('/seasons/{seasons}', 'SeasonsController@update');*/

Route::resource('users', 'UsersController');
Route::get('/user/create', 'UserController@create');
Route::get('/user/{match}', 'UserController@show');
Route::get('/user/{match}/edit', 'UserController@edit');
Route::patch('/user/{match}', 'UserController@update');
Route::delete('/user/{match}', 'UserController@destroy');

// displays the matches view + crud
Route::resource ('matches','MatchesController');
Route::get('/matches/create', 'MatchesController@create');
Route::get('/matches/{match}', 'MatchesController@show');
Route::get('/matches/{match}/edit', 'MatchesController@edit');
Route::patch('/matches/{match}', 'MatchesController@update');
Route::delete('/matches/{match}', 'MatchesController@destroy');
Route::post('/matches', 'MatchesController@store');

Route::resource('players', 'PlayerController');
Route::get('/players/show', 'PlayersController@show');

// displays the totals view
Route::resource('totals', 'TotalsController');
Route::get('totals', 'TotalsController@index');


Auth::routes();
