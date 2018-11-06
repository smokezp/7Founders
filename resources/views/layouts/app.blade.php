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
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel main-navbar">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/7founders-logo.png')}}">
        </a>
        <div class="container">
            {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
            {{--<span class="navbar-toggler-icon"></span>--}}
            {{--</button>--}}

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
            <!-- Authentication Links -->
            {{--@guest--}}
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
            {{--@if (Route::has('register'))--}}
            {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
            {{--@endif--}}
            {{--</li>--}}
            {{--@else--}}
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
            {{--@endguest--}}
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
</div>
</body>
</html>
