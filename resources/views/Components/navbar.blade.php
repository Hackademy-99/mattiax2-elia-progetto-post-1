<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">The Aulab Post</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('Articles.index')}}">Articoli usciti</a>
          </li>

          {{--! Solo per utenti autenticati --}}
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('Articles.create')}}">Inserisci articolo</a>
          </li> 
          @endauth

          {{-- ! utenti guest --}}
          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Opzioni accesso
            </a>
            <ul class="dropdown-menu">

              
              
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
              
              @endguest

               {{-- !Solo per utenti autenticati --}}
              @auth
              <li class="nav-link active">
                <p href=""> Benvenuto {{Auth::user()->name}}</p>
              </li>
              <li class="nav-link active"><form method="POST" action="{{route('logout')}}">@csrf <button type="submit">Logout</button></form></li>
              <li><a class="nav-link active" href="{{route('careers')}}">Lavora con noi!</a></li>
              @if(Auth::user()->is_admin)
              <li><a class="nav-link active" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
              @endif
              @if (Auth::user()->is_revisor)
              <li><a class="nav-link active" href="{{route('revisor.dashboard')}}">Dashboard Revisor</a></li>
              @endif
              @endauth
            </ul>
          </li>
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>