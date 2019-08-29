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

Route::get('/', 'SidangController@index')->name('sidang.index');
Route::get('/tambah-data', 'SidangController@create')->name('sidang.create');
Route::post('/tambah-data', 'SidangController@store')->name('sidang.store');
Route::get('/ubah-data/{sidang}', 'SidangController@edit')->name('sidang.edit');
Route::patch('/ubah-data/{sidang}', 'SidangController@update')->name('sidang.update');
Route::delete('/ubah-data/{sidang}', 'SidangController@destroy')->name('sidang.destroy');
Route::get('/laporan', 'SidangController@laporan')->name('sidang.laporan');