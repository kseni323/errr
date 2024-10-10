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
            <div class="about-channel">
                <h2>О TikTok</h2>
                <h3>Привет всем любителям игр! Я рад наконец-то запустить свой TikTok! На моем TikTok-аккаунте будут публиковаться 
                    нарезки различных моментов из игр — удачные, неудачные, смешные, а также моменты, которые не всегда попадают в 
                    длинные видео на YouTube. Я долго обдумывал создание аккаунта в TikTok, и в сентябре 2024 года наконец решился 
                    загрузить свой первый короткий ролик. Здесь вы найдете видео по разным играм и темам, от динамичных матчей в 
                    Rocket League до неожиданных ситуаций в других играх. Короткие видео позволят вам быстрее погружаться в игровой 
                    процесс и получать яркие эмоции за считанные секунды.</h3>
            </div>
            <div class="latest-video1">
                <h2>Последнее видео</h2>
                <!-- Вставка видео через iframe -->
                <div class="video-container1">
                <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@molniyoff/video/7424208327350947079" data-video-id="7424208327350947079" style="max-width: 605px;min-width: 325px;"><section>
        <a target="_blank" title="@molniyoff" href="https://www.tiktok.com/@molniyoff?refer=embed">@molniyoff</a> КОГДА МЯЧ ХОРОШО ОТСКОЧИЛ ОТ СТЕНЫ В ROCKET LEAGUE #rocketleague #rocketleaguefunny #rocketleagueclipss #rocketleaguevideo #rocketleaguevideos #recomendation #rocketleaguegoals #rocketleagueclips #rocketleague_community
        <a title="рекомендации" target="_blank" href="https://www.tiktok.com/tag/%D1%80%D0%B5%D0%BA%D0%BE%D0%BC%D0%B5%D0%BD%D0%B4%D0%B0%D1%86%D0%B8%D0%B8?refer=embed">#рекомендации</a>
        <a title="recomendatios" target="_blank" href="https://www.tiktok.com/tag/recomendatios?refer=embed">#recomendatios</a>
        <a target="_blank" title="♬ оригинальный звук  - molniyoff" href="https://www.tiktok.com/music/оригинальный-звук-molniyoff-7424208354127465233?refer=embed">♬ оригинальный звук  - molniyoff</a>
    </section>
</blockquote>
        
            </div>
            </div>
        </section>

        <!-- Блок популярных видео -->
        <section class="popular-videos">
            <h2>Популярные видео</h2>
            <div class="videos-grid">
                <div class="video-item"> 

                </div>
                <div class="video-item"> 
              
                </div>
                <div class="video-item"> 
         
                </div>
                <div class="video-item"> 
               
                </div>
            </div>
        </section>
    </div>

    <section id="videos">
        <div class="container">
        <h1>Новые видео</h1>
        <div class="video-grid">
            <!-- Видео 1 -->
            <div class="video-item">
                <div class="video-placeholder">
            
                </div>
                <h3></h3>
            </div>

            <!-- Видео 2 -->
            <div class="video-item">
                <div class="video-placeholder">
              
                </div>
                <h3></h3>
            </div>

            <!-- Видео 3 -->
            <div class="video-item">
                <div class="video-placeholder">
              
                </div>
                <h3></h3>
            </div>

            <!-- Видео 4 -->
            <div class="video-item">
                <div class="video-placeholder">
             
                </div>
                <h3></h3>
            </div>

            <!-- Видео 5 -->
            <div class="video-item">
                <div class="video-placeholder">
                
                </div>
                <h3></h3>
            </div>

            <!-- Видео 6 -->
            <div class="video-item">
                <div class="video-placeholder">
               
                </div>
                <h3></h3>
            </div>

            <!-- Видео 7 -->
            <div class="video-item">
                <div class="video-placeholder">
                
                </div>
                <h3></h3>
            </div>

            <!-- Видео 8 -->
            <div class="video-item">
                <div class="video-placeholder">
               
                </div>
                <h3></h3>
            </div>

            <!-- Видео 9 -->
            <div class="video-item">
                <div class="video-placeholder">
                
                </div>
                <h3></h3>
            </div>

            <!-- Видео 10 -->
            <div class="video-item">
                <div class="video-placeholder">
               
                </div>
                <h3></h3>
            </div>

            <!-- Видео 11 -->
            <div class="video-item">
                <div class="video-placeholder">
                
                </div>
                <h3></h3>
            </div>

            <!-- Видео 12 -->
            <div class="video-item">
                <div class="video-placeholder">
               
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