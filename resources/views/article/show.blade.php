<x-layout>
    <div class="container-fluid vh-100 bg-secondary">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Articolo con id {{$article->id}}</h1>
            </div>
        </div>
        <div class="row mt-2 justify-content-center align-items-center">
            <div class="col-12 col-md-4 mt-3 d-flex justify-content-center mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top img-fluid card-custom" alt="Prodotto {{$article->name}}">    
                    <h5 class="card-title">{{$article->title}}</h5>
                    <h4 class="lead">{{$article->typology}}</h4>
                    <h3 class="card-text">{{$article->price}} €</h3>
                    @if($article->user)    
                        <p class="card-text">Creato dall'utente {{$article->user->name}}</p>
                    @endif
                    <p class="card-text">{{$article->body}}</p>
                    <a href="{{route('article.index')}}" class="btn btn-secondary action-btn">Torna indietro</a>
                    <a href="{{route('article.edit', compact('article'))}}" class="btn btn-success mt-2 action-btn">Modifica articolo</a>
                    <form class="mt-2 mx-auto" method="POST" action="{{route('article.destroy', compact('article'))}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo articolo?')" class="btn btn-danger">Elimina articolo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>