@extends('layouts.app')

@section('content')

<div class="menuDeroulant">
        <nav>
            <ul class="deroulant">
                <li >
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

<div class="gridIndex">
            
            <div class="listeGenres">
                <div>Genres</div>
                 <ul>

                    <li><bouton class="bouton" onclick="window.location.href ='/serie?genre=Mystery';"> mystery</bouton></li>
                    <li><bouton class="bouton" onclick="window.location.href ='/serie?genre=Crime';"> Crime </bouton></li>
                     <li><bouton class="bouton" onclick="window.location.href ='/serie?genre=Horror';"> Horror </bouton></li>
                    <li><bouton class="bouton" onclick="window.location.href ='/serie?genre=Fantasy';"> Fantasy </bouton></li>
                    <li><bouton class="bouton" onclick="window.location.href ='/serie?genre=Legal';"> Legal </bouton></li>
                    <li><bouton class="bouton" onclick="window.location.href ='/serie?genre=Thriller';"> Thriller </bouton></li>
                    <li><bouton class="bouton" onclick="window.location.href ='/serie?genre=Romance';"> Romance </bouton></li>
                    <li><bouton class="bouton" onclick="window.location.href ='/serie?genre=Science-Fiction';"> Science-Fiction </bouton></li>
                    <li><bouton class="bouton" onclick="window.location.href ='/serie?genre=Supernatural';"> Supernatural </bouton></li>
                    <li><bouton class="bouton" onclick="window.location.href ='/serie?genre=Western';"> Western </bouton></li>
                    <li><bouton class="bouton" onclick="window.location.href ='/serie?genre=Drama';"> Drama </bouton></li>
                    <li><bouton class="bouton" onclick="window.location.href ='/serie?genre=Anime';"> Anime</bouton></li>
                     <li><bouton class="bouton" onclick="window.location.href ='/serie?genre=Family';"> Family </bouton></li>
                </ul>
    </div>
    <div class="new">
    <div class="nvt">Liste des Séries</div>
    @foreach($series as $serie)
        <a href="/serie/{{$serie->id}}"><img src="{{$serie->urlImage}}"/></a>
    @endforeach
</div>

</div>
@endsection