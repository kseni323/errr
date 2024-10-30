<?php

namespace App\Http\Controllers;
use App\Models\YoutubeVideo;
use Illuminate\Http\Request;

class YouTubeController extends Controller
{
    public function showYouTubePage()
    {
        $videos = YouTubeVideo::all();
        return view('video', compact('videos'));
    }
}
