<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Молния official</title>
    <!-- Подключение CSS файла -->
    <link rel="stylesheet" href="css/styles.css">
    <link href="dist/hamburgers.css" rel="stylesheet">
</head>
<body>

 <!-- Подключаем header -->
 @include('partials.header')


        <div class="container">
          <!-- Выпадающее меню -->
          <div class="container">
          <div id="dropdownMenu" class="dropdown-menu">
          <button class="close-button" onclick="toggleMenu()">X</button>
            <ul>
                <span class="txt"><li><a href="/index.php">Главная</a></li></span>
                <span class="txt"><li><a href="/videos">Видео</a></li></span>
                <span class="txt"><li><a href="/playlists">Плейлисты</a></li></span>
                <span class="txt"><li><a href="https://www.tiktok.com">TikTok</a></li></span>
                <span class="txt"><li><a href="https://rutube.ru">Rutube</a></li></span>
                <span class="txt"><li><a href="/about">О канале</a></li></span>
                <span class="txt"><li><a href="/author">Об авторе</a></li></span>
            </ul>
        </div>
          </div>

        <!-- Основная часть: О канале и Последнее видео -->
        <section class="main-content">
            <div class="about-channel">
                <h2>О канале</h2>
                <p>Краткое описание канала</p>
            </div>
            <div class="latest-video">
                <h2>Последнее видео</h2>
                <!-- Вставка видео через iframe -->
                <div class="video-container">
                <iframe width="540" height="300" src="https://www.youtube.com/embed/ZdM5uvHrjbQ?si=V0SxMx7HXNK4aJ7k" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <!-- Блок популярных видео -->
        <section class="popular-videos">
            <h2>Популярные видео</h2>
            <div class="videos-grid">
                <div class="video-item"> 
                    <img src="path-to-popular-video-thumbnail1" alt="Популярное видео 1">
                </div>
                <div class="video-item"> 
                    <img src="path-to-popular-video-thumbnail2" alt="Популярное видео 2">
                </div>
                <div class="video-item"> 
                    <img src="path-to-popular-video-thumbnail3" alt="Популярное видео 3">
                </div>
                <div class="video-item"> 
                    <img src="path-to-popular-video-thumbnail4" alt="Популярное видео 4">
                </div>
            </div>
        </section>

    </div>

     <!-- Подключаем footer -->
 @include('partials.footer')

<!-- JavaScript для выпадающего меню -->
 <script type="text/javascript" src="js/menu.js"></script>
     
    
</body>
</html>




</body>