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
        @include('layouts.nav')
        <main class="">
            <div class="jumbotron">
                <div class="container">
                    <h4>Management Events</h4>
                    <h2>SMK NUSA BANGSA</h2>
                    <h6>Jl. Monas NO.704, RT004/003, Pondok Ungu, Bekasi, Jawa Barat 18736</h6>
                </div>
            </div>
            @yield('content')
        </main>
    </div>
    </body>
</html>
