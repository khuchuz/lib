<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', 'App\Http\Controllers\BookController@index');
Route::get('/book/create', 'App\Http\Controllers\BookController@create');
Route::get('/book/edit', 'App\Http\Controllers\BookController@edit');
Route::get('/book/update', 'App\Http\Controllers\BookController@update');
Route::get('/book/delete', 'App\Http\Controllers\BookController@delete');