<?php

namespace App\Http\Controllers;
use App\Models\ChannelInfos;
use Illuminate\Http\Request;

class ChannelInfonsController extends Controller
{
    public function showChannel ()
    {$channelInfos = ChannelInfos::first();
        return view('index', compact('channelInfos'));
    }
}
