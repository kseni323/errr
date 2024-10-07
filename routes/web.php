<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('index.blade.php', function () {
    return view('index');
});

Route::get('video.blade.php', function () {
    return view('video');
});

Route::get('playlist.blade.php', function () {
    return view('playlist');
});

Route::get('about the channel.blade.php', function () {
    return view('about the channel');
});
Route::get('avtor.blade.php', function () {
    return view('avtor');
});

