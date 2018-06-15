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

Route::get('/books', 'BookController@index');
Route::get('/books/new', 'BookController@create');
Route::post('/books', 'BookController@store');
Route::get('/books/{id}/edit', 'BookController@edit');
Route::post('/books/{id}', 'BookController@update');
Route::get('/books/{id}', 'BookController@show');
// - GET /books            -> index
// - GET /books/new        -> create
// - POST /books           -> store
// - GET /books/{$id}/edit -> edit
// - POST /books/{id}      -> update


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
