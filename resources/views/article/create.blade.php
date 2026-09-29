<x-layout>
    <header class="container-fluid min-vh-100 bg-secondary">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <h1 class="text-center">Crea un Articolo</h1>
            </div>
            
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            
           <x-layout-errors/>
            
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-6 mt-5">
                    <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data" class="custom-shadow roundend-4 p-3">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" name="title" value="{{old('title')}}" class="form-control" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo</label>
                            <input type="number" name="price" value="{{old('price')}}" class="form-control" id="price">
                        </div>
                        <div class="mb-3">
                            <label for="typology" class="form-label">Tipologia</label>
                            <input type="text" name="typology" value="{{old('typology')}}" class="form-control" id="typology">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Contenuto</label>
                            <textarea name="body" class="form-control" id="body" cols="30" rows="10">{{old('body')}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Immagine</label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-secondary">Crea Articolo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
</x-layout>