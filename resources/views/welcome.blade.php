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
                        <a class="grey" href="{{ url('/home') }}">Panneau d'administration</a>
                        <a class="grey" href="{{ url('/logout') }}"> Déconnexion </a>
                    @else
                        <a class="grey" href="{{ route('login') }}">Accéder au panneau d'administration</a>

                        {{--@if (Route::has('register'))
                            <a class="grey" href="{{ route('register') }}">S'enregistrer</a>
                        @endif--}}
                    @endauth
                </div>
            @endif



            <div class="content">
                <div class="title m-b-md ">
                    Choisissez votre équipe !
                </div>

                <div class="links">
                    <a class="blue" href="{{ url('/amphi') }}">BLEU</a>
                    <a class="red" href="{{ url('/amphi') }}">ROUGE</a>
                    <a class="green" href="{{ url('/amphi') }}">VERT</a>
                    <a class="yellow" href="{{ url('/amphi') }}">JAUNE</a>
                    <a class="violet" href="{{ url('/amphi') }}">VIOLET</a>
                </div>
            </div>

        </div>

        <script src="{{asset('scripts/index.js')}}"></script>



    </body>
</html>
