<x-layout>

    <div class="container px-3 px-md-0 mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-6">
                @if ($article->images->count() > 0)

                    {{-- carosello --}}
                    <div id="carouselExample" class="carousel slide">
                        <button id="btnHeart" class="btn btn-light rounded-pill icon-heart my-text-acc">  <i id="heartIcon" class="fa-regular fa-heart "></i></button>
                        <div class="carousel-inner rounded">
                            {{-- foreach per il carosello --}}
                            
                            @foreach ($article->images as $key => $image)
                                <div class="carousel-item  @if ($loop->first) active @endif">
                                    <div class="bg-black"></div>
                                    <div>
                                        <img src="{{ $image->getUrl(300, 300) }}" class="d-block w-100 rounded shadow" alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">
                                    </div>
                
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
                    <div class="position-relative">
                        <button id="btnHeart" class="btn btn-light rounded-pill icon-heart my-text-acc">  <i id="heartIcon" class="fa-regular fa-heart"></i></button>
                        <img class="w-100 rounded" src="/storage/img/default.jpg" alt="Nessuna foto inserita dall'utente">
                    </div>
                @endif


            </div>
            <div class="col-11 col-md-5 ms-md-5 mt-3 mt-md-0 mx-2 me-md-0 d-flex bg-light rounded border pt-1 flex-column">
                <h1 class="montserrat-bold border-bottom w-100">{{ $article->title }}</h1>

                <a class="btn my-bg-quar btn-info-custom w-50 mb-2 noto-bold w-100"
                    href="{{ route('byCategory', ['category' => $article->category]) }}">{{__("ui.". $article->category->name)}}
                    <i class="fa-solid fa-circle-right ms-1"></i></a>
                <h2 class="text-danger montserrat-bold border-top border-bottom py-1">€{{ $article->price }} </h2>
                <p>{{__("ui.data di creazione")}}: {{ $article->created_at->format('d/m/Y') }}</p>
                <p class="border-bottom pb-2  mb-2">{{__("ui.advertiser")}}: {{ $article->user->name }}</p>
                <a class="btn my-bg-quar btn-info-custom w-50 mb-2 noto-bold w-100" href="#">{{__("ui.contact")}}
                    <i class="fa-solid fa-message ms-1"></i>
                </a>
                <p class="d-block mb-1 noto-bold border-top pt-2">{{__("ui.description")}}:</p>
                <p> {{ $article->description }}</p>
            </div>
        </div>

        <div class="row justify-content-evenly px-3 px-md-0 mt-5 bg-light py-5 rounded mx-1 border mb-5">
            <h2 class="text-center noto-bold">Articoli correlati</h2>
            @forelse ($suggestions as $suggestion)
            <div class="col-12 col-md-4 mt-4 justify-content-center d-flex">
                <x-card :article="$suggestion" />
            </div>
            @empty
            <div class="col-5">
                <h3 class="text-center noto-bold">{{__("ui.no article")}}</h3>
            </div>
            @endforelse
        </div>
    </div>

</x-layout>
