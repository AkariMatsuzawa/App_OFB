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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/toppage', 'TopController@showTopPage')->name('top');
Route::get('/searchpage', 'SearchController@showSearchPage')->name('search');
Route::get('/offerpage', 'OfferController@showOfferPage')->name('offerpage');
Route::get('/favoritepage', 'FavoriteController@showFavoritePage')->name('favoritepage');