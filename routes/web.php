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

Route::get('/home', 'ManageController@home');
Route::get('/home', 'ManageController@tampilTerbaru');

Route::get('/baru', 'ManageController@baru');
//route untuk menampilkan halaman tambah data
Route::get('/baru/add', 'ManageController@addTerbaru');
//route untuk memproses penambahan data
Route::post('/baru/create', 'ManageController@createTerbaru');
//route untuk menampilkan halaman edit data
Route::get('/baru/edit/{id}', 'ManageController@editTerbaru');
//route untuk memproses update data
Route::post('/baru/update/{id}', 'ManageController@updateTerbaru');
//route untuk memproses hapus data
Route::get('/baru/delete/{id}', 'ManageController@deleteTerbaru');
//route untuk menjalankan fungsi cetak pdf halaman manage produk terbaru
Route::get('/baru/cetak_pdf', 'ManageController@cetakTerbaru');

Route::get('/women', 'ManageController@women');
//route untuk menampilkan halaman tambah data
Route::get('/women/add', 'ManageController@addWomen');
//route untuk memproses penambahan data
Route::post('/women/create', 'ManageController@createWomen');
//route untuk menampilkan halaman edit data
Route::get('/women/edit/{id}', 'ManageController@editWomen');
//route untuk memproses update data
Route::post('/women/update/{id}', 'ManageController@updateWomen');
//route untuk memproses hapus data
Route::get('/women/delete/{id}', 'ManageController@deleteWomen');
//route untuk menjalankan fungsi cetak pdf halaman manage produk women
Route::get('/women/cetak_pdf', 'ManageController@cetakWomen');