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

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

Route::group(['prefix' => 'adverisement', 'namespace' => 'Store'], function () {

    Route::get('/{id}', 'AdvertisementController@show')->name('advertisement.show');

});

Route::group(['prefix' => 'advertisement', 'namespace' => 'Store', 'middleware' => ['web','auth']], function () {

    Route::get('/create', 'AdvertisementController@create')->name('advertisement.create');

    Route::post('/', 'AdvertisementController@store')->name('advertisement.store');

    Route::get('/edit/{id}', 'AdvertisementController@edit')->name('advertisement.edit');

    Route::put('/{id}', 'AdvertisementController@update')->name('advertisement.update');

});

Route::group(['namespace' => 'Auth', 'middleware' => ['web','auth']], function () {

    Route::get('user/ads', 'UserController@ads')->name('user.ads');

    Route::get('/message', 'UserController@index')->name('message.index');

});

Route::group(['namespace' => 'Chat'], function () {

    Route::get('message/{id}', 'MessageController@chatHistory')->name('message.read');

    Route::group(['prefix' => 'ajax', 'as' => 'ajax::'], function () {

        Route::post('message/send', 'MessageController@ajaxSendMessage')->name('message.new');

        Route::delete('message/delete/{id}', 'MessageController@ajaxDeleteMessage')->name('message.delete');
    });
});
