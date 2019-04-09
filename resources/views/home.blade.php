@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('#') }}">{{ __("EDITER L'AMPHI J021") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('#') }}">{{ __("EDITER L'AMPHI J022") }}</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">{{ __("Créer un compte admin") }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{--CONTENU--}}
    <div id="j21">

    </div>
    <div id="j22">

    </div>
    <script src="{{ asset('js/amphiadmin.js') }}"></script>
</div>
@endsection
