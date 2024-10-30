<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChannelInfo;
use App\Models\LatestVideo;
use App\Models\PopularVideo;
class ChannelInfosController extends Controller
{
    public function index()
    {
        $channelInfo = ChannelInfo::first();
        $latestVideo = LatestVideo::first();
        $popularVideos = PopularVideo::all();
        return view('index', compact('channelInfo', 'latestVideo', 'popularVideos'));
    }
}
