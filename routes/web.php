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
// Route::get('pongers/getAllPongers', 'PongerController@getAllPongers');
// Route::view('pongers/getAllPongers', 'PongerController@getAllPongers');
// Route::view('pongers/getAllPongers', 'pongers.getAllPongers');




# https://laravel.com/docs/5.5/controllers#restful-partial-resource-routes
# register many resource controllers at once by passing an array to the resources method:
Route::resources([
	'pongers'=> 'PongerController',
	'leagues'=> 'LeagueController',
	'brackets'=> 'BracketController',
	
]);
Route::get('pong', function () {
	    return view('pongers.test');
	});

// Route::view('badgeviewer/', 'badgeviewer');
Route::get('badgeviewer', function () {
	    return view('badgeviewer.index');
	});

# LEAGUES..
// Route::get('leagues', 'LeagueController@index');
// Route::resource('leagues', 'LeagueController');

# BRACKET..
Route::get('bracket', 'BracketController@index');
Route::get('about', 'BracketController@about');




# PONGERS ALL TEST..
	// Route::get('foo', function(){	return 'hello world'; 	});
	// Route::get('/', 'PongerController@getAllPongers');
	// Route::get('/getAllpongers', 'PongerController@getAllPongers');
	
	# THIS WORKS.
	// Route::get('/', function () {
	//     return view('pongers.getAllpongers');
	// });








Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::post('login', [
	'uses' => 'SigninController@signin',
	'as' => 'auth.signin'
]);
