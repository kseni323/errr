<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YouTubeVideo;
class YTController extends Controller
{
    public function showYouTubePage()
    {
        $videos = YouTubeVideo::all();
        return view('video', compact('videos'));
    }
}
