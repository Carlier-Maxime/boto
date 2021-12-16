@extends('layouts.app')

@section('content')
    <h1>Profil @if($user->administrateur!=0) Administrateur @endif</h1>
    <ul>
        <li>Name : {{$user->name}}</li>
        <li>e-mail : {{$user->email}} | verifier le : {{$user->email_verified_at}}</li>
    </ul>
    <h2>Continuez a regarder</h2>
        @include('serie.carrousel',['series' => $continuer])
    <h2>Revoir</h2>
        @include('serie.carrousel',['series' => $revoir])
@endsection