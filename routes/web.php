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

Route::get('/', 'TestController@index');


Route::get('/wygl', 'WyglController@index');
Route::get('/wygl/{bt}', 'WyglController@show');

Route::get('/zsyy', 'ZsyyController@index');
Route::get('/zsyy/{bt}', 'ZsyyController@show');

Route::get('/{bt}', 'TestController@show');
