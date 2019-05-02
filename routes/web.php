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

Route::get('/', function () {return view('welcome');});

Route::get('customer/index','CustomerController@index');
Route::get('customer/create','CustomerController@create');
Route::post('customer/create','CustomerController@store');
Route::get('customer/show/{id}','CustomerController@show');
Route::get('customer/edit/{id}','CustomerController@edit');
Route::post('customer/edit/','CustomerController@update');
Route::get('customer/del/{id}','CustomerController@remove');

Route::get('memo/index','MemoController@index');
Route::post('memo/create','MemoController@store');
Route::get('memo/create/{id}','MemoController@create');
Route::get('memo/edit/{id}','MemoController@edit');
Route::post('memo/edit/','MemoController@update');
Route::get('memo/del/{id}','MemoController@delete');
Route::post('memo/del/','MemoController@remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
