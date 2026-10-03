<x-layout>
    <header class="container-fluid min-vh-100 bg-secondary">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <h1 class="text-center">Modifica Articolo con id {{$article->id}}</h1>
            </div>
            
            <x-layout-message/>
            
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-6 mt-5">
                    <form method="POST" action="{{route('article.update', compact('article'))}}" enctype="multipart/form-data" class="custom-shadow roundend-4 p-3">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" name="title" value="{{$article->title}}" class="form-control" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo</label>
                            <input type="number" name="price" value="{{$article->price}}" class="form-control" id="price">
                        </div>
                        <div class="mb-3">
                            <label for="typology" class="form-label">Tipologia</label>
                            <input type="text" name="typology" value="{{$article->typology}}" class="form-control" id="typology">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Contenuto</label>
                            <textarea name="body" class="form-control" id="body" cols="30" rows="10">{{$article->body}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label me-3">Immagine attuale</label>
                            <img src="{{Storage::url($article->img)}}" width="200" height="300" alt="Immagine dell'articolo: {{$article->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Immagine</label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-secondary">Modifica Articolo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
</x-layout>