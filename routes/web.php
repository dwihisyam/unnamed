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
Route::get('/olivellputri', 'OlivellPutriController@index');
Route::get('/olivellputri/home', 'OlivellPutriController@home');
Route::get('/olivellputri/mempelai', 'OlivellPutriController@mempelai');
Route::get('/olivellputri/acara', 'OlivellPutriController@acara');
Route::get('/olivellputri/galeri', 'OlivellPutriController@galeri');
Route::get('/olivellputri/lokasi', 'OlivellPutriController@lokasi');
Route::get('/fogertyas', 'FogerTyasController@index');
Route::get('/fogertyas/home', 'FogerTyasController@home');
Route::get('/fogertyas/mempelai', 'FogerTyasController@mempelai');
Route::get('/fogertyas/acara', 'FogerTyasController@acara');
Route::get('/fogertyas/galeri', 'FogerTyasController@galeri');
Route::get('/fogertyas/lokasi', 'FogerTyasController@lokasi');
Route::get('/fogertyas/ucapan', 'FogerTyasController@ucapan');
Route::post('/fogertyas/ucapan', 'FogerTyasController@create');
