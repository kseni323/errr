<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YouTube;

class YoutubeVideoController extends Controller
{
    public function showYouTubePage (){
        $videos = YouTube::all();
        return view ('video', compact ('videos'));
    }
}
