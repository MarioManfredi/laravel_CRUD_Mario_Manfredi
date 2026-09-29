<nav class="navbar navbar-expand-md bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('welcome')}}">
            <img src="/storage/img/home.png" alt="Immagine Home" class="img-custom">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('article.create')}}">Crea articolo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('mail.contattaci')}}">Contattaci</a>
                </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('article.index')}}">I miei articoli</a>
                </li>
                @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                    </ul>
                </li>
                @endguest
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <form method="POST" action="{{route('logout')}}" class="dropdown-item">
                                <button type="submit" class="nav-link">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth
            </ul>
            @guest
            <span class="navbar-text">
                <a class="nav-link" href="{{route('register')}}">Non sei ancora registrato?</a>
            </span>
            @endguest
        </div>
    </div>
</nav>