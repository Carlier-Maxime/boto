@extends('layouts.app')

@section('content')

<div class="gridIndex">

<div class="listeGenres">
	<div>Genres</div>
	<ul>
		<li>Action</li>
		<li>Action</li>
		<li>Action</li>
		<li>Action</li>
		<li>Action</li>
	</ul>
</div>

    <div class="new"> <div class="nvt">Nouveautés</div>
    <a class="btnC"><img  src="../img/boutonG.png" ></a>
    @include('serie.carrousel',['series' => $news, 'id' => 0])
     <a class="btnC"><img  src="../img/boutonD.png" ></a>
   
    </div>

    <div class="best">
    <div class="nvt">Les mieux noté</div>
     <a class="btnC"><img  src="../img/boutonG.png" ></a>
    @include('serie.carrousel',['series' => $notes, 'id' => 1])
     <a class="btnC"><img  src="../img/boutonD.png" ></a>

</div>
</div>
@endsection