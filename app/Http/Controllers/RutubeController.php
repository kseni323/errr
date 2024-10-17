<?php
namespace App\Http\Controllers;
use App\Models\RutubeVideo;
use App\Models\RutubePlaylist;
use App\Models\YouTubeVideo;
class RutubeController extends Controller
{
    public function showRutubePage()
    {
        $videos = RutubeVideo::all();
        $playlists = RutubePlaylist::all();
        return view('rutube', compact('videos', 'playlists'));
    }
}