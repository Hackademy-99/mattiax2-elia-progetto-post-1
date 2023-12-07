<x-layout>

    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Tutti gli articoli per:{{$query}}
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 my-2">
                <div class="card">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->subtitle}}</p>
                        <a href="{{route('article.byCategory',['category'->$article->category->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>                     
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                        <a class="" href="{{route('article.byWriter',['user'->$article->user->id])}}">Redatto il{{$article->created_at->format('d/m/Y')}} da{{$article->user->name}}</a>
                        @if ($article->category)
                        <a href="{{route('Articles.byCategory',['category'=>$article->category->id])}}" class="small text-mute fst-italic text-capitalize d-flex justify-content-around align-items-center text-center my-3">Categoria di apparteneza: {{$article->category->name}}</a><span class="card_price">
                        @else
                        <p class="small text-muted fst-italic text-capitalize">Non Categorizzato</p>
                        @endif                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</x-layout>