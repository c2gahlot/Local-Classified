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

    Route::get('/create', 'AdvertisementController@create')->name('advertisement.create')->middleware('auth');

    Route::post('/', 'AdvertisementController@store')->name('advertisement.store')->middleware('auth');

    Route::get('/{id}', 'AdvertisementController@show')->name('advertisement.show');

    Route::get('/edit/{id}', 'AdvertisementController@edit')->name('advertisement.edit')->middleware('auth');

    Route::put('/{id}', 'AdvertisementController@update')->name('advertisement.update')->middleware('auth');

});

Route::group(['prefix' => 'user', 'namespace' => 'Auth'], function () {

    Route::get('/ads', 'UserController@ads')->name('user.ads')->middleware('auth');

});