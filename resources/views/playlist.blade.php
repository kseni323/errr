<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Канал</title>
    <link rel="icon" href="{{asset ('image/ава.png')}}">
    <!-- Подключение CSS файла -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/linksmenu.css">
    <link href="dist/hamburgers.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
 <!-- Подключаем header -->
 @include('partials.header')

    <section id="playlists">
        <div class="container">
            <h2>Плейлисты</h2>
            <ul class="playlist-list">
                <li><a href="https://www.youtube.com/playlist?list=PLDFZlnSCwXaQGNQsNaMEurV6y_uADzeNj">We Were Here</a></li>
                <li><a href="https://www.youtube.com/playlist?list=PLDFZlnSCwXaTp4l_yJX-cA2fcm4y4p6hD">CS2</a></li>
                <li><a href="https://www.youtube.com/playlist?list=PLDFZlnSCwXaTPeRsp2wKYu454tySFYFkh">Forza Horizon 5</a></li>
                <li><a href="https://www.youtube.com/playlist?list=PLDFZlnSCwXaQNQLaQ9iOrb2DTwk3-QBmC">Rocket League</a></li>
                <li><a href="https://www.youtube.com/playlist?list=PLDFZlnSCwXaTvPH6zdHg9p5BRRkCzUGW5">GTA ONLINE</a></li>
                <li><a href="https://www.youtube.com/playlist?list=PLDFZlnSCwXaT3kf3LKh3ImKTcmGfE4anM">Supermarket Simulator</a></li>
                <li><a href="https://www.youtube.com/playlist?list=PLDFZlnSCwXaSwsZy9TmkA-eJyDjZuPlzE">Car Mechanic Simulator 2021</a></li>
                <li><a href="https://www.youtube.com/playlist?list=PLDFZlnSCwXaR9K_sdusC44bD5vpZ5W1cf">SnowRunner</a></li>
                <li><a href="https://www.youtube.com/playlist?list=PLDFZlnSCwXaQ-yrLa4pOcsWe7Nl6A5-WY">Contraband Police</a></li>
                <li><a href="https://www.youtube.com/playlist?list=PLDFZlnSCwXaRZTETiar_ZJ_wFtRK7y88o">Black Russia</a></li>
                
                <!-- Добавление других плейлистов -->
            </ul>
        </div>
    </section>

     <!-- Подключаем footer -->
 @include('partials.footer')


</body>
</html>
