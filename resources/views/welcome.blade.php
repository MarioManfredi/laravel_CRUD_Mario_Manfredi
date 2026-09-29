<x-layout>
    <header class="container-fluid vh-100 bg-custom">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center mt-5">
                <h1 class="text-center">Benvenuti al Blog</h1>
            </div>
        </div>
    </header>

   @if(session('message'))
        <script>
            alert("{{ session('message') }}");
        </script>
    @endif
</x-layout>