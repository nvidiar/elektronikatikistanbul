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
    Route::get('','homePageController@index')->name('home');
    Route::get('/hakkimizda','homePageController@about')->name('about');
    Route::get('/iletisim','homePageController@contact')->name('contact');
    Route::post('/contactUs','homePageController@contactUs')->name('contactUs');
    Route::post('/callBack','homePageController@callBack')->name('callBack');
});


Route::group(['prefix'=>'eatik'],function () {
    Route::get('/','homePageController@services')->name('services');
    Route::get('/anakart-hurdasi', 'WasteController@findItem')->name('mainboard');
    Route::get('/telefon-hurdasi', 'WasteController@findItem')->name('phones');
    Route::get('/tablet-hurdasi', 'WasteController@findItem')->name('tablet');
    Route::get('/adaptor-hurdasi', 'WasteController@findItem')->name('adapter');
    Route::get('/monitor-hurdasi', 'WasteController@findItem')->name('monitor');
    Route::get('/oem-hurdalar', 'WasteController@findItem')->name('oem');
    Route::get('/{anything}', 'WasteController@findItem');

});
