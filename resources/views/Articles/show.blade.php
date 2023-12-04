<x-layout>
    
    
    <div class="container col-12 d-flex justify-content-around align-items-center text-center my-5">
        <div class="row col-12 d-flex justify-content-around align-items-center text-center my-5">
            <div class="col-12 d-flex justify-content-around align-items-center text-center my-5">
                
                <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
            </div>
            <div class="col-12 d-flex justify-content-around align-items-center text-center my-5">   
            <h1 class="d-flex justify-content-around align-items-center text-center my-5">{{$article->title}}</h1>
        </div> 
        <div class="col-12 d-flex justify-content-around align-items-center text-center my-5">   
            <h2 class="d-flex justify-content-around align-items-center text-center my-5">{{$article->subtitle}}</h2>
        </div> 
        <div class="col-12 d-flex justify-content-around align-items-center text-center my-5">
            <p class="d-flex justify-content-around align-items-center text-center my-5">{{$article->body}}</p>
        </div>
        <br>
        <div class="col-12 d-flex justify-content-around align-items-center text-center my-5">Redatto il: {{$article->created_at->format('d/m/Y')}} da <a href="{{route('Articles.byUser',['user'=>$article->user->id])}}" class="small text-mute fst-italic text-capitalize d-flex justify-content-around align-items-center text-center">{{$article->user->name}}</a>
            <a href="{{route('Articles.byCategory',['category'=>$article->category->id])}}" class="small text-mute fst-italic text-capitalize d-flex justify-content-around align-items-center text-center my-3">Categoria di apparteneza: {{$article->category->name}}</a>
            <a href="{{route('Articles.index')}}" class="btn btn-primary d-flex justify-content-around align-items-center text-center my-5">Torna all'indice</a>
            @if(Auth::user() && Auth::user()->is_revisor)
            <a href="{{route('revisor.acceptArticle',compact('article'))}}" class="btn btn-success text-white my-5">Accetta articolo</a>
            <a href="{{route('revisor.rejectArticle',compact('article'))}}" class="btn btn-danger text-white my-5">RIfiuta articolo</a>
        </div>
      
    </div>
    </div>
    
    
</x-layout>