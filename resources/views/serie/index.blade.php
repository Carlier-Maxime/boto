@extends('layouts.app')

@section('content')


<div class="gridIndex">
            
            @include('layouts.menu')
    <div class="new">
    <div class="nvt">Liste des Séries</div>
    @foreach($series as $serie)
        <a href="/serie/{{$serie->id}}"><img src="{{$serie->urlImage}}"/></a>
    @endforeach
</div>

</div>
@endsection