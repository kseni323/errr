

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
    <link rel="stylesheet" href="css/rutube.css">
    <link href="dist/hamburgers.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

 <!-- Подключаем header -->
 @include('partials.header')
        <div class="containerrutube">
             <!-- Подключаем header -->
 @include('partials.menu')
 <section id="videosrutube">
    <div class="containerrutube">
        @include('partials.menu')
        <h1>Rutube</h1>
        <div class="video-gridrut">
    @foreach ($videos as $video)
        <div class="video-itemrutube">
            <div class="video-placeholderrutube">
                <iframe width="300" height="150" src="{{ $video->iframe_src }}" frameBorder="0" allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                <h3><a href="{{ $video->url }}">{{ $video->title }}</a></h3>
            </div>
        </div>
    @endforeach
</div>

<div class="textpay">
    <h2>Плейлисты</h2>
    <ul class="playlist-listrut">
        @foreach ($playlists as $playlist)
            <span class="txt"><li><a href="{{ $playlist->url }}">{{ $playlist->name }}</a></li></span>
        @endforeach
    </ul>
</div>

    <!-- Подключаем footer -->
    @include('partials.footer')
<!-- JavaScript для выпадающего меню -->
 <script type="text/javascript" src="js/menu.js"></script>
</body>
</html>
</body>