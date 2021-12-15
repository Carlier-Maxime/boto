@extends('layouts.app')

@section('content')
    <h1>{{$serie->nom}}</h1>
    <img src="{{URL::asset($serie->urlImage)}}"/>
    <ul>
        <li>Genre : {{$serie->genre}}</li>
        <li>Langue : {{$serie->langue}}</li>
        <li>Genre : {{$serie->genre}}</li>
        <li>Note : {{$serie->note}}</li>
        <li>Status : {{$serie->status}}</li>
        <li>Premiere : {{$serie->premiere}}</li>
        <li>Resume : {!! $serie->resume !!}</li>
    </ul>
    @foreach($saisons as $saison)
        <h2>Saison {{$saison->first()->saison}}</h2>
        <div>
            @foreach($saison as $episode)
                <ul>
                    <li><h3>{{$episode->numero}} {{$episode->nom}}</h3></li>
                    <li><img src="{{URL::asset($episode->urlImage)}}"/></li>
                </ul>
            @endforeach
        </div>
    @endforeach
    @foreach($comments as $comment)
        <h3>{{\App\Models\User::all()->find($comment->user_id)->name}}</h3>
        {!! $comment->content !!}
    @endforeach

@endsection