<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about the channel', function () {
    return view('about the channel');
});
Route::get('/avtor', function () {
    return view('avtor');
});


