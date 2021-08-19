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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos/index','ProductosController@index');
Route::get('/productos/create','ProductosController@create');
Route::get('/productos/edit','ProductosController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
