<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-success mb-2" aria-label="Third navbar example">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"><img src="{{ asset('image/formation.webp') }}" alt="logo" width="70px" height="70px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
              <li class="nav-item mx-md-2">
                <a class="nav-link active" aria-current="page" href="/">Accueil</a>
              </li>
              <li class="nav-item mx-md-2">
                <a class="nav-link active" aria-current="page" href="/apropos">Apropos</a>
              </li>
              <li class="nav-item mx-md-2">
                <a class="nav-link active" aria-current="page" href="/contact">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Nos formations</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/cours">La Santé</a></li>
                  <li><a class="dropdown-item" href="cours">L'informatique</a></li>
                  <li><a class="dropdown-item" href="cours">Les arts</a></li>
                </ul>
              </li>
            </ul>
            <form role="search">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
          </div>
          <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
        
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item mx-md-2">
                  <a class="nav-link active" aria-current="page" href="/contact">Cours(0)</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
        
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
          </ul>
        </div>
      </nav>
      
@yield('banner')


@yield('content')

<br> <br>
<footer class="container-fluid bg-success fixed-bottom text-center p-2 mt-5">
    <div>
        Copyright : 2023 || Develop by Romario & Lewis
    </div>
</footer>
    
    
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

