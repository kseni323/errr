<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RutubeVideo;
use App\Models\RutubePlaylist;

class RutubeSeeder extends Seeder
{
    public function run()
    {
        RutubeVideo::create([
            'title' => 'Как Объяснить Эту Доску С Препятствиями Другу В We Were Here Too #2',
            'url' => 'https://rutube.ru/video/cc12dd4eda5677f89edc13e0a5578e83/',
            'iframe_src' => 'https://rutube.ru/play/embed/cc12dd4eda5677f89edc13e0a5578e83/'
        ]);
        RutubeVideo::create([
            'title' => 'КУПИЛ ЕЩЕ ОДИН СТЕЛЛАЖ ДЛЯ ТОВАРОВ В SUPERMARKET SIMULATOR',
            'url' => 'https://rutube.ru/video/e7d1a445a0205bb549180eb4ea92a8b6/',
            'iframe_src' => 'https://rutube.ru/play/embed/e7d1a445a0205bb549180eb4ea92a8b6/'
        ]);
        RutubeVideo::create([
            'title' => 'Сыграл На BackFire Все Рейтинговые Режимы В Rocket League',
            'url' => 'https://rutube.ru/video/2c29b57b3643e50ed7aeffed3a80a639/',
            'iframe_src' => 'https://rutube.ru/play/embed/2c29b57b3643e50ed7aeffed3a80a639/'
        ]);

        RutubePlaylist::create([
            'name' => 'We Were Here',
            'url' => 'https://rutube.ru/plst/552488/'
        ]);
        RutubePlaylist::create([
            'name' => 'Rocket League',
            'url' => 'https://rutube.ru/plst/427852/'
        ]);
        RutubePlaylist::create([
            'name' => 'Supermarket Simulator',
            'url' => 'https://rutube.ru/plst/429416/'
        ]);
    }
}
