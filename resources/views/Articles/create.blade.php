<x-layout>

<div class="container">
  <div class="row justify-content-between">
    <div class="col-12 col-md-4 add-article text-center d-flex">
      <form class="" action="{{route("Articles.store")}}" method="POST" enctype="multipart/form-data">
      @csrf
      @if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
  @endif
  <div class="mb-3 centratino">
    <label for="exampleInputEmail1" class="form-label">Titolo</label>
    <input value="{{old('title')}}" name="title" type="text" class="form-control" id="title">
    
  </div>
  <div class="mb-3 centratino">
    <label for="exampleInputPassword1" class="form-label">Sottotitolo</label>
    <input value="{{old('subtitle')}}" name="subtitle" type="text" class="form-control" id="subtitle">
  </div>
  
  <div class="centratino mb-3">
  <textarea value="{{old('body')}}" name="body" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  </div>

  

  <div class="mb-3 centratino">
    <label for="img" class="form-label">Categoria:</label>
    <select name="category" id="category" class="form-control text-capitalize">
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
  </div>
 
  
</form>
    </div>
    
    <div class="col-12 col-md-4 add-article text-center d-flex">
      <div class="mb-3 centratino">
        <label for="img" class="form-label">Immagine</label>
        <input name="img" type="file" class="form-control" id="img">
      </div>
    </div>
  </div>
  
</div>
<div class="container">
  <div class="row justify-content-center text-center">
    <div class="col-12 col-md-6">
      <button type="submit" class="btn btn-articolo">Invio</button>
    </div>
  </div>
</div>




















  {{-- <div class="container">
  <div class="row add-article text-center ">
    <form class="" action="{{route("Articles.store")}}" method="POST" enctype="multipart/form-data">
      @csrf

        ! snippet errori
@if ($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif

** Sessione avvenuta

@if(session()->has('message'))
<div class="alert alert-success">
{{ session()->get('message') }}
</div>
@endif



<div class="container">
  <div class="row  ">
    <div class="col-12 col-md-12">
          <h1 class="text-center add-article-h1">inserisci articolo</h1>
    </div>
  </div>
</div>
 

       <div class="mb-3 centratino">
        <label for="exampleInputEmail1" class="form-label">Titolo</label>
        <input value="{{old('title')}}" name="title" type="text" class="form-control" id="title">
        
      </div>
      <div class="mb-3 centratino">
        <label for="exampleInputPassword1" class="form-label">Sottotitolo</label>
        <input value="{{old('subtitle')}}" name="subtitle" type="text" class="form-control" id="subtitle">
      </div>
      
      <div class="centratino mb-3">
      <textarea value="{{old('body')}}" name="body" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
      </div>

      <div class="mb-3 centratino">
        <label for="img" class="form-label">Immagine</label>
        <input name="img" type="file" class="form-control" id="img">
      </div>

      <div class="mb-3 centratino">
        <label for="img" class="form-label">Categoria:</label>
        <select name="category" id="category" class="form-control text-capitalize">
          @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>
     
      <button type="submit" class="btn btn-danger">Invio</button>
    </form>
    
  </div>
</div> 
<div class="container">
  <div class="row">
    <div class="col-12 col-md-4">
      <div class="mb-3 centratino">
        <label for="img" class="form-label">Immagine</label>
        <input name="img" type="file" class="form-control" id="img">
      </div>
    </div>
  </div>
</div> --}}


</x-layout>