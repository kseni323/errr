<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YouTubePlaylist;

class PlayListController extends Controller
{
    public function showPlaylistPage()
    {
        $playlists = YouTubePlaylist::all();
    
        return view('playlist', compact( 'playlists'));
    } 
}
