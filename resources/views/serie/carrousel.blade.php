<div>
    @foreach($series as $serie)
                <a href="/serie/{{$serie->id}}"><img src="{{$serie->urlImage}}"/></a>
    @endforeach
</div>