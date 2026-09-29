<x-layout>
    <div class="container-fluid vh-100 bg-secondary">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">
                <h1 class="text-center">Contattaci</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form class="custom-shadow roundend-4 p-3" method="POST" action="{{route('mail.store')}}">
                    @csrf 
                    <div class="mb-3">
                        <label for="username" class="form-label">Inserisci il tuo nome completo</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Inserisci la tua mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Scrivici il tuo messaggio</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-secodnary">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>