<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/home', function () {
    return view('home');
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

Route::get('/Rutube', function () {
    return view('Rutube');
});

Route::get('/about the channel', function () {
    return view('about the channel');
});
Route::get('/avtor', function () {
    return view('avtor');
});


