<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ChannelInfo;
use App\Models\LatestVideo;
use App\Models\PopularVideo;

class ChannelDataSeeder extends Seeder
{
    public function run ()
    {
    ChannelInfo::create([
        'title' => 'YouTube Молния official',
        'description' => 'Приветствую всех на моем канале! Меня зовут Максим, и я с удовольствием делюсь с вами своим игровым опытом уже более шести лет. 
        Мой YouTube-канал посвящен разнообразным играм — как компьютерным, так и мобильным. Здесь каждый геймер найдет что-то по душе, будь то соревновательные, 
        кооперативные или приключенческие игры. На моем канале вы сможете найти увлекательные и полезные ролики, охватывающие как популярные блокбастеры, так и 
        необычные игры, которые заслуживают внимания. В том числе вы увидите: Rocket League — динамичные матчи на скоростных автомобилях с элементами футбола; 
        GTA Online — прохождение различных гонок и скиллтестов; Серия игр We Were Here — кооперативные головоломки, где требуется команда для решения задач; и 
        еще множество других интересных игр, которые мы вместе исследуем и разберем.' // Текст с главной страницы
    ]);

    LatestVideo::create([
        'title' => 'Последнее видео',
        'url' => 'https://www.youtube.com/watch?v=YCCFdiZXLu0&t=1s',
        'iframe_src' => 'https://www.youtube.com/embed/YCCFdiZXLu0?si=EU6EfUFncSifppkF'
    ]);

    PopularVideo::create([
        'title' => 'Популярное видео 1',
        'url' => 'https://www.youtube.com/watch?v=eTCqc5pcgH4',
        'iframe_src' => 'https://www.youtube.com/embed/eTCqc5pcgH4?si=f73lQsW7SFQbN3_B'
    ]);
    PopularVideo::create([
        'title' => 'Популярное видео 2',
        'url' => 'https://www.youtube.com/watch?v=DlMsnytYa-0&t=3s',
        'iframe_src' => 'https://www.youtube.com/embed/DlMsnytYa-0?si=3pp79J816E37aWtz'
    ]);
    PopularVideo::create([
        'title' => 'Популярное видео 3',
        'url' => 'https://www.youtube.com/watch?v=hzzyjC7piow',
        'iframe_src' => 'https://www.youtube.com/embed/hzzyjC7piow?si=VoIt6UWhCcuNBXE-'
    ]);
    PopularVideo::create([
        'title' => 'Популярное видео 4',
        'url' => 'https://www.youtube.com/watch?v=dG_Xk73vo6k&t=1320s',
        'iframe_src' => 'https://www.youtube.com/embed/dG_Xk73vo6k?si=88YvQfTYFRj1Pi1B'
    ]);


    }
}