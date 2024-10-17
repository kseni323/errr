<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\YouTubePlaylist;
class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        YouTubePlaylist::create([
            'name' => 'We Were Here',
            'url' => 'https://www.youtube.com/playlist?list=PLDFZlnSCwXaQGNQsNaMEurV6y_uADzeNj'
        ]);
        YouTubePlaylist::create([
            'name' => 'CS2',
            'url' => 'https://www.youtube.com/playlist?list=PLDFZlnSCwXaTp4l_yJX-cA2fcm4y4p6hD'
        ]);
        YouTubePlaylist::create([
            'name' => 'Forza Horizon 5',
            'url' => 'https://www.youtube.com/playlist?list=PLDFZlnSCwXaTPeRsp2wKYu454tySFYFkh'
        ]);
        YouTubePlaylist::create([
            'name' => 'Rocket League',
            'url' => 'https://www.youtube.com/playlist?list=PLDFZlnSCwXaQNQLaQ9iOrb2DTwk3-QBmC'
        ]);
        YouTubePlaylist::create([
            'name' => 'GTA ONLINE',
            'url' => 'https://www.youtube.com/playlist?list=PLDFZlnSCwXaTvPH6zdHg9p5BRRkCzUGW5'
        ]);
        YouTubePlaylist::create([
            'name' => 'Supermarket Simulator',
            'url' => 'https://www.youtube.com/playlist?list=PLDFZlnSCwXaT3kf3LKh3ImKTcmGfE4anM'
        ]);
        YouTubePlaylist::create([
            'name' => 'Car Mechanic Simulator 2021',
            'url' => 'https://www.youtube.com/playlist?list=PLDFZlnSCwXaSwsZy9TmkA-eJyDjZuPlzE'
        ]);
        YouTubePlaylist::create([
            'name' => 'SnowRunner',
            'url' => 'https://www.youtube.com/playlist?list=PLDFZlnSCwXaR9K_sdusC44bD5vpZ5W1cf'
        ]);
        YouTubePlaylist::create([
            'name' => 'Contraband Police',
            'url' => 'https://www.youtube.com/playlist?list=PLDFZlnSCwXaQ-yrLa4pOcsWe7Nl6A5-WY'
        ]);
        YouTubePlaylist::create([
            'name' => 'Black Russia',
            'url' => 'https://www.youtube.com/playlist?list=PLDFZlnSCwXaRZTETiar_ZJ_wFtRK7y88o'
        ]);
        YouTubePlaylist::create([
            'name' => 'Сколько можно заработать на работе... на Black Russia',
            'url' => 'https://www.youtube.com/playlist?list=PLDFZlnSCwXaS1vhudpZMNelpiMdrfwk17'
        ]);
        YouTubePlaylist::create([
            'name' => 'Forza Horizon 5',
            'url' => 'https://www.youtube.com/playlist?list=PLDFZlnSCwXaTPeRsp2wKYu454tySFYFkh'
        ]);
        YouTubePlaylist::create([
            'name' => 'Барвиха РП',
            'url' => 'https://www.youtube.com/playlist?list=PLDFZlnSCwXaQ0vprWqcAxbDhvHbWOYPHR'
        ]);
        YouTubePlaylist::create([
            'name' => 'Путь до бизнеса на Black Russia',
            'url' => 'https://www.youtube.com/playlist?list=PLDFZlnSCwXaRGBHY7Ig20CceWsWV-cnrY'
        ]);
         YouTubePlaylist::create([
            'name' => 'Scrap mechanic на андроид',
            'url' => 'https://www.youtube.com/playlist?list=PLDFZlnSCwXaTfSY1xNSj2DKrlNvfLQZQc'
        ]);
    }
    }

