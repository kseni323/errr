<?php
use Illuminate\Support\Facades\Route;
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


