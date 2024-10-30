<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YoutubeVideo;

class YoutubeVideoController extends Controller
{
    public function showYouTubePage (){
        $videos = YoutubeVideo::all();
        return view ('video', compact ('videos'));
    }
}
