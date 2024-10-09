<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Молния official</title>
    <link rel="icon" href="{{asset ('image/ава.png')}}">
    <!-- Подключение CSS файла -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/linksmenu.css">
    <link rel="stylesheet" href="css/video.css">
    <link href="dist/hamburgers.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

 <!-- Подключаем header -->
 @include('partials.header')

    <section id="videos">
        <div class="container">
             <!-- Подключаем menu -->
 @include('partials.menu')
        <h1>Новые видео</h1>
        <div class="video-grid">
            <!-- Видео 1 -->
            <div class="video-item">
                <div class="video-placeholder">
                <iframe width="300" height="150" src="https://www.youtube.com/embed/ZdM5uvHrjbQ?si=PilNakuEfXYAAvIj" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <h3>Как Объяснить Эту Доску С Препятствиями Другу В We Were Here Too #2</h3>
            </div>

            <!-- Видео 2 -->
            <div class="video-item">
                <div class="video-placeholder">
                <iframe width="300" height="150" src="https://www.youtube.com/embed/7kmtTlJBOvg?si=EZC9vDwWDDF32Asz" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <h3>Сыграл На BackFire Все Рейтинговые Режимы В Rocket League</h3>
            </div>

            <!-- Видео 3 -->
            <div class="video-item">
                <div class="video-placeholder">
                <iframe width="300" height="150" src="https://www.youtube.com/embed/66CO-Z_stIk?si=pTXzA-1E-RuKXDym" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <h3>Как Объяснить Другу Какие Доспехи у Рыцарей В We Were Here Too</h3>
            </div>

            <!-- Видео 4 -->
            <div class="video-item">
                <div class="video-placeholder">
                <iframe width="300" height="150" src="https://www.youtube.com/embed/S_WbUG_OwZs?si=NoOxYUFarRdIQp3Q" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <h3>ТЕПЕРЬ В МОЕМ МАГАЗИНЕ БОЛЬШЕ МЕСТА В SUPERMARKET SIMULATOR</h3>
            </div>

            <!-- Видео 5 -->
            <div class="video-item">
                <div class="video-placeholder">
                <iframe width="300" height="150" src="https://www.youtube.com/embed/dG_Xk73vo6k?si=iyHoVw-QGYT-RP1K" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <h3>КУПИЛ ЕЩЕ ОДИН СТЕЛЛАЖ ДЛЯ ТОВАРОВ В SUPERMARKET SIMULATOR</h3>
            </div>

            <!-- Видео 6 -->
            <div class="video-item">
                <div class="video-placeholder">
                <iframe width="300" height="150" src="https://www.youtube.com/embed/wq3MvJERDew?si=ktXIjP00c50LXEA0" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <h3>КАК ПРОЙТИ ЭТУ ПЕРЕПРЫЖКУ В ГОНКЕ ВОКРУГ СВЕТА В GTA ONLINE</h3>
            </div>

            <!-- Видео 7 -->
            <div class="video-item">
                <div class="video-placeholder">
                <iframe width="300" height="150" src="https://www.youtube.com/embed/r09kzHPXPnM?si=DgRM0F84Owf9LTl1" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <h3>ПОРУГАЛСЯ С ДРУГОМ ИЗ-ЗА СПЕКТАКЛЯ В ИГРЕ WE WERE HERE??? #wewerehere</h3>
            </div>

            <!-- Видео 8 -->
            <div class="video-item">
                <div class="video-placeholder">
                <iframe width="300" height="150" src="https://www.youtube.com/embed/Rhb1l53rXEo?si=l4Fx2Xdvi6hT64PF" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <h3>Проходим гонку Вокруг Света В GTA ONLINE</h3>
            </div>

            <!-- Видео 9 -->
            <div class="video-item">
                <div class="video-placeholder">
                <iframe width="300" height="150" src="https://www.youtube.com/embed/bkTPiB2zIPk?si=GnQHqfYp4SZKhLLW" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <h3>Меня Позвали В Мою Первую Гонку В GTA ONLINE И Я Смог Выиграть?</h3>
            </div>

            <!-- Видео 10 -->
            <div class="video-item">
                <div class="video-placeholder">
                <iframe width="300" height="150" src="https://www.youtube.com/embed/TxRV07EyEtw?si=TNt5W5U7VWAAvNTY" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <h3>Будни На Работе Водолаза На Black Russia</h3>
            </div>

            <!-- Видео 11 -->
            <div class="video-item">
                <div class="video-placeholder">
                <iframe width="300" height="150" src="https://www.youtube.com/embed/ZY1LYjh7gLM?si=Vl-7aUTiQBBfuQPj" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <h3>Моя Первая Погоня В Contraband Police #2</h3>
            </div>

            <!-- Видео 12 -->
            <div class="video-item">
                <div class="video-placeholder">
                <iframe width="300" height="" src="https://www.youtube.com/embed/lAJ0dn4xiTI?si=-Ftu6lqw8zDNzMKD" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <h3>Сколько Можно Заработать За Час На Новой Работе Электрика На Black Russia</h3>
            </div>
        </div>
    </div>

        </div>
    </section>

     <!-- Подключаем footer -->
 @include('partials.footer')

<!-- JavaScript для выпадающего меню -->
<script type="text/javascript" src="js/menu.js"></script>
    
</body>
</html>