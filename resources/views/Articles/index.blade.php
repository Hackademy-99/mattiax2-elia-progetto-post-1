<x-layout>
  <div class="container">
    <div class="row d-flex justify-content-around ">
<div class="col-12 col-md-3 d-flex justify-content-around align-items-center  ">
      <h1 class="col-12 col-md-3 d-flex justify-content-around align-items-center text-center my-5">TUTTI I NOSTRI ARTICOLI</h1>
</div>
</div>
  <div class="container ">
    <div class="row align-content-center">
      
        @foreach ($articles as $article)
        <div class="col-12 col-md-3 d-flex justify-content-around align-items-center text-center ">
            <div class="card" style="width: 18rem;">
                <img src="{{Storage::url($article->img)}}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-white">{{$article->title}}</h5>
                  <p class="card-text text-white">{{$article->subtitle}}</p>
                  <p class="small text-white fst-italic text-capitalize ">{{$article->category->name}}</p>
                
                <br>
                    <p class="text-white">Redatto il: {{$article->created_at->format('d/m/Y')}} da </p><a href="{{route('Articles.byWriter',['user'=>$article->user->id])}}" class="small text-mute text-white fst-italic text-capitalize d-flex justify-content-around align-items-center text-center">{{$article->user->name}}</a>
                    <a href="{{route('Articles.show',compact('article'))}}" class="btn btn-primary d-flex justify-content-around align-items-center text-center mt-2">Scopri di più</a>
                    <a href="{{route('Articles.byCategory',['category'=>$article->category->id])}}" class="small text-white text-mute fst-italic text-capitalize d-flex justify-content-around align-items-center text-center mt-2">Categoria di apparteneza: {{$article->category->name}}</a>
                    
                
              </div>
              </div>
        </div>
        @endforeach
        
    </div>
</div>


</x-layout>