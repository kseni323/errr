<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutubeController;



Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/video', function () {
    return view('video');
});
Route::get('/playlist', function () {
    return view('playlist');
});
Route::get('/TikTok', function () {
    return view('TikTok');
});
/*Route::get('/rutube', function () {
    return view('rutube');
});*/
Route::get('/about the channel', function () {
    return view('about the channel');
});
Route::get('/avtor', function () {
    return view('avtor');
});


Route::get('/rutube', [RutubeController::class, 'showRutubePage']);



/*Route::get('/', 'App\Http\Controllers\TestController@index');
Route::get('/video', 'App\Http\Controllers\TestController@video');
Route::get('/playlist', 'App\Http\Controllers\TestController@playlist');
Route::get('/TikTok', 'App\Http\Controllers\TestController@TikTok');
Route::get('/Rutube', 'App\Http\Controllers\TestController@Rutube');
Route::get('/about', 'App\Http\Controllers\TestController@about');
Route::get('/avtor', 'App\Http\Controllers\TestController@avtor');*/
