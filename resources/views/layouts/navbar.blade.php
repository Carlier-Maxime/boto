<nav >
    <ul class="menu">
        <li class="logo"><a href="{{route('home')}}"><img class="logoNav" src="{{URL::asset('img/logo.png')}}"></a>
        </li>

        <li><a href="{{route('serie.index')}}">Liste</a></li>
        <form action="{{route('serie.index')}}" class="container_liens">
            <input type="text" name="nom" id="barre_de_recherche" placeholder="Rechercher">
            <input type="submit" value="ok" id="ok">
        </form>

        @guest
            <li class="item button"><a href="{{ route('login') }}">Log In</a></li>
            <li class="item button secondary"><a href="{{ route('register') }}">Register</a></li>
            <li class="toggle"><span class="bars"></span></li>
        @else
            @if (Auth::user())
                <li><a href="{{route('user.profil')}}"><img class="pdp" src="{{URL::asset(Auth::user()->avatar)}}" alt="{{ Auth::user()->name }}"/></a></li>
            @endif
            <li><a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endguest


    </ul>
</nav>