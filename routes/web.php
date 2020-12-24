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

Route::get('/home', 'HomeController@home');
Route::get('/home', 'HomeController@baru');

Route::get('/baru', 'BaruController@baru');
//route untuk menampilkan halaman tambah data
Route::get('/baru/add', 'BaruController@add');
//route untuk memproses penambahan data
Route::post('/baru/create', 'BaruController@create');
//route untuk menampilkan halaman edit data
Route::get('/baru/edit/{id}', 'BaruController@edit');
//route untuk memproses update data
Route::post('/baru/update/{id}', 'BaruController@update');
//route untuk memproses hapus data
Route::get('/baru/delete/{id}', 'BaruController@delete');
//route untuk menjalankan fungsi cetak pdf halaman manage produk terbaru
Route::get('/baru/cetak_pdf', 'BaruController@cetak_pdf');

Route::get('/women', 'WomenController@women');
//route untuk menampilkan halaman tambah data
Route::get('/women/add', 'WomenController@add');
//route untuk memproses penambahan data
Route::post('/women/create', 'WomenController@create');
//route untuk menampilkan halaman edit data
Route::get('/women/edit/{id}', 'WomenController@edit');
//route untuk memproses update data
Route::post('/women/update/{id}', 'WomenController@update');
//route untuk memproses hapus data
Route::get('/women/delete/{id}', 'WomenController@delete');
//route untuk menjalankan fungsi cetak pdf halaman manage produk women
Route::get('/women/cetak_pdf', 'WomenController@cetak_pdf');