<nav x-data="{ open: false }" id="navbar">
    <!-- Primary Navigation Menu -->

    <!-- Logo -->

    <a href="{{ route('home') }}">
        <img src="{{ asset('/storage/img/LogoAfpa.png') }}" class="kek">
    </a>

    <div class="links">
        <!-- Navigation Links -->

        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Home') }}
        </x-nav-link>
        @auth
        <x-nav-link :href="route('users')" :active="request()->routeIs('users')">
            {{ __('Users') }}
        </x-nav-link>
        @endauth
        @auth
        <x-nav-link :href="route('profile')" :active="request()->routeIs('profile')">
            {{ __('My profile') }}
        </x-nav-link>
        @endauth
        @auth
        <x-nav-link :href="route('test')" :active="request()->routeIs('test')">
            {{ __('Upload') }}
        </x-nav-link>
        @endauth

        <!-- Settings Dropdown -->


        <form method="POST" action="{{ route('logout') }}">
            @csrf
            @auth
            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
            @else
            <x-nav-link :href="route('login')">
                {{ __('Login') }}
            </x-nav-link>
            <div>or</div>
            <x-nav-link :href="route('register')">
                {{ __('register') }}
            </x-nav-link>
            @endauth
        </form>
    </div>

</nav>