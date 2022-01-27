<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

         <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       </head>
    <body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{route('/')}}">
                KEGIATAN KU
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @auth()
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link text-white">DASHBOARD</a>
                </li>
                @endauth
                @role('admin')
                <li class="nav-item">
                    <a href="{{route('data.siswa')}}" class="nav-link text-white">DATA SISWA</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('manage-kegiatan')}}" class="nav-link text-white">MANAGE KEGIATAN</a>
                </li>
                @endrole
                @role('bendahara')
                <li class="nav-item">
                    <a href="{{route('verifikasi-pendaftaran')}}" class="nav-link text-white">VERIFIKASI PENDAFTARAN</a>
                </li>
                @endrole
                @role('student')
                <li class="nav-item">
                    <a href="{{route('/')}}" class="nav-link text-white">Cek Kegiatan</a>
                </li>
                @endrole
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </div>
                </li>
             @endguest
            </ul>
        </div>
    </div>
        </nav>
            <div class="jumbotron">
                <div class="container">
                    <h5 class="text-white">Management Events</h5>
                    <h2 class="text-white">SMK NUSA BANGSA</h2>
                    <p class="text-white">Jl. Monas NO.704, RT004/003, Pondok Ungu, Bekasi, Jawa Barat 18736</p>
                </div>
            </div>
        </div>
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>
<marquee hspace="50" bgcolor="white" width="1500">xdxdxddxdxdxdxdxdxdxdxdxdxddxdxdxdxdxdxdxdxdxxdxdxddxdxdxdxdxdxxdxdxdxdxdxdxdxdxdxdxdxdxdx </marquee><br>