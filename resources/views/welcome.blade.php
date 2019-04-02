<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ENIGME DE L'AMPHITHEATRE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{asset('css/index.css')}}" rel="stylesheet">

    </head>
    <body>


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
                    Choisissez votre équipe !
                </div>

                <div class="links">
                    <a href="{{ url('/amphi') }}">BLEU</a>
                    <a href="{{ url('/amphi') }}">ROUGE</a>
                    <a href="{{ url('/amphi') }}">VERT</a>
                    <a href="{{ url('/amphi') }}">JAUNE</a>
                    <a href="{{ url('/amphi') }}">VIOLET</a>
                </div>
            </div>

        </div>

        <script src="{{asset('scripts/index.js')}}"></script>



    </body>
</html>
