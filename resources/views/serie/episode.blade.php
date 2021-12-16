@extends('layouts.app')

@section('content')
    <h1>{{\App\Models\Serie::find($episode->serie_id)->nom}}</h1>
    <h2>{{$episode->nom}}</h2>
    <img src="{{URL::asset($episode->urlImage)}}"/>
    <button onclick="window.location.href='/serie/{{$episode->serie_id}}/{{$episode->id}}?next=1'">Suivant</button>
@endsection