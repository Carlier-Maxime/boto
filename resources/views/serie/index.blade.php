@extends('layouts.app')

@section('content')
    <h1>Liste des Serie</h1>
    @foreach($series as $serie)
        <img src="{{$serie->urlImage}}"/>
    @endforeach
@endsection