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

Route::get('/index', function () {return view('index');});
Route::get('customer/index','CustomerController@index');
Route::get('customer/add','CustomerController@add');
Route::post('customer/add','CustomerController@create');
Route::get('memo/index','MemoController@index');
Route::post('memo/add','MemoController@create');
Route::get('memo/add','MemoController@add');

