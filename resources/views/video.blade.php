<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Молния official</title>
    <link rel="icon" href="{{asset ('image/ава.png')}}">
    <!-- Подключение CSS файла -->
    <link rel="stylesheet" href="{{asset ('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/linksmenu.css')}}">
    <link rel="stylesheet" href="{{asset('css/video.css')}}">
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
    @foreach ($videos as $video)
        <div class="video-item">
            <div class="video-placeholder">
                <iframe width="300" height="150" src="{{ $video->iframe_src }}" frameBorder="0" allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                <h3><a href="{{ $video->url }}">{{ $video->title }}</a></h3>
            </div>
        </div>
    @endforeach
</div>
<!--Тест коммитаv2-->

        </div>
    </section>

     <!-- Подключаем footer -->
 @include('partials.footer')

<!-- JavaScript для выпадающего меню -->
<script type="text/javascript" src="{{asset ('js/menu.js')}}"></script>
    
</body>
</html>