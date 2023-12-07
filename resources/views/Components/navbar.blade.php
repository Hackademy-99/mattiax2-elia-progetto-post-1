
<nav>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-10 d-flex justify-content-evenly  align-items-center">
        
        {{-- !dashboard Solo per utenti autenticati con ruolo--}}
        @auth
        <a class="nav-link active pe-2 fs-5 text-center" href="{{route('careers')}}">Lavora con noi!</a></li>
        @if(Auth::user()->is_admin)
        <a class="nav-link active pe-2 fs-5 text-center" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
        @endif
        @if (Auth::user()->is_revisor)
        <a class="nav-link active pe-2 fs-5 text-center"  href="{{route('revisor.dashboard')}}">Dashboard Revisor</a></li>
        @endif
        @endauth
      </ul>
      
      
      
      <a href="{{route('homepage')}}"><i class="bi bi-house-door-fill p-0 link-profilo"></i></a>
      <button class="btn-article watch" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{-- <li class="nav-link active"><form method="POST" action="{{route('logout')}}">@csrf <button type="submit">Logout</button></form></li> --}}
      </li>
      
      <i class="bi bi-file-plus-fill p-0 link"></i>
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="{{route('Articles.index')}}">Visualizza articoli</a></li>
      {{-- ! autorizzazione per scrivere del redattore --}}
      @auth
      @if (Auth::user()->is_writer)
      <li><a class="dropdown-item" href="{{route('Articles.create')}}">Aggiungi articolo</a></li>
      @endif
      @endauth
    </ul>
    
    
    <div class="dropdown">
      <button class="btn-article watch" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        
        
        <i class="bi bi-person-square p-0 link-articolo "></i>
      </button>
      
      <ul class="dropdown-menu">
        
        @guest
        <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
        <li><a class="dropdown-item" href="{{route('register')}}">Registrazione</a></li>
        @endguest
        @auth
        <form method="POST" action="{{route('logout')}}">@csrf <button class="btn-logout"> Logout </button> </form> 
        @endauth
        
      </ul>
      
    </div>
    @auth
    <p class="profile text-black "> Benvenuto {{Auth::user()->name}}</p>
    @endauth
    
    <form class="d-flex" method="GET" action="{{route('Article.search')}}">
      <input class="form-control me-2" type="search" name="query" placeholder="Cosa stai cercando" aria-label="search">
      <button class="btn btn-outline-dark" type="submit">Cerca</button>
    </form>
    
  </div>
</div>
</div>
</nav>


