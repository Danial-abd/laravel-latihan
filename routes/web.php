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

Route::get('/home', 'HomeController@index')->name('home');


//Mahasiswa
Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('mahasiswa-tambah', 'MahasiswaController@tambah')->name('tbh.mhs');
Route::post('smpn-mahasiswa','MahasiswaController@store')->name('simpan.mahasiswa');
Route::get('edt-mhs/{id}','MahasiswaController@edit')->name('edt.mhs');
Route::post('updt-mhs/{id}','MahasiswaController@update')->name('updt.mhs');
Route::get('dlt-mhs/{id}','MahasiswaController@delete')->name('dlt.mhs');

//Makul
Route::get('makul', 'MakulController@index')->name('makul');
Route::get('makul-tbh','MakulController@tambah')->name('tbh.makul');
Route::post('makul-save','MakulController@store')->name('save.makul');
Route::get('makul-edit/{id}','MakulController@edit')->name('edit.makul');
Route::post('makul-updt/{id}','MakulController@update')->name('updt.makul');
Route::get('dlt-makul/{id}','MakulController@delete')->name('dlt.makul');

//Nilai
Route::get('nilai', 'NilaiController@index')->name('nilai');
Route::get('nilai-tbh','NilaiController@tambah')->name('tbh.nilai');
Route::post('nilai-save','NilaiController@store')->name('save.nilai');
Route::get('nilai-edit/{id}','NilaiController@edit')->name('edit.nilai');
Route::post('nilai-updt/{id}','NilaiController@update')->name('updt.nilai');
Route::get('dlt-nilai/{id}','NilaiController@delete')->name('dlt.nilai');