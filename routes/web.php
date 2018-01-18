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

	 Route::get('bracket', function () {
	     return view('pongbracket.bracket');
	 });

	 Route::get('/', function () {
	     return '<h1>' . strtotime('now') . '</h1>';
	 });

*/


Route::get('/', function () {
    return view('index');
})->name('index.index');

# PONGERS..
// Route::get('pongers', 'PongerController@index');
Route::get('pongers/getAllPongers', 'PongerController@getAllPongers');
Route::resource('pongers', 'PongerController');

# LEAGUES..
// Route::get('leagues', 'LeagueController@index');
Route::resource('leagues', 'LeagueController');

# BRACKET..
// Route::get('bracket', 'BracketController@index');
Route::get('about', 'BracketController@about');




# PONGERS ALL TEST..
	// Route::get('foo', function(){	return 'hello world'; 	});
	// Route::get('/', 'PongerController@getAllPongers');
	// Route::get('/getAllpongers', 'PongerController@getAllPongers');
	
	# dis work! :)
	// Route::get('/', function () {
	//     return view('pongers.getAllpongers');
	// });






