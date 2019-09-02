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

Route::get('/', 'PagesController@index');
Route::get('/plans', 'PagesController@plans');
Route::get('/download', 'PagesController@download');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
