@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a id="edit21" class="nav-link" href="{{ url('#') }}">{{ __("EDITER L'AMPHI J021") }}</a>
                    </li>
                    <li class="nav-item">
                        <a id="edit22" class="nav-link" href="{{ url('#') }}">{{ __("EDITER L'AMPHI J022") }}</a>
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
        <div class="row">
            <div class="col-9">
                <img class="img-fluid" src="{{asset('img/mapEtCoordonnees.png')}}" alt="">
            </div>
            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="selectrang">Selectionnez une rangée</label>
                        <input type="text" class="form-control" id="selectrang" placeholder="Ex : 9">
                    </div>
                    <div class="form-group">
                        <label for="selectcol">Selectionnez une colonne</label>
                        <input type="text" class="form-control" id="selectcol" placeholder="Ex : 12">
                    </div>
                    <div class="form-group">
                        <label for="#">Selectionnez la couleur d'équipe</label>
                        <select class="form-control">
                            <option selected>Choisissez ...</option>
                            <option>Rouge</option>
                            <option>Bleu</option>
                            <option>Jaune</option>
                            <option>Vert</option>
                            <option>Violet</option>
                    </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter l'indice</button>
                </form>
            </div>
        </div>
    </div>
    <div id="j22">
        <div class="row">
            <div class="col-9">
                <img class="img-fluid" src="{{asset('img/dranac.jpg')}}" alt="">
            </div>
            <div class="col">
                <form method="POST" action="{{ route('indices.store') }}">
                    <div class="form-group">
                        <label for="selectrang2">Selectionnez une rangée</label>
                        <input type="text" class="form-control" id="selectrang2" placeholder="Ex : 9">
                    </div>
                    <div class="form-group">
                        <label for="selectcol2">Selectionnez une colonne</label>
                        <input type="text" class="form-control" id="selectcol2" placeholder="Ex : 12">
                    </div>
                    <div class="form-group">
                        <label for="#">Selectionnez la couleur d'équipe</label>
                        <select class="form-control">
                            <option selected>Choisissez ...</option>
                            <option>Rouge</option>
                            <option>Bleu</option>
                            <option>Jaune</option>
                            <option>Vert</option>
                            <option>Violet</option>
                        </select>
                    </div>
                    <button id= type="submit" class="btn btn-primary">Ajouter l'indice</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
