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
	return view('index');
})->name('index.index');

# https://laravel.com/docs/5.5/controllers#restful-partial-resource-routes
# register many resource controllers at once by passing an array to the resources method:
Route::resources([
	'pongers' => 'PongerController',
	'leagues' => 'LeagueController',
	'brackets' => 'BracketController',

]);


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::post('login', [
	'uses' => 'SigninController@signin',
	'as' => 'auth.signin'
]);

Route::get('/react-sandbox', function () {
	return view('react-sandbox.index');
});
Route::get('/about', function () {
	return view('about.index');
});
