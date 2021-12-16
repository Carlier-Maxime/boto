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
    @auth
        @if(Auth::user()->isSeenSerie($serie->id))
            <h3>Vu</h3>
            <button onclick="window.location.href='/serie/{{$serie->id}}?review=1'">Le revoir</button>
        @else
            <button onclick="window.location.href='/serie/check/{{$serie->id}}'">Marquer comme vu</button>
            <button onclick="window.location.href='{{route('serie.episode',['serie_id'=>$serie->id,'episode_id' => Auth::user()->getCurrentEpisode($serie->id)->id])}}'">
                @if(Auth::user()->getCurrentEpisode($serie->id)->numero=='1' && Auth::user()->getCurrentEpisode($serie->id)->saison=='1')
                    Regarder
                @else
                    Continuer
                @endif
            </button>
        @endif
    @endauth
    @foreach($saisons as $saison)
        <h2>Saison {{$saison->first()->saison}}</h2>
        <div>
            @foreach($saison as $episode)
                <ul>
                    <li><h3>{{$episode->numero}} {{$episode->nom}}</h3></li>
                    <li><a @auth href="{{route('serie.episode',['serie_id'=>$episode->serie_id, 'episode_id' => $episode->id])}}" @endauth>
                            <img src="{{URL::asset($episode->urlImage)}}"/>
                    </a></li>
                    @auth @if(Auth::user()->seenEpisode($episode->id)) <li>Vu</li> @endif @endauth
                </ul>
            @endforeach
        </div>
    @endforeach
    @foreach($comments as $comment)
        <h3>{{\App\Models\User::all()->find($comment->user_id)->name}}</h3>
        {!! $comment->content !!}
        @auth
            @if($comment->user_id==Auth::user()->id)
                <button onclick="window.location.href ='{{route('comment.edit' , array('serie_id'=>$serie->id , 'comment'=>$comment->id))}}';">edit comment</button>
            @endif
        @endauth
    @endforeach


    @auth
        <button onclick="window.location.href ='{{route('comment.create' , array('serie_id'=>$serie->id))}}';">Add comment</button>
    @endauth
@endsection