<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('transaksi0103');
// });

Route::get('/','fadhilcontroller@index')->name('transaksi');
Route::get('/tambah', 'fadhilcontroller@tambah')->name('transaksi.tambah');
Route::get('/edit/{id}', 'fadhilcontroller@edit')->name('transaksi.edit');
Route::get('/search', 'fadhilcontroller@search')->name('transaksi.search');
Route::post('/proses', 'fadhilcontroller@store')->name('transaksi.store');
Route::post('/hapus/{id}', 'fadhilcontroller@destroy')->name('transaksi.hapus');
Route::post('/update/{id}', 'fadhilcontroller@update')->name('transaksi.update');