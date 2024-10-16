<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
        public function index()
        {
            $popularVideos = Video::where('is_popular', true)->get();
            $latestVideo = Video::orderBy('upload', 'desc')->first();
    
            return view('index', compact('popularVideos', 'latestVideo'));
        }
    }
