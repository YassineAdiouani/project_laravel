<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Social Media</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item m-2">
                    <a class="nav-link" href="{{route('home')}}">Accueil</a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link" href="{{route('profiles.index')}}">les profils</a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link" href="{{route('profiles.create')}}">Ajoute prorfiles</a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link" href="{{route('settings.index')}}">Mes information</a>
                </li>
                @guest
                    <li class="nav-item m-2">
                        <a class="nav-link" href="{{route('login.show')}}">se connect</a>
                    </li>
                @endguest
                <li class="nav-item m-2">
                    <a class="nav-link" href="/test">test</a>
                </li>
                @auth
                <li class="nav-item m-2 dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li class="nav-item m-2">
                                <a class="nav-link" href="{{ route('login.logout') }}">logout</a>
                            </li>
                        </ul>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>