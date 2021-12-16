<div>
    @foreach($series as $serie)
                <a href="/serie/{{$serie->id}}"><img src="{{URL::asset($serie->urlImage)}}"/></a>
    @endforeach
</div>