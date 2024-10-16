<x-layout>
    @if(session()->has('message'))
    <div class="row justify-content-center">
        <div class="col-5 alert alert-success text-center shadow rounded">
            {{ session('message') }}
        </div>
    </div>
    @endif
    <header class="container-fluid header-custom">
        <div class="row h-100">
            <div class="col-11 d-flex justify-content-end align-items-center wrapper-btn-info-header-custom">
                <a class="my-text-main btn-info-header-custom text-decoration-none my-bg-quar rounded" href="{{ route('createArticle') }}">Inserisci un articolo</a>
            </div>
        </div>
    </header>

    <div class="wrapper container-fluid">
        
        <div class="row justify-content-evenly">
            
            @forelse ($articles as $article)
                <a href="{{ route('detailArticle', compact('article')) }}" class="col-md-5 mx-3 col-11 articles-home mt-md-5 text-decoration-none align-content-center rounded-3" data-aos="zoom-in-up">
                    <div class="row">
                        <div class="col-4 container-vetro align-content-center ms-5">
                            <h3 class="text-white">{{ $article->title }}</h3>
                        </div>
                        <div class="col-4 align-content-center ms-auto me-5 preview-last-articles">
                            <h3 class="text-white">€{{ $article->price }}</h3>
                            <h3 class="text-white">{{ $article->category->name }}</h3>
                        </div>
                    </div>
                </a>
            @empty
                <div class="col-12">
                    <h3 class="text-center">Non ci sono articoli</h3>
                </div>
            @endforelse
        </div>
    </div>


</x-layout>





