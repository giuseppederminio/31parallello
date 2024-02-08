
<x-layout1>

    <h1 class="text-center">le nostre camere e non solo</h1>
    <div class="container">
    <div class="row">
        @foreach($immagini as $immagine)
            <div class="col-12 col-md-3 m-4">
                <div class="card dimim">
                    <img src="{{ asset('img/' . $immagine->getFilename()) }}" class="card-img-top cover-container" alt="{{ $immagine->getFilename() }}">
                  
                </div>
            </div>
        @endforeach
    </div>
</div>
</x-layout1>


    

