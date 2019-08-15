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


Route::get('/', 'HomeController@index');
Route::get('/client', 'PagesController@index');
Route::get('/client/home', 'PagesController@home');
Route::get('/client/mempelai', 'PagesController@mempelai');
Route::get('/client/acara', 'PagesController@acara');
Route::get('/client/galeri', 'PagesController@galeri');
Route::get('/client/lokasi', 'PagesController@lokasi');
Route::get('/client/ucapan', 'PagesController@ucapan');
Route::post('/client/ucapan', 'PagesController@create');
