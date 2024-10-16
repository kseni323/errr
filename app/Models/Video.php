<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video_youtube';

    protected $fillable = [
        'name_video', 
        'video_description', 
        'link_to_the_video', 
        'upload', 
        'idea_id', 
        'video_TikTok_id'
    ];
    public $timestamps = false;
}
