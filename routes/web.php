<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutubeController;
use App\Http\Controllers\Rutube2Controller;
use App\Http\Controllers\YouTubeVideoController;
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
/*Route::get('/video', function () {
    return view('video');
});*/
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


Route::get('/video', [Rutube2Controller::class, 'showYTPage']);
Route::get('/rutube', [RutubeController::class, 'showRutubePage']);


