@extends('layouts.app')

@section('content')
<div class="show">
    <h1>{{$serie->nom}}
    <img src="{{URL::asset($serie->urlImage)}}"/>
    </h1>
    <ul>
        <li>Genre : {{$serie->genre}}</li>
        <li>Langue : {{$serie->langue}}</li>
        <li>Genre : {{$serie->genre}}</li>
        <li>Note : {{$serie->note}}</li>
        <li>Status : {{$serie->status}}</li>
        <li>Premiere : {{$serie->premiere}}</li>
        <li class="resume">Resume : {!! $serie->resume !!}</li>
    </ul>


    @auth
        @if(Auth::user()->isSeenSerie($serie->id))
            <h3 class="vu">Vu</h3>
        @else
            <button onclick="window.location.href='/serie/check/{{$serie->id}}'" class="mrq">Marquer comme lu</button>
        @endif
    @endauth
    </div>
    @foreach($saisons as $saison)
    <div class="nvt">
        <h2>Saison {{$saison->first()->saison}}</h2>
        <div class="new">
            @foreach($saison as $episode)
                <ul>
                    <li class="nomEpisode"><h3>{{$episode->numero}} {{$episode->nom}}</h3></li>
                    <li class="imgEpisode"><img src="{{URL::asset($episode->urlImage)}}"/></li>
                </ul>
            @endforeach
        </div>
    @endforeach
</div>
    @foreach($comments as $comment)
        <h3>{{\App\Models\User::all()->find($comment->user_id)->name}}</h3>
        {!! $comment->content !!}
    @endforeach

@endsection