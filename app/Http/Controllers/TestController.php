<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index ($index) {
   
        return view ('index');
    }
    public function video ($video) {
        return view ('video');
    }
    public function playlist ($playlist) {
        return view ('playlist');
    }
    public function TikTok ($TikTok) {
        return view ('TikTok');
    }
    public function Rutube ($Rutube) {
        return view ('Rutube');
    }
    public function about ($about) {
        return view ('about');
    }
    public function avtor ($avtor) {
        return view ('avtor');
    }

}
