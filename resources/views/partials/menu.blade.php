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
                @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                <!--<a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a> -->
                                @else
                                    <span class="txt"><li><a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Вход
                                    </a></li></span>

                                    @if (Route::has('register'))
                                        <span class="txt"><li><a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Регистрация
                                        </a></li></span>
                                    @endif
                                @endauth
                        @endif
            </ul>
        </div>
          </div>