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


        <div class="container-index">
             <!-- Подключаем header -->
 @include('partials.menu')
          
        <!-- Основная часть: О канале и Последнее видео -->
        <section class="main-content">
            <div class="about-channel">
                <h2>О канале</h2>
                <h3>Приветствую всех на моем канале! Меня зовут Максим, и я с удовольствием делюсь с вами своим игровым опытом уже более шести лет. 
                    Мой YouTube-канал посвящен разнообразным играм — как компьютерным, так и мобильным. Здесь каждый геймер найдет что-то по душе, 
                    будь то соревновательные, кооперативные или приключенческие игры. На моем канале вы сможете найти увлекательные и полезные ролики, 
                    охватывающие как популярные блокбастеры, так и необычные игры, которые заслуживают внимания. В том числе вы увидите:
                    Rocket League — динамичные матчи на скоростных автомобилях с элементами футбола;
                    GTA Online — прохождение различных гонок и скиллтестов;
                    Серия игр We Were Here — кооперативные головоломки, где требуется команда для решения задач;
                    и еще множество других интересных игр, которые мы вместе исследуем и разберем.</h3>
            </div>
            <div class="latest-video">
                <h2>Последнее видео</h2>
                <!-- Вставка видео через iframe -->
                <div class="video-container">
                <iframe src="https://www.youtube.com/embed/ZdM5uvHrjbQ?si=V0SxMx7HXNK4aJ7k" width="560" height="500"
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
                <iframe width="300" height="130" src="https://www.youtube.com/embed/eTCqc5pcgH4?si=f73lQsW7SFQbN3_B" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="video-item"> 
                <iframe width="300" height="130" src="https://www.youtube.com/embed/DlMsnytYa-0?si=eTtZ_J3mF4r1mMWH" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="video-item"> 
                <iframe width="300" height="130" src="https://www.youtube.com/embed/hzzyjC7piow?si=aadn2r7q6Lr_zkQs" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="video-item"> 
                <iframe width="300" height="130" src="https://www.youtube.com/embed/dG_Xk73vo6k?si=vTMqJtOjUlqoLwgw" 
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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