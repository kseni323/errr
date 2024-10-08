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
            <h2>Новые видео</h2>
            <div class="video-grid">
                <!-- Пример видео -->
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/66CO-Z_stIk" frameborder="0" allowfullscreen></iframe>
                    <h3>Как Объяснить Другу Какие Доспехи у Рыцарей В We Were Here Too</h3>
                </div>
				<div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/S_WbUG_OwZs" frameborder="0" allowfullscreen></iframe>
                    <h3>ТЕПЕРЬ В МОЕМ МАГАЗИНЕ БОЛЬШЕ МЕСТА В SUPERMARKET SIMULATOR</h3>
                </div>
				<div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/dG_Xk73vo6k" frameborder="0" allowfullscreen></iframe>
                    <h3>КУПИЛ ЕЩЕ ОДИН СТЕЛЛАЖ ДЛЯ ТОВАРОВ В SUPERMARKET SIMULATOR</h3>
                </div>
				<div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/wq3MvJERDew" frameborder="0" allowfullscreen></iframe>
                    <h3>КАК ПРОЙТИ ЭТУ ПЕРЕПРЫЖКУ В ГОНКЕ ВОКРУГ СВЕТА В GTA ONLINE</h3>
                </div>
				<div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/r09kzHPXPnM" frameborder="0" allowfullscreen></iframe>
                    <h3>ПОРУГАЛСЯ С ДРУГОМ ИЗ-ЗА СПЕКТАКЛЯ В ИГРЕ WE WERE HERE???</h3>
                </div>
            </div>
        </div>
    </section>

     <!-- Подключаем footer -->
 @include('partials.footer')


    
</body>
</html>