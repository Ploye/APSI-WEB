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
Route::get('generatePDFpeg','PegawaiController@generatePDF');
Route::get('generatePDF','AbsensiController@generatePDF');
Route::post('generatePDF','PenggajianController@generatePDF');


//husen
Route::get('{id}/toko', 'TokoController@toko');
// Route::get('/penjualan','BajuController@index');
// Route::get('/kelolabaju','BajuController@kelolabaju');
// Route::post('/kelolabaju','BajuController@store');
// Route::post('/kelolabaju','BajuController@update');
//toko
//Route::post('/siswa/{id}/update','SiswaController@update');

//cekout
Route::post('/pesanbaju','PesanbajuController@store');
Route::post('/beli','LaporanbeliController@store');


Route::get('/{id}/{id_baju}/beli', 'TokoController@beli');
Route::get('{id}/toko', 'TokoController@toko');
Route::get('/tokov', 'TokoController@tokov');
Route::get('{id}/pesanbaju', 'TokoController@pesanbaju');

Route::resource('sablon.toko', 'TokoController');

//setelah beli
Route::get('{id}/toko', 'TokoController@toko');


//admin
Route::get('/kelolabaju', 'BajuController@index');
Route::resource('kelolabaju', 'BajuController'); 
Route::post('kelolabaju/emptyAll', 'BajuController@emptyAll');
Route::post('kelolabaju/restoreAll', 'BajuController@restoreAll');
Route::post('kelolabaju/restore', 'BajuController@restore');
Route::post('kelolabaju/forceDelete', 'BajuController@forceDelete');

//halaman laporan penjualan
Route::get('/laporanpenjualan', 'LaporanbeliController@index');
// Route::resource('laporanpenjualan', 'LaporanbeliController');


Route::get('filterPenggajian/{bulan}/{tahun}', 'PenggajianController@getFilterPenggajian');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

