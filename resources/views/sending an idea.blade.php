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
    <link rel="stylesheet" href="{{asset('css/idea.css')}}">
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
 
            
  <!-- Форма для предложений -->
  <main>
        <section class="form-section">
            <h2>Заполните форму для отправки идеи</h2>
    <form action="{{ route('send.idea') }}" method="POST">
    @csrf
    <!-- Поля формы -->
    <label for="name">Имя*</label>
    <input type="text" id="name" name="name" placeholder="Введите ваше имя" required>

    <label for="email">Почта*</label>
    <input type="email" id="email" name="email" placeholder="Введите вашу почту" required>

    <label for="idea">Ваша идея</label>
    <textarea id="idea" name="idea" placeholder="Опишите вашу идею" rows="5" required></textarea>

    <button type="submit">Отправить</button>
</form>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
     <!-- Подключаем footer -->
 @include('partials.footer')

<!-- JavaScript для выпадающего меню -->
<script type="text/javascript" src="js/menu.js"></script>
     
</body>
</html>
