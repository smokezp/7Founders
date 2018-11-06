<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @guest
        @yield('content')
    @else
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel main-navbar">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/7founders-logo.png')}}">
        </a>
        <div class="container">
            <div class="collapse navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto central-ul">
                    <li>
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">For founders</a>
                    </li>
                    <li class="main-plus-action">
                        <a class="item" href="#"></a>
                    </li>

                    <li>
                        <a class="nav-link" href="#">Workspace</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">Coins</a>
                    </li>
                </ul>

            </div>
        </div>
        <ul class="navbar-nav ml-auto user-data">
            <li>
                <a class="nav-link messages">
                </a>
            </li>
            <li>
                <a class="nav-link notifications">

                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link avatar">
                    <img src="{{ asset('images/userImg.png')}}">
                </a>

                <div class="dropdown-menu dropdown-menu-right" id="settings-menu">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>

    </nav>
    <div class="sidenav-cover" style="display:inline">
        <ul>
            <li>
                <a href="#" class="item-1 items"></a>
            </li>
            <li>
                <a href="#" class="item-2 items"></a>
            </li>
            <li>
                <a href="#" class="item-3 items"></a>
            </li>
            <li>
                <a href="#" class="item-4 items"></a>
            </li>
            <li>
                <a href="#" class="item-5 items"></a>
            </li>
            <li>
                <a href="#" class="item-6 items"></a>
            </li>
        </ul>
    </div>
    <div class="content">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @endguest
</div>
</body>
</html>
