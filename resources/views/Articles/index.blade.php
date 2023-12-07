<x-layout>
  <div class="container ">
    <div class="row d-flex justify-content-around ">
            <div class="col-12 col-md-4 d-flex justify-content-around align-items-center  my-5 flex-column">
              <h1 class="display-2 text-center">THE AULAB POST</h1>
              <h2 class="col-12  d-flex justify-content-around align-items-center text-center my-5 text-black titoletto">TUTTI I NOSTRI ARTICOLI </h2>
            </div>
    </div>
</div>

<main class="container">
  
  <div class="row justify-content-between">
    @foreach ($articles as $article)
    <div class="col-12 col-md-5 mb-5 d-flex justify-content-center">
      
                  <div class="card" style="width: 21rem;">
                    
                    <img src="{{Storage::url($article->img)}}" alt=""/>
                    <div class="card-body">
                      

                      <h2 class="card_title">{{$article->title}}</h2>
                      
                      <p>{{$article->subtitle}}</p>
                      
                      <p>Redatto il: {{$article->created_at->format('d/m/Y')}}
                        <span>Da: <a href="{{route('Articles.byWriter',['user'=>$article->user->id])}}" class="small text-mute text-capitalize">  {{$article->user->name}}</a></span>
                        <a href="{{route('Articles.show',compact('article'))}}" class="btn btn-dark d-flex justify-content-around align-items-center text-center my-3">Scopri di più</a>
                        
                        
                        @if ($article->category)
                        <a href="{{route('Articles.byCategory',['category'=>$article->category->id])}}" class="small text-mute fst-italic text-capitalize d-flex justify-content-around align-items-center text-center my-3">Categoria di apparteneza: {{$article->category->name}}</a><span class="card_price">
                        @else
                        <p class="small text-muted fst-italic text-capitalize">Non Categorizzato</p>
                        @endif 
                        <p class="small fst-italic text-capitalize">
                          @foreach ($article->tags as $tag)
                          #{{$tag->name}}
                          @endforeach
                        </p>                   
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>

  </main>


</x-layout>