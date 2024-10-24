<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



use App\Http\Controllers\RutubeController;
use App\Http\Controllers\Rutube2Controller;
use App\Http\Controllers\PlayListController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\TTVideoController;
use App\Http\Controllers\YouTubeVideoController;
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});


/*Route::get('/about', function () {
    return view('about');
});
Route::get('/avtor', function () {
    return view('avtor');
});*/



// Маршрут для отображения формы
Route::get('/sending-idea', function () {
    return view('sending an idea');
})->name('sending.idea');

// Маршрут для отправки формы
Route::post('/sending-idea', [IdeaController::class, 'sendIdea'])->name('send.idea');
Route::get('/video', [Rutube2Controller::class, 'showYTPage']);
Route::get('/playlist', [PlayListController::class, 'showPlaylistPage']);
Route::get('/tiktok', [TTVideoController::class, 'showTTVideoPage']);
Route::get('/rutube', [RutubeController::class, 'showRutubePage']);
