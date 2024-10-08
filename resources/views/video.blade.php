<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Молния official</title>
    <!-- Подключение CSS файла -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/linksmenu.css">
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
            <!-- Первое видео -->
            @for ($i = 1; $i <= 12; $i++)
                <div class="video-item">
                <iframe width="300" height="150" src="https://www.youtube.com/embed/ZdM5uvHrjbQ?si=wRv1rAyJ0txPGwPU {{ $i }}" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h3>Как Объяснить Эту Доску С Препятствиями Другу В We Were Here Too #2 {{ $i }}</h3>
                </div>
            @endfor

            <!-- Второе видео -->
            @for ($i = 1; $i <= 12; $i++)
                <div class="video-item">
                <iframe width="300" height="150" src="https://www.youtube.com/embed/7kmtTlJBOvg?si=UjfVA0oz_9j_H_r8  {{ $i }}" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                     referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h3>Сыграл На BackFire Все Рейтинговые Режимы В Rocket League {{ $i }}</h3>
                </div>
            @endfor

        </div>
   

           
 
    </section>

     <!-- Подключаем footer -->
 @include('partials.footer')

<!-- JavaScript для выпадающего меню -->
<script type="text/javascript" src="js/menu.js"></script>
    
</body>
</html>