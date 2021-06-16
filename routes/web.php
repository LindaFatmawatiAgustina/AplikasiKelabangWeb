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
//     return view('welcome');
// });
  
Auth::routes(['verify' => true]);

Route::group(['middleware' => ['dinaspu','auth']],function(){

	Route::get('/logout','AuthController@logout')->name('logout');
	Route::get('/maps','PelaporanController@maps_belum_perbaikan')->name('maps');
	Route::get('/mapsselesai','PelaporanController@maps_selesai_perbaikan')->name('maps_selesai');
	Route::get('/pelaporan','PelaporanController@pelaporan')->name('pelaporan');
	Route::get('/laporan/{id}','PelaporanController@detail_laporan')->name('detail_laporan');

	Route::get('/tindak_lanjut/{id}','PelaporanController@edit_laporan_tindak_lanjut')->name('edit_tindak_lanjut');
		Route::post('/tindak_lanjut/{id}','PelaporanController@update_laporan_tindak_lanjut')->name('update_tindak_lanjut');
	Route::get('/hapuslaporan/{id}','PelaporanController@hapus_laporan')->name('hapus_laporan');
	;
	
	


});

Route::group(['middleware' => ['admin','auth']],function(){

	Route::get('/indexs', 'AuthController@indexs')->name('homes');
	Route::get('/logout-pim','AuthController@logout')->name('logout-pim');

});
Route::get('/','AuthController@login')->middleware('guest')->name('login');
Route::get('/login','AuthController@login')->middleware('guest')->name('login');
Route::get('/register','AuthController@register')->middleware('guest')->name('register');
Route::post('/postlogin','AuthController@postlogin')->middleware('guest')->name('postlogin');
Route::post('/postregister','AuthController@postregister')->middleware('guest')->name('postregister');
Route::get('/pelaporan-pdf','PelaporanController@cetakpdf')->name('pdf_laporan');


