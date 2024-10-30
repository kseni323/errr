<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutubeController;
use App\Http\Controllers\PlayListController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\TTVideoController;
use App\Http\Controllers\YouTubeController;
use TCG\Voyager\Facades\Voyager;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/index', function () {
    return view('index');
});

/*Route::get('/about', function () {
    return view('about');
});
Route::get('/avtor', function () {
    return view('avtor');
});*/
//test


// Маршрут для отображения формы
Route::get('/sending-idea', function () {
    return view('sending an idea');
})->name('sending.idea');

// Маршрут для отправки формы
Route::get('/rutube', [RutubeController::class, 'showRutubePage']);
Route::post('/sending-idea', [IdeaController::class, 'sendIdea'])->name('send.idea');
Route::get('/video', [YouTubeController::class, 'showYouTubePage']);
Route::get('/playlist', [PlayListController::class, 'showPlaylistPage']);
Route::get('/tiktok', [TTVideoController::class, 'showTTVideoPage']);

//test push



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
