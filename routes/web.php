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

Route::group(['prefix'=> '/'], function () {
    Route::get('/','homePageController@index')->name('home');
    Route::get('/hakkimizda','homePageController@about')->name('about');
    Route::get('/iletisim','homePageController@contact')->name('contact');
    Route::get('/hizmetlerimiz','homePageController@services')->name('services');
});
