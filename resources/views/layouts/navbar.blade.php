<nav>
    <ul class="menu">
        <li class="logo"><a href="{{route('home')}}">BOTO</a></li>
        <li><a href="{{route('serie.index')}}">Liste</a></li>

        @guest
            <li class="item button"><a href="{{ route('login') }}">Log In</a></li>
            <li class="item button secondary"><a href="{{ route('register') }}">Register</a></li>
            <li class="toggle"><span class="bars"></span></li>
        @else
            <li> Bonjour {{ Auth::user()->name }}</li>
            @if (Auth::user())
                <li><a href="#">Des liens spécifiques pour utilisateurs connectés..</a></li>
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