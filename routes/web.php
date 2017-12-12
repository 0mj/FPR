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

# FPR LANDING page..
Route::get('/', function () {
    return view('index');
})->name('index.index');

# PONGERS..
Route::get('pongers', 'PongerController@index');
Route::resource('pongers', 'PongerController');

# LEAGUES..
Route::get('leagues', 'LeagueController@index');
Route::resource('leagues', 'LeagueController');

# BRACKET..
Route::get('bracket', 'BracketController@index');
Route::get('about', 'BracketController@about');




