
  <nav>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6 d-flex justify-content-evenly  align-items-center">
        
        
        {{--! Solo per utenti autenticati --}}
      
        
        {{-- ! utenti guest --}}
        
        
        {{-- !Solo per utenti autenticati --}}
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
      <li><a class="dropdown-item" href="{{route('Articles.index')}}">visualizza articoli</a></li>
      
      @auth
      <li><a class="dropdown-item" href="{{route('Articles.create')}}">aggiungi articolo</a></li>
      @endauth
    </ul>
    
          
          <div class="dropdown">
     <button class="btn-article watch" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    
          
          <i class="bi bi-person-square p-0 link-articolo "></i>
  </button>
  
  <ul class="dropdown-menu">
    
    @guest
    <li><a class="dropdown-item" href="{{route('login')}}">login</a></li>
    <li><a class="dropdown-item" href="{{route('register')}}">registrati</a></li>
    
    @endguest
    @auth
    <form method="POST" action="{{route('logout')}}">@csrf <button class="btn-logout"> Logout </button> </form> 
    @endauth

  </ul>
  
</div>
{{-- <p class="profile text-black "> Benvenuto {{Auth::user()->name}}</p> --}}

<form class="d-flex" role="search">
  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn " type="submit"><i class="bi bi-search-heart-fill"></i></button>
</form>
        
      </div>
    </div>
  </div>
</nav>


