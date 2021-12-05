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
Route::post('/searchpage', 'SearchController@storeSearchPage')->name('searchpage.store');
Route::get('/searchpage', 'SearchController@index')->name('searchpage.index');
Route::get('/listpage/{id}', 'ListController@showListPage')->name('list.show');
Route::get('/offerpage/{id}', 'OfferController@showOfferPage')->name('offerpage.show');

Route::get('/deletepage', 'DeleteController@showDeletePage')->name('deletepage.show');
Route::delete('/deletepage', 'DeleteController@destroyDeletePage')->name('deletepage.destroy');


Route::post('/sendpage', 'SendController@storeSendPage')->name('sendpage.store');
Route::get('/favoritepage', 'FavoriteController@showFavoritePage')->name('favoritepage.show');
Route::get('/favorite_listpage', 'Favorite_listController@showFavorite_listPage')->name('favorite_listpage.show');
Route::get('/management_page', 'ManagementController@showManagement_Page')->name('management_page.show');
Route::post('/management_page', 'ManagementController@storeManagement_Page')->name('management_page.store');

Route::get('/chatpage', 'ChatController@showChatPage')->name('chatpage.show');
Route::post('/chatpage', 'ChatController@storeChatPage')->name('chatpage.store');

Route::get('/setuppage', 'SetupController@showSetupPage')->name('setuppage.show');
Route::post('/setuppage', 'SetupController@storeSetupPage')->name('setuppage.store');

Route::get('/createpage', 'CreateController@getCreatePage')->name('createpage.get');
Route::post('/createpage', 'CreateController@storeCreatePage')->name('createpage.store');
Route::post('/createpage', 'CreateController@updateCreatePage')->name('createpage.update');
//updateはpost送信？
// Route::get('/createpage/{id}/edit', 'CreateController@editCreatePage')->name('createpage.edit');

Route::get('/renewpage', 'RenewController@showRenewPage')->name('renewpage.get');
Route::put('/renewpage/{id}', 'RenewController@updateRenewPage')->name('renewpage.update');

Route::get('/completepage', 'CompleteController@showCompletePage')->name('completepage.show');
Route::get('/completepage/{company_id}/edit', 'CompleteController@editCompletePage')->name('completepage.edit');


//検討中を作成
Route::get('students/{student_id}/favorites', 'FavoriteController@store');


