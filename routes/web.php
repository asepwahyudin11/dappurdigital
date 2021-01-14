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
    return redirect()->route("beranda");
});

Route::get('/beranda', 'AuthController@index')->name('beranda');
Route::get('/bukutamu', 'AuthController@bukutamu')->name('bukutamu');
Route::get('/login', 'AuthController@login')->name('login');
Route::get('/daftar', 'AuthController@daftar')->name('daftar');
Route::get('/report_tamu', 'AuthController@report_tamu')->name('report_tamu');
Route::get('/katalogproduct', 'ProductsController@katalogproduct')->name('katalogproduct');
Route::post('/simpan_user', 'AuthController@simpan_user')->name('simpan_user');
Route::post('/simpan_tamu', 'AuthController@simpan_tamu')->name('simpan_tamu');
Route::post('/proses_login', 'AuthController@proses_login')->name('proses_login');
Route::get('/resetpassword', 'AuthController@resetpassword')->name('resetpassword');
Route::get('/order/{id}/tahap1', 'OrdersController@ordertahap1')->name('ordertahap1');
Route::post('/simpantahap1', 'OrdersController@simpantahap1')->name('simpantahap1');
Route::get('/order/{id}/tahap2', 'OrdersController@ordertahap2')->name('ordertahap2');
Route::post('/simpantahap2', 'OrdersController@simpantahap2')->name('simpantahap2');
Route::get('/cekdata', 'OrdersController@cekdata')->name('cekdata');

Route::group(['prefix' => 'Admin'], function(){
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('rekapbukutamu', 'AdminController@rekapbukutamu')->name('rekapbukutamu');
    Route::get('tim', 'AdminController@tim')->name('tim');
    Route::get('kontak', 'AdminController@kontak')->name('kontak');
    Route::post('updatestatus', 'OrdersController@updatestatus')->name('updatestatus');
    Route::resource('armadas' , 'ArmadasController' );
    Route::resource('products' , 'ProductsController' );
    Route::resource('orders' , 'OrdersController' );
});
