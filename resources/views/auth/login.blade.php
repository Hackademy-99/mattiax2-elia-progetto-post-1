<x-layout>
    {{-- ! snippet errori --}}
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif

    {{-- ** Sessione avvenuta --}}

    @if(session()->has('message'))
   <div class="alert alert-success">
       {{ session()->get('message') }}
   </div>
	@endif

    
    <form method="POST" action="{{route('login')}}"
    >
    @csrf
        <div class="mb-3 container ">
            <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="name" name="name" class="form-control" id="name">
          </div>
          <div class="mb-3 container ">
          <label for="exampleInputEmail1" class="form-label">Indirizzo mail</label>
          <input type="email" class="form-control" id="email" name="email">
          </div>
        <div class="mb-3 container">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
       
          <div class="mb-3 container d-flex justify-content-center text-center align-items-center ">
        <button type="submit" class="btn btn-primary">Accedi</button>
          </div>
      </form>










</x-layout>