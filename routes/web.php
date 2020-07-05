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
    return view('index');
});

Route::get('/artikel', 'ArtikelController@index');
Route::get('/artikel/create','ArtikelController@form_create');
Route::post('/artikel','ArtikelController@store');
Route::get('/artikel/{article_id}','ArtikelController@show_by_id');
Route::get('/artikel/{article_id}/edit','ArtikelController@form_edit');
Route::put('/artikel/{article_id}','ArtikelController@update');
Route::delete('/artikel/{article_id}','ArtikelController@destroy');
