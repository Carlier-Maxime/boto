@extends('layouts.app')

@section('content')
    <h1>Liste des Serie</h1>
    <div class="menu-déroulant">
        <nav>
            <ul>
                <li class="deroulant">
                    <a href="#">filtre</a>
                    <ul class="sous">
                        <li><bouton   class="bouton" onclick="window.location.href ='/serie?tri=nom';">nom</bouton></li>
                        <li><bouton class="bouton" onclick="window.location.href ='/serie?tri=genre';"> genre </bouton></li>
                        <li><bouton class="bouton" onclick="window.location.href ='/serie?tri=premiere';"> date de sortie</bouton></li>
                        <li><bouton class="bouton" onclick="window.location.href ='/serie?tri=note';"> note </bouton></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="content">
        @foreach($series as $serie)
            <a href="/serie/{{$serie->id}}"><img src="{{$serie->urlImage}}"/></a>
        @endforeach

    </div>
    @include('layouts.menu')

@endsection