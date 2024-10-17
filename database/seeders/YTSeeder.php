<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\YouTubeVideo;
class YTSeeder extends Seeder
{
    public function run()
    { YouTubeVideo::create(['title' => 'Как Объяснить Эту Доску С Препятствиями Другу В We Were Here Too #2', 'url' => 'https://www.youtube.com/watch?v=ZdM5uvHrjbQ',
        'iframe_src' => 'https://www.youtube.com/embed/ZdM5uvHrjbQ', ]);
        YouTubeVideo::create([ 'title' => 'Сыграл На BackFire Все Рейтинговые Режимы В Rocket League', 'url' => 'https://www.youtube.com/watch?v=7kmtTlJBOvg',
            'iframe_src' => 'https://www.youtube.com/embed/7kmtTlJBOvg', ]);
        YouTubeVideo::create([ 'title' => 'Как Объяснить Другу Какие Доспехи у Рыцарей В We Were Here Too', 'url' => 'https://www.youtube.com/watch?v=66CO-Z_stIk&t=2s',
                        'iframe_src' => 'https://www.youtube.com/embed/66CO-Z_stIk?si=S0brucFCACijIRb3', ]);
        YouTubeVideo::create([ 'title' => 'ТЕПЕРЬ В МОЕМ МАГАЗИНЕ БОЛЬШЕ МЕСТА В SUPERMARKET SIMULATOR', 'url' => 'https://www.youtube.com/watch?v=S_WbUG_OwZs',
            'iframe_src' => 'https://www.youtube.com/embed/S_WbUG_OwZs?si=XgYDIYriq48Vet1d', ]); 
        YouTubeVideo::create([ 'title' => 'КУПИЛ ЕЩЕ ОДИН СТЕЛЛАЖ ДЛЯ ТОВАРОВ В SUPERMARKET SIMULATOR', 'url' => 'https://www.youtube.com/watch?v=dG_Xk73vo6k',
            'iframe_src' => 'https://www.youtube.com/embed/dG_Xk73vo6k?si=GsSUshPd9XL_1p61', ]);
        YouTubeVideo::create([ 'title' => 'КАК ПРОЙТИ ЭТУ ПЕРЕПРЫЖКУ В ГОНКЕ ВОКРУГ СВЕТА В GTA ONLINE', 'url' => 'https://www.youtube.com/watch?v=wq3MvJERDew',
            'iframe_src' => 'https://www.youtube.com/embed/wq3MvJERDew?si=MZzlYn_H6adJsj-o', ]); 
        YouTubeVideo::create([ 'title' => 'ПОРУГАЛСЯ С ДРУГОМ ИЗ-ЗА СПЕКТАКЛЯ В ИГРЕ WE WERE HERE???', 'url' => 'https://www.youtube.com/watch?v=r09kzHPXPnM',
            'iframe_src' => 'https://www.youtube.com/embed/r09kzHPXPnM?si=Rj-RRpBMugfWoCMy', ]);
        YouTubeVideo::create([ 'title' => 'Проходим гонку Вокруг Света В GTA ONLINE', 'url' => 'https://www.youtube.com/watch?v=Rhb1l53rXEo',
            'iframe_src' => 'https://www.youtube.com/embed/Rhb1l53rXEo?si=gdu2F3HXxyFWVYuT',]); 
        YouTubeVideo::create([ 'title' => 'Меня Позвали В Мою Первую Гонку В GTA ONLINE И Я Смог Выиграть?', 'url' => 'https://www.youtube.com/watch?v=bkTPiB2zIPk',
            'iframe_src' => 'https://www.youtube.com/embed/bkTPiB2zIPk?si=g3cetVIHMiWYdmqC',
        ]);
        YouTubeVideo::create([ 'title' => 'Будни На Работе Водолаза На Black Russia', 'url' => 'https://www.youtube.com/watch?v=TxRV07EyEtw',
            'iframe_src' => 'https://www.youtube.com/embed/TxRV07EyEtw?si=ldia9CcZdzLNEEzL',
        ]); 
        YouTubeVideo::create([ 'title' => 'Моя Первая Погоня В Contraband Police #2', 'url' => 'https://www.youtube.com/watch?v=ZY1LYjh7gLM',
            'iframe_src' => 'https://www.youtube.com/embed/ZY1LYjh7gLM?si=l9ut1g-5Can-U-gO',
        ]);
        YouTubeVideo::create([ 'title' => 'Сколько Можно Заработать За Час На Новой Работе Электрика На Black Russia', 'url' => 'https://www.youtube.com/watch?v=lAJ0dn4xiTI',
            'iframe_src' => 'https://www.youtube.com/embed/lAJ0dn4xiTI?si=30W1CGZI40l_KbwW',
            ]); }
}