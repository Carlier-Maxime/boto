@extends('layouts.app')

@section('content')
    <h1>Liste des Serie</h1>
    @foreach($series as $serie)
        <a href="/serie/{{$serie->id}}"><img src="{{$serie->urlImage}}"/></a>
    @endforeach
@endsection