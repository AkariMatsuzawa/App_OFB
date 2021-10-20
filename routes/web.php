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

Route::get('/toppage', 'TopController@showTopPage')->name('top.show');
Route::get('/searchpage', 'SearchController@showSearchPage')->name('searchpage');
Route::get('/listpage', 'ListController@showListPage')->name('list.show');
Route::get('/offerpage', 'OfferController@showOfferPage')->name('offerpage.show');
// Route::get('/testpage', 'TestController@editTestPage')->name('testpage.edit');
Route::post('/sendpage', 'SendController@createSendPage')->name('sendpage.create');
Route::get('/favoritepage', 'FavoriteController@showFavoritePage')->name('favoritepage.show');
Route::get('/favorite_listpage', 'Favorite_listController@showFavorite_listPage')->name('favorite_listpage.show');
Route::get('/management_page', 'ManagementController@showManagement_Page')->name('management_page.show');
Route::get('/chatpage', 'ChatController@showChatPage')->name('chatpage.show');

Route::get('/setuppage', 'SetupController@showSetupPage')->name('setuppage.show');



