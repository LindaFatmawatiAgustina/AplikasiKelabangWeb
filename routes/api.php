<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

Route::post('register','AuthApiController@register');
Route::post('login','AuthApiController@login');
Route::post('tambahlaporan/{id}','PelaporanApiController@CreateLaporanJalan');
Route::get('lihatlaporan/{id}','PelaporanApiController@ReadLaporanJalan');
Route::get('data','AuthApiController@data');
Route::get('lokasi','PelaporanController@Lokasi');
