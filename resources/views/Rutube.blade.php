

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Молния official</title>
    <link rel="icon" href="{{asset ('image/ава.png')}}">
    <!-- Подключение CSS файла -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/linksmenu.css">
    <link href="dist/hamburgers.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

 <!-- Подключаем header -->
 @include('partials.header')


        <div class="containerin">
             <!-- Подключаем header -->
 @include('partials.menu')
 <section id="videos">
        <div class="container">
             <!-- Подключаем menu -->
 @include('partials.menu')
        <h1>Новые видео</h1>
        <div class="video-grid">
            <!-- Видео 1 -->
            <div class="video-item">
                <div class="video-placeholder">
                <iframe width="720" height="405" src="https://rutube.ru/play/embed/cc12dd4eda5677f89edc13e0a5578e83/" frameBorder="0" allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
            <div><h3>Как Объяснить Эту Доску С Препятствиями Другу В We Were Here Too #2</h3></div>

            <!-- Видео 2 -->
            <div class="video-item">
                <div class="video-placeholder">
                <iframe width="720" height="405" src="https://rutube.ru/play/embed/e7d1a445a0205bb549180eb4ea92a8b6/" frameBorder="0" allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
                <h3>КУПИЛ ЕЩЕ ОДИН СТЕЛЛАЖ ДЛЯ ТОВАРОВ В SUPERMARKET SIMULATOR</h3>
            </div>

            <!-- Видео 3 -->
            <div class="video-item">
                <div class="video-placeholder">
                <iframe width="720" height="405" src="https://rutube.ru/play/embed/2c29b57b3643e50ed7aeffed3a80a639/" frameBorder="0" allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                <h3>Сыграл На BackFire Все Рейтинговые Режимы В Rocket League</h3>
            </div>
        <!-- Блок популярных видео -->
        <h2>Плейлисты</h2>
            <ul class="playlist-list">
            <span class="txt"><li><a href="https://rutube.ru/plst/552488/">We Were Here</a></li></span>
            <span class="txt"><li><a href="https://rutube.ru/plst/427852/">Rocket League</a></li></span>
            <span class="txt"><li><a href="https://rutube.ru/plst/429416/">Supermarket Simulator</a></li></span>
                <!-- Добавление других плейлистов -->
            </ul>
        </div>

    </div>

     <!-- Подключаем footer -->
 @include('partials.footer')

<!-- JavaScript для выпадающего меню -->
 <script type="text/javascript" src="js/menu.js"></script>
     
    
</body>
</html>
</body>