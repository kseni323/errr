<?php

namespace App\Http\Controllers;
use App\Models\TikTokVideo;

use Illuminate\Http\Request;

class TTVideoController extends Controller
{
    public function showTTVideoPage()
    {
        $videos = TikTokVideo::all();
        return view('tiktok', compact('videos'));
    }
}
