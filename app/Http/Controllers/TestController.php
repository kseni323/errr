<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index () {
        return view ('index');
    }
    public function video () {
        return view ('video');
    }
    public function playlist () {
        return view ('playlist');
    }
    public function TikTok () {
        return view ('TikTok');
    }
    public function Rutube () {
        return view ('Rutube');
    }
    public function about () {
        return view ('about');
    }
    public function avtor () {
        return view ('avtor');
    }
   
}
