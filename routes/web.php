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

Route::get('/yxhd', 'YxhdController@index');
Route::get('/yxhd/jqld/{bt}', 'YxhdController@jqld');
Route::get('/yxhd/{bt}','YxhdController@show');

Route::get('/wljl','WljlController@index');

Route::get('/dzfw','DzfwController@index');
Route::get('/dzfw/zwpx','DzfwController@index_zw');

Route::get('/zhfw', 'ZhjwController@index');
Route::get('/zhfw/{bt}', 'ZhjwController@show');

Route::get('/news', function (){
    return view('news.xxxq');
});

Route::get('/news/1', function (){
    return view('news.news1');
});

Route::get('/news/sort/{sort}','Admin\NewsController@show_by_sort');

Route::get('/{bt}', 'TestController@show');
Route::group(['prefix' => '/admin'], function () {
    Route::resource('news','Admin\NewsController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
