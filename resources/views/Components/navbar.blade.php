
  <nav>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-6 d-flex justify-content-evenly  align-items-center">
        
          <a href="{{route('homepage')}}"><i class="bi bi-house-door-fill p-0 link-profilo"></i></a>
          <button class="btn-article watch" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    
          
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
    <li><a class="dropdown-item" href="{{route('logout')}}"> @csrf logout</a></li>

  </ul>
  
</div>
<p class="profile text-black "> Benvenuto {{Auth::user()->name}}</p>

<form class="d-flex" role="search">
  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn " type="submit"><i class="bi bi-search-heart-fill"></i></button>
</form>
        
      </div>
    </div>
  </div>
</nav>


