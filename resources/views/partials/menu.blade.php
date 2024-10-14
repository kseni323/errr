<!-- Выпадающее меню -->
<div class="container">
          <div id="dropdownMenu" class="dropdown-menu">
          <button class="close-button" onclick="toggleMenu()">X</button>
          <ul>
            <span class="txt"><li><a href="{{ url('/index') }}">Главная</a></li></span>
                <span class="txt"><li><a href="{{ url('/video') }}">Видео</a></li></span>
                <span class="txt"><li><a href="{{ url('/playlist') }}">Плейлисты</a></li></span>
                <span class="txt"><li><a href="{{ url('/TikTok') }}">TikTok</a></li></span>
                <span class="txt"><li><a href="{{ url('/Rutube') }}">Rutube</a></li></span>
                <span class="txt"><li><a href="{{ url('/about') }}">О канале</a></li></span>
                <span class="txt"><li><a href="{{ url('/avtor') }}">Об авторе</a></li></span>
                <span class="txt"><li><a href="/author">Отправка идеи</a></li></span>
            </ul>
        </div>
          </div>