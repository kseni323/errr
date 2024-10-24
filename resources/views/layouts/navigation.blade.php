


<!-- Добавляем кнопку для открытия меню -->
<button id="toggleMenuButton" class="text-black">Меню</button>

<!-- Меню, которое будет открываться -->
<div id="profileMenu" class="hidden fixed right-0 top-0 w-64 h-full bg-white shadow-lg">
    @include('partials.menu') <!-- Подключаем меню -->
</div>

<script>
    // JavaScript для открытия и закрытия меню
    const toggleButton = document.getElementById('toggleMenuButton');
    const menu = document.getElementById('profileMenu');
    
    toggleButton.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>


<!-- Responsive Navigation Menu -->
<div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('index')" :active="request()->routeIs('index')">
                {{ ('Главная') }}
            </x-responsive-nav-link>
            <!-- Другие ссылки, если необходимо -->
        </div>
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                @auth
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                @endauth
            </div>
            <div class="mt-3 space-y-1">
                @auth
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ ('Профиль') }}
                        <!-- Подключаем menu -->
    @include('partials.menu')
                    </x-responsive-nav-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ ('Выйти') }}
                        </x-responsive-nav-link>
                    </form>
                @else
                    <x-responsive-nav-link :href="route('login')">
                        {{ ('Вход') }}
                    </x-responsive-nav-link>
                    @if (Route::has('register'))
                        <x-responsive-nav-link :href="route('register')">
                            {{ ('Регистрация') }}
                        </x-responsive-nav-link>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</nav>