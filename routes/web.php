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
//     return view('welcome');
// });

// Route::get('file','FileController@create');
// Route::post('file','FileController@store');

// Route::get('saya','SayaController@saya');
// Route::post('upload','SayaController@upload')->name('upload');

Route::get('/file','FileController@index');
Route::post('save','FileController@save')->name('save');
Route::get('/displayfile','FileController@display')->name('display');
Route::get('/displaymultiplefile/{file_id}','FileController@displayfile')->name('displayfile');
