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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::middleware(['auth'])->group(function () {
    Route::get('/commodities/import/excel', 'CommodityController@importForm')->name('import.excel.commodities');
    Route::post('/commodities/import/excel', 'CommodityController@importExcel')->name('commodities.import.excel');

    Route::resource('commodities', 'CommodityController');
});