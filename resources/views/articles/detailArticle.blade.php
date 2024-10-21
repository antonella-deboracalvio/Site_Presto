<x-layout>

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-6">
                @if ($article->images->count() > 0)

                    {{-- carosello --}}
                    <div id="carouselExample" class="carousel slide">

                        <div class="carousel-inner rounded">
                            {{-- foreach per il carosello --}}
                            
                            @foreach ($article->images as $key => $image)
                                <div class="carousel-item  @if ($loop->first) active @endif">
                                    <div class="bg-black"></div>
                                        <img src="{{ $image->getUrl(300, 300) }}" class="d-block w-100 rounded shadow" alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">
                                    </div>
                            @endforeach
                            {{-- fine foreach --}}
                        </div>

                        @if ($article->images->count() > 1)
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        @endif

                    </div>

                @else
                    <img src="/storage/img/default.jpg" alt="Nessuna foto inserita dall'utente">
                @endif


            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                <h1>{{ $article->title }}</h1>

                <a class="btn my-bg-quar btn-info-custom w-50 mb-5"
                    href="{{ route('byCategory', ['category' => $article->category]) }}">{{ $article->category->name }}
                    <i class="fa-solid fa-circle-right ms-1"></i></a>
                <h2>€{{ $article->price }} </h2>
                <p>{{__("ui.data di creazione")}}: {{ $article->created_at->format('d/m/Y') }}</p>
                <p>{{__("ui.advertiser")}}: {{ $article->user->name }}</p>
                <a class="btn my-bg-quar btn-info-custom w-50 mb-5" href="#">{{__("ui.contact")}}<i
                        class="fa-solid fa-message ms-1"></i></a>
            </div>
            <div class="col-12 mt-3">
                <p>{{__("ui.description")}}: {{ $article->description }}</p>
            </div>
        </div>
    </div>

</x-layout>
