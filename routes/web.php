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

Route::get('/dataproduk','BarangController@indexp');

Route::get('/dataproduk/create', 'BarangController@createp');
Route::post('/dataproduk/create', 'BarangController@savep');

Route::get('/dataproduk/edit/{id}', 'BarangController@editp')->name('edit');
Route::post('/dataproduk/edit', 'BarangController@updatep');

Route::get('/dataproduk/delete/{id}', 'BarangController@deletep')->name('deletep');

Route::get('/dataproduk/detail/{id}', 'BarangController@detailp')->name('detailp');

// PEMBELI

Route::get('/datapembeli','PembeliController@indexp');

Route::get('/datapembeli/create', 'PembeliController@createp');
Route::post('/datapembeli/create', 'PembeliController@savep');

Route::get('/datapembeli/edit/{id}', 'PembeliController@editp')->name('edit');
Route::post('/datapembeli/edit', 'PembeliController@updatep');

Route::get('/datapembeli/delete/{id}', 'PembeliController@deletep')->name('deletep');

// CARI

Route::get('/cari','CariController@index');
Route::get('/hasil', 'CariController@getName');

// TAMPILAN USER

Route::get('/dashboard','UserController@indexu');

// CHECKOUT

Route::get('/checkout/create', 'CheckoutController@createp');
Route::post('/checkout/create', 'CheckoutController@savep');

Route::get('/checkout/detail/{id}', 'CheckoutController@detailp')->name('detailp');

// PEMBAYARAN
Route::get('/pembayaran/create', 'CheckoutController@createa');