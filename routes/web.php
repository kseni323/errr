<?php

use Illuminate\Support\Facades\Route;


Route::get('/index', 'App\Http\Controllers\TestController@index');
Route::get('/video', 'App\Http\Controllers\TestController@video');
Route::get('/playlist', 'App\Http\Controllers\TestController@playlist');
Route::get('/TikTok', 'App\Http\Controllers\TestController@TikTok');
Route::get('/Rutube', 'App\Http\Controllers\TestController@Rutube');
Route::get('/about', 'App\Http\Controllers\TestController@about');
Route::get('/avtor', 'App\Http\Controllers\TestController@avtor');
