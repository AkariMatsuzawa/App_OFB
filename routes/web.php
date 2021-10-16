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
Route::get('/listpage', 'ListController@showListPage')->name('list');
Route::get('/offerpage', 'OfferController@showOfferPage')->name('offerpage');
Route::post('/testpage', 'TestController@showTestPage')->name('testpage');
Route::post('/sendpage', 'SendController@showSendPage')->name('sendpage');
Route::get('/favoritepage', 'FavoriteController@showFavoritePage')->name('favoritepage');
Route::get('/favorite_listpage', 'Favorite_listController@showFavorite_listPage')->name('favorite_listpage');
Route::get('/management_page', 'ManagementController@showManagement_Page')->name('management_page');
Route::get('/chatpage', 'ChatController@showChatPage')->name('chatpage');

Route::get('/setuppage', 'SetupController@showSetupPage')->name('setuppage');



