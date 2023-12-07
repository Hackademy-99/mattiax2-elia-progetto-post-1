<x-layout>
    
    
    <div class="container col-12 d-flex justify-content-around align-items-center text-center ">
        <div class="row col-12 d-flex justify-content-around align-items-center text-center ">
            <div class="col-12 d-flex justify-content-around align-items-center text-center">
                
            </div>
            <div class="col-12 d-flex justify-content-around align-items-center text-center my-0">   
                <h1 class="d-flex justify-content-around align-items-center text-center my-0 pe-0">{{$article->title}}</h1>
            </div> 
            <div class="col-12 d-flex justify-content-around align-items-center text-center ">   
                <h2 class="d-flex justify-content-around align-items-center text-center my-3 articolo">{{$article->subtitle}}</h2>
            </div> 
            <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
    
        <div class="col-12 d-flex justify-content-around align-items-center text-center ">
            <p class="d-flex justify-content-around align-items-center text-center my-5 spiegazione">{{$article->body}}</p>
        </div>
        <br>
        
      
    </div>
    </div>
    
    
</x-layout>