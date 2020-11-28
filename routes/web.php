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
// Route::get('/admin', 'BlogController@admin');


Route::resource('pegawai', 'PegawaiController');
Route::post('pegawai/emptyAll', 'PegawaiController@emptyAll');
Route::post('pegawai/restoreAll', 'PegawaiController@restoreAll');
Route::post('pegawai/restore', 'PegawaiController@restore');
Route::post('pegawai/forceDelete', 'PegawaiController@forceDelete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

