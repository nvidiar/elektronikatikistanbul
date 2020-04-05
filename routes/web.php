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

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/'], function () {
    Route::get('', 'homePageController@index')->name('home');
    Route::get('login', 'homePageController@login')->name('login');
    Route::get('/hakkimizda', 'homePageController@about')->name('about');
    Route::get('/iletisim', 'homePageController@contact')->name('contact');
    Route::get('/fiyatlandirma', 'homePageController@pricing')->name('pricing');
    Route::post('/contactUs', 'homePageController@contactUs')->name('contactUs');
    Route::post('/callBack', 'homePageController@callBack')->name('callBack');
    Route::get('/logout', 'Auth\LoginController@logout');


});


Route::group(['prefix' => 'eatik'], function () {
    Route::get('/', 'homePageController@services')->name('services');
    Route::get('/anakart-hurdasi', 'WasteController@findItem')->name('mainboard');
    Route::get('/telefon-hurdasi', 'WasteController@findItem')->name('phones');
    Route::get('/tablet-hurdasi',   'WasteController@findItem')->name('tablet');
    Route::get('/adaptor-hurdasi', 'WasteController@findItem')->name('adapter');
    Route::get('/monitor-hurdasi', 'WasteController@findItem')->name('monitor');
    Route::get('/oem-hurdalar', 'WasteController@findItem')->name('oem');
    Route::get('/{anything}', 'WasteController@findItem');
});


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'PricingController@index');
    Route::get('fiyatDuzenle/{id}', 'PricingController@edit')->name('fiyatDuzenle');
    Route::get('sil/{id}', 'PricingController@destroy')->name('sil');
    Route::post('olustur', 'PricingController@store')->name('store');
    Route::post('guncelle/{id}', 'PricingController@update')->name('update');
});

Auth::routes();

//Route::get('/login', 'homePageController@login')->name('f');
