<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TikTokVideo;

class TTVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
            TikTokVideo::create([
                'title' => 'Обманный Маневр В Rocket League',
                'url' => 'https://www.tiktok.com/@molniyoff/video/7425725133752421653',
                'iframe_src' => 'https://www.tiktok.com/embed.js'
            ]);
            TikTokVideo::create([
                'title' => 'КОГДА ОБЪЯСНЯЕШЬ ДРУГУ КАК ЕМУ ХОДИТЬ В ШАХМАТАХ В WE WERE HERE',
                'url' => 'https://www.tiktok.com/@molniyoff/video/7425351272854719760',
                'iframe_src' => 'https://www.tiktok.com/embed.js'
            ]);
            TikTokVideo::create([
                'title' => 'КОГДА НЕ ОЖИДАЛ ТАКОГО КИЛЛА ОТ СЕБЯ В CS2',
                'url' => 'https://www.tiktok.com/@molniyoff/video/7424935937009847570',
                'iframe_src' => 'https://www.tiktok.com/embed.js'
            ]);
            TikTokVideo::create([
                'title' => 'КОГДА МЯЧ ХОРОШО ОТСКОЧИЛ ОТ СТЕНЫ В ROCKET LEAGUE',
                'url' => 'https://www.tiktok.com/@molniyoff/video/7424208327350947079',
                'iframe_src' => 'https://www.tiktok.com/embed.js'
            ]);
            TikTokVideo::create([
                'title' => ' КОГДА ДРУГ УСТАЛ ТЕБЯ ВЕЗДЕ ЖДАТЬ, НО ВСЕ РАВНО ДАЕТ СОВЕТЫ НА ГОНКЕ В GTA ONLINE',
                'url' => 'https://www.tiktok.com/@molniyoff/video/7423833302429158674',
                'iframe_src' => 'https://www.tiktok.com/embed.js'
            ]);
            TikTokVideo::create([
                'title' => 'КОГДА ДРУГ СПРАШИВАЕТ КАК Я ПАДАЮ НА ПРУТИКАХ В GTA ONLINE',
                'url' => 'https://www.tiktok.com/@molniyoff/video/7423833302429158674',
                'iframe_src' => 'https://www.tiktok.com/embed.js'
            ]);
             TikTokVideo::create([
                'title' => 'GTA ONLINE',
                'url' => 'https://www.tiktok.com/@molniyoff/video/7420498230238055687',
                'iframe_src' => 'https://www.tiktok.com/embed.js'
            ]);
            TikTokVideo::create([
                'title' => 'Rocket League',
                'url' => 'https://www.tiktok.com/@molniyoff/video/7420137682807934226',
                'iframe_src' => 'https://www.tiktok.com/embed.js'
            ]);
            TikTokVideo::create([
                'title' => 'Rocket League',
                'url' => 'https://www.tiktok.com/@molniyoff/video/7419406537812151560',
                'iframe_src' => 'https://www.tiktok.com/embed.js'
            ]);
            TikTokVideo::create([
                'title' => 'Rocket League',
                'url' => 'https://www.tiktok.com/@molniyoff/video/7417774172966882580',
                'iframe_src' => 'https://www.tiktok.com/embed.js'
            ]);
            TikTokVideo::create([
                'title' => 'Forza Horizon 5',
                'url' => 'https://www.tiktok.com/@molniyoff/video/7417525684899253511',
                'iframe_src' => 'https://www.tiktok.com/embed.js'
            ]);
            TikTokVideo::create([
                'title' => '  Как Правильно Нужно Пришвартовываться К Причалу На Black Russia',
                'url' => 'https://www.tiktok.com/@molniyoff/video/7416025706649390343',
                'iframe_src' => 'https://www.tiktok.com/embed.js'
            ]);
        }
}
