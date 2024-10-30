<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RutubeVideo;
use App\Models\RutubePlaylist;

class RutubeController extends Controller
{
    public function showRutubePage()
    {
        $videos = RutubeVideo::all();
        $playlists = RutubePlaylist::all();
        return view('Rutube', compact('videos', 'playlists'));
    }
}
