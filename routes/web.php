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

Route::get('pongers', 'PongerController@index');
Route::resource('pongers', 'PongerController');


Route::get('leagues', 'LeagueController@index');
Route::resource('leagues', 'LeagueController');

Route::get('/bracket', function () {
    return view('pongbracket.bracket');
});

Route::get('/', function () {
    return view('index');
})->name('index.index');


// Route::get('/', function () {
//     return '<h1>' . strtotime('now') . '</h1>';
// });
