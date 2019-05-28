<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <link rel="manifest" href="{{url('/manifest.json')}}">
        <meta name="theme-color" content="#fff"/>

        {{-- icons for IOS devices --}}
        <link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-152.png">
        <link rel="apple-touch-icon" sizes="167x167" href="/icons/apple-167.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-180.png">
        <meta name="apple-mobile-web-app-capable" content="yes">

        {{-- checks for service worker support.if you have the push manager package then use this line 
        if ('serviceWorker' in navigator && 'PushManager' in window) instead of 
        if ('serviceWorker' in navigator ) --}}
        <script>
          if ('serviceWorker' in navigator ) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('{{url('/service-worker.js')}}').then(function(registration) {
                    // Registration was successful
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function(err) {
                    // registration failed :(
                    console.log('ServiceWorker registration failed: ', err);
                });
            });
        }
        </script>
        <title>e-Catalog</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
        @auth
                <a href="{{ route('logout') }}">Logout</a>
        @else
                <a href="{{ route('login') }}">Login/Signup</a>
        @endauth
            </div>
        @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
