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

// Route::get('/', function () {
//     return view('main');
// });



Route::get('/','MainController@index');

Route::get('/bkk','BkkController@index');


Route::get('/bkk/manage-lowongan','BkkController@lowongan');
Route::get('/bkk/statistik','BkkController@statistik'); 
Route::get('/bkk/profile','BkkController@profile');
Route::get('/bkk/pengaturan','BkkController@pengaturan');

