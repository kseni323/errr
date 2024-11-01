<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Канал</title>
    <link rel="icon" href="{{asset ('image/ава.png')}}">
    <!-- Подключение CSS файла -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/linksmenu.css')}}">
    <link rel="stylesheet" href="{{asset('css/playlist.css')}}">
    <link href="dist/hamburgers.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
 <!-- Подключаем header -->
 @include('partials.header')

    <section id="playlists">
        <div class="container">
            <!-- Подключаем menu -->
 @include('partials.menu')
 
            <h2>Плейлисты</h2>
            <ul class="playlist-list">
        @foreach ($playlists as $playlist)
            <span class="txt"><li><a href="{{ $playlist->url }}">{{ $playlist->name }}</a></li></span>
        @endforeach
    </ul>


     <!-- Подключаем footer -->
 @include('partials.footer')

<!-- JavaScript для выпадающего меню -->
<script type="text/javascript" src="js/menu.js"></script>
     
</body>
</html>
