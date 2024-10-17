<?php
namespace App\Http\Controllers;
use App\Models\RutubeVideo;
use App\Models\RutubePlaylist;
use App\Models\YouTubeVideo;
class Rutube2Controller extends Controller
{
    public function showYTPage()
    {
        $videos = YouTubeVideo::all();
        return view('video', compact('videos'));
    }
}