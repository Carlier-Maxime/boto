@extends('layouts.app')

@section('content')
<div class="user">
    <h1>Profil @if($user->administrateur!=0) Administrateur @endif
    	<img src="@if(Auth::user()->avatar==null) {{URL::asset('/img/face/avatar.png')}} @else {{URL::asset(Auth::user()->avatar)}} @endif"/></h1>
    <ul>
        <li class="username">Name : {{$user->name}}</li>
        <li>e-mail : {{$user->email}} </li>
        <li>verifié le : {{$user->email_verified_at}}</li>
    </ul>
</div>

<div class="profilListe">
    <h2 class="nvt2">Continuez a regarder</h2>
    @include('serie.carrousel',['series' => $continuer])
</div>

<div class="profilListe2">
    <h2 class="nvt2">Revoir</h2>
     @include('serie.carrousel',['series' => $revoir])
</div>
@endsection