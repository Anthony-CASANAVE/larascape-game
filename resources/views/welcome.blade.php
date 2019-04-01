<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{asset('css/index.css')}}" rel="stylesheet">

    </head>
    <body>


    <div class="container">
        <h3>Choisissez votre équipe !</h3>

        <span class="red box" onclick="location.href='rouge.html';"></span><span class="violet box" onclick="location.href='violet.html';"></span><span class="green box" onclick="location.href='vert.html';"></span><span class="blue box" onclick="location.href='bleu.html';"></span><span
                class="yellow box" onclick="location.href='jaune.html';"></span>
    </div>

    <h2>Ou testez maintenant sur VOTRE téléphone !</h2>

    <img src="{{asset('img/qrindex.png')}}" alt="qr code">


    <script src="{{asset('scripts/index.js')}}"></script>





















        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
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
