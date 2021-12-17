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

<div class="gridListe">
            
            <div class="listeGenres">
                <div>Genres</div>
                 <ul> 

                    <li>Action</li>
                    <li>Action</li>
                    <li>Action</li>
                    <li>Action</li>
                    <li>Action</li>
                    <li>Action</li>
                    <li>Action</li>
                    <li>Action</li>
                    <li>Action</li>
                    <li>Action</li>
                    <li>Action</li>
                    <li>Action</li>
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