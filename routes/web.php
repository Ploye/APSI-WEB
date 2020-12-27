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

Route::get('/', function () {
    return view('home');
});
Route::get('/pegawai', 'PegawaiController@index');
Route::get('search','PegawaiController@search');
Route::get('/kelolabaju', 'BajuController@index');
Route::get('/absen', 'AbsensiController@index');
Route::get('/penggajian', 'PenggajianController@index');
Route::get('changeStatus', 'AbsensiController@changeStatus');
Route::resource('pegawai', 'PegawaiController');
Route::resource('absen', 'AbsensiController');
Route::resource('penggajian', 'PenggajianController');
//Report
Route::get('generatePDF','PegawaiController@generatePDF');
Route::get('generatePDF','AbsensiController@generatePDF');


// Route::get('/admin', 'BlogController@admin');

//husen
// Route::get('/penjualan','BajuController@index');
// Route::get('/kelolabaju','BajuController@kelolabaju');
// Route::post('/kelolabaju','BajuController@store');
// Route::post('/kelolabaju','BajuController@update');

Route::resource('kelolabaju', 'BajuController');
Route::post('kelolabaju/emptyAll', 'BajuController@emptyAll');
Route::post('kelolabaju/restoreAll', 'BajuController@restoreAll');
Route::post('kelolabaju/restore', 'BajuController@restore');
Route::post('kelolabaju/forceDelete', 'BajuController@forceDelete');


Route::get('filterPenggajian/{bulan}/{tahun}', 'PenggajianController@getFilterPenggajian');


// Route::post('pegawai/emptyAll', 'PegawaiController@emptyAll');
// Route::post('pegawai/restoreAll', 'PegawaiController@restoreAll');
// Route::post('pegawai/restore', 'PegawaiController@restore');
// Route::post('pegawai/forceDelete', 'PegawaiController@forceDelete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

