<x-layout>
    
    
    <h1>LAVORA CON NOI</h1>
    
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2>Lavora come amministratore</h2>
                <p>Cosa farai: Ti occuperai della gestione del sito e dei suoi contenuti nella sua interezza</p>
                <h2>Lavora come revisore</h2>
                <p>Cosa farai: Ti occuperai di vagliare gli articoli scritti dagli utenti con il ruolo di scrittore</h2>
                    <h2>Lavora come redattore</h2>    
                    <p>Cosa farai: Ti occuperai della scrittura degli articoli del sito</p>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
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
                    
                    
                    <form action="">
                        @csrf
                        <div>
                            <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                            <select name="role" id="role" class="form-control">
                                <option value="admin">Amministratore</option>
                                <option value="revisor">Revisore</option>
                                <option value="writer">Redattore</option>
                            </select>
                        </div>
                        <div>
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{old('email', Auth::user()->email)}}">
                        </div>
                        <div>
                            <label for="message" class="form-label">Parlaci di te</label>
                            <textarea name="message" class="form-control" id="message" value="{{old('message')}}">
                            
                        </div>
                        <div>
                            <button>
                                Invia la tua candidatura
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
        
        
        
        
    </x-layout>