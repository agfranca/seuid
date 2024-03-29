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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'CodeController@index')->name('home');
Route::get('/PDF/{code}', 'CodeController@pdf')->name('pdf');
Route::get('/relatorio', 'CodeController@relatorio')->name('relatorio');
