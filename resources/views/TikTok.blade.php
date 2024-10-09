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
    <link rel="stylesheet" href="css/tiktok.css">
    <link href="dist/hamburgers.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

 <!-- Подключаем header -->
 @include('partials.header')
        <div class="container">
             <!-- Подключаем header -->
 @include('partials.menu')
        <!-- Основная часть: О канале и Последнее видео -->
        <section class="main-content">
            <div class="about-channel1">
                <h2>О TikTok</h2>
                <h3></h3>
            </div>
            <div class="latest-video1">
                <h2>Последнее видео</h2>
                <!-- Вставка видео через iframe -->
                <div class="video-container1">
                <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@molniyoff/video/7423833302429158674" data-video-id="7423833302429158674" style="max-width: 605px;min-width: 325px;">
            <section>
                <a target="_blank" title="@molniyoff" href="https://www.tiktok.com/@molniyoff?refer=embed">@molniyoff</a> КОГДА ДРУГ УСТАЛ ТЕБЯ ВЕЗДЕ ЖДАТЬ...
            </section>
        </blockquote>
        
            </div>
            </div>
        </section>

        <!-- Блок популярных видео -->
        <section class="popular-videos1">
            <h2>Популярные видео</h2>
            <div class="videos-grid1">
                <div class="video-item1"> 

                </div>
                <div class="video-item1"> 
              
                </div>
                <div class="video-item1"> 
         
                </div>
                <div class="video-item1"> 
               
                </div>
            </div>
        </section>
    </div>

    <section id="videos">
        <div class="container">
        <h1>Новые видео</h1>
        <div class="video-grid1">
            <!-- Видео 1 -->
            <div class="video-item1">
                <div class="video-placeholder1">
            
                </div>
                <h3></h3>
            </div>

            <!-- Видео 2 -->
            <div class="video-item1">
                <div class="video-placeholder1">
              
                </div>
                <h3></h3>
            </div>

            <!-- Видео 3 -->
            <div class="video-item1">
                <div class="video-placeholder1">
              
                </div>
                <h3></h3>
            </div>

            <!-- Видео 4 -->
            <div class="video-item1">
                <div class="video-placeholder1">
             
                </div>
                <h3></h3>
            </div>

            <!-- Видео 5 -->
            <div class="video-item1">
                <div class="video-placeholder1">
                
                </div>
                <h3></h3>
            </div>

            <!-- Видео 6 -->
            <div class="video-item1">
                <div class="video-placeholder1">
               
                </div>
                <h3></h3>
            </div>

            <!-- Видео 7 -->
            <div class="video-item1">
                <div class="video-placeholder1">
                
                </div>
                <h3></h3>
            </div>

            <!-- Видео 8 -->
            <div class="video-item1">
                <div class="video-placeholder1">
               
                </div>
                <h3></h3>
            </div>

            <!-- Видео 9 -->
            <div class="video-item1">
                <div class="video-placeholder1">
                
                </div>
                <h3></h3>
            </div>

            <!-- Видео 10 -->
            <div class="video-item1">
                <div class="video-placeholder1">
               
                </div>
                <h3></h3>
            </div>

            <!-- Видео 11 -->
            <div class="video-item1">
                <div class="video-placeholder1">
                
                </div>
                <h3></h3>
            </div>

            <!-- Видео 12 -->
            <div class="video-item1">
                <div class="video-placeholder1">
               
                </div>
                <h3></h3>
            </div>
        </div>
    </div>

        </div>
    </section>



     <!-- Подключаем footer -->
 @include('partials.footer')

<!-- JavaScript для выпадающего меню -->
 <script type="text/javascript" src="js/menu.js"></script>
 <script async src="https://www.tiktok.com/embed.js"></script>
     
    
</body>
</html>