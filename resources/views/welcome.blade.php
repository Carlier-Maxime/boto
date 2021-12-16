@extends('layouts.app')

@section('content')
    Nouveautés
    @include('serie.carrousel',['series' => $news, 'id' => 0])
    Les mieux noté
    @include('serie.carrousel',['series' => $notes, 'id' => 1])
    @include('layouts.menu')
@endsection