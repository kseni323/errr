<?php

use App\Http\Controllers\Controller;
use App\Models\RutubeVideo;
use App\Models\RutubePlaylist;

class RutubeController extends Controller
{
    public function showRutubePage()
    {
        $videos = RutubeVideo::all();
        $playlists = RutubePlaylist::all();
        return view('rutube', compact('videos', 'playlists'));
    }
}