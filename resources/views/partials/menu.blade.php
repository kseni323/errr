<!-- Выпадающее меню -->
<div class="container">
          <div id="dropdownMenu" class="dropdown-menu">
          <button class="close-button" onclick="toggleMenu()">X</button>
          <ul>
            <span class="txt"><li><a href="{{ url('/index') }}">Главная</a></li></span>
                <span class="txt"><li><a href="{{ url('/video') }}">Видео</a></li></span>
                <span class="txt"><li><a href="{{ url('/playlist') }}">Плейлисты</a></li></span>
                <span class="txt"><li><a href="{{ url('/tiktok') }}">TikTok</a></li></span>
                <span class="txt"><li><a href="{{ url('/rutube') }}">Rutube</a></li></span>
                <!--<span class="txt"><li><a href="{{ url('/about') }}">О канале</a></li></span>
                <span class="txt"><li><a href="{{ url('/avtor') }}">Об авторе</a></li></span>-->
                <span class="txt"><li><a href="{{url('/sending-idea')}}">Отправка идеи</a></li></span>
                @auth
                <span class="txt"><li><a href="{{ route('profile.edit') }}" class="rounded-md px-3 py-2 text-black">Профиль</a></li></span>
                <span class="txt"><li>
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="rounded-md px-3 py-2 text-black">Выйти</button>
                    </form>
                </li></span>
            @else
                <span class="txt"><li><a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black">Вход</a></li></span>
                @if (Route::has('register'))
                    <span class="txt"><li><a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black">Регистрация</a></li></span>
                @endif
            @endauth
            <span class="txt"><li><a href="{{url('/admin')}}">Вход в админ панель</a></li></span>
        </ul>
    </div>
</div>