<x-layout>
  <div class="container">
    <div class="row d-flex justify-content-around ">
<div class="col-12 col-md-3 d-flex justify-content-around align-items-center  my-5">
      <h1 class="col-12 col-md-3 d-flex justify-content-around align-items-center text-center my-5">TUTTI I NOSTRI ARTICOLI</h1>
</div>
</div>
  <div class="container ">
    <div class="row ">
      
        @foreach ($articles as $article)
        <div class="col-12 col-md-3 d-flex justify-content-around align-items-center text-center my-5">
            <div class="card" style="width: 18rem;">
                <img src="{{Storage::url($article->img)}}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$article->title}}</h5>
                  <p class="card-text">{{$article->subtitle}}</p>
                  <p class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</p>
                
                <br>
                    Redatto il: {{$article->created_at->format('d/m/Y')}} da <a href="{{route('Articles.byUser',['user'=>$article->user->id])}}" class="small text-mute fst-italic text-capitalize d-flex justify-content-around align-items-center text-center">{{$article->user->name}}</a>
                    <a href="{{route('Articles.show',compact('article'))}}" class="btn btn-primary d-flex justify-content-around align-items-center text-center my-5">Scopri di più</a>
                    <a href="{{route('Articles.byCategory',['category'=>$article->category->id])}}" class="small text-mute fst-italic text-capitalize d-flex justify-content-around align-items-center text-center my-3">Categoria di apparteneza: {{$article->category->name}}</a>
                    <a href="{{route('Articles.byUser',['user'=>$article->user->id])}}" class="small text-mute fst-italic text-capitalize d-flex justify-content-around align-items-center text-center mt-5">{{$article->user->name}}</a>
                
              </div>
              </div>
        </div>
        @endforeach
        
    </div>
</div>


</x-layout>