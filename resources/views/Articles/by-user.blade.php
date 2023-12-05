<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1 tesxt-capitalize">
                Autore {{$user->name}}
            </h1>
        </div>
    </div>
    
        <div class="container my-5">
          <div class="row justify-content-around">
            @foreach ($articles as $article)
        <div class="col-12 col-md-3 d-flex justify-contente-around align-items-center text-center my-5">
            <div class="card" style="width: 18rem;">
                <img src="{{Storage::url($article->img)}}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$article->title}}</h5>
                  <p class="card-text">{{$article->subtitle}}</p>
                  <p class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</p>
                
                <br>
                    Redatto il: {{$article->created_at->format('d/m/Y')}} da <a href="{{route('Articles.byWriter',['user'=>$article->user->id])}}" class="small text-mute fst-italic text-capitalize d-flex justify-content-around align-items-center text-center">{{$article->user->name}}</a>
                    <a href="{{route('Articles.show',compact('article'))}}" class="btn btn-primary d-flex justify-content-around align-items-center text-center my-5">Scopri di più</a>
                    <a href="{{route('Articles.byCategory',['category'=>$article->category->id])}}" class="small text-mute fst-italic text-capitalize d-flex justify-content-around align-items-center text-center my-3">Categoria di apparteneza: {{$article->category->name}}</a>
                    
                
              </div>
              </div>
        </div>
        @endforeach
              
          </div>
      </div>
      
      
      </x-layout>