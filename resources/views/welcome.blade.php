<x-layout>
    <header class="container-fluid header-custom">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </header>

    <div class="wrapper container-fluid">
        
        <div class="row justify-content-center">
            
            @forelse ($articles as $article)
                <a href="{{ route('detailArticle', compact('article')) }}" class=" col-11 articles-home mt-3 text-decoration-none align-content-center rounded-3" data-aos="fade-right">
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





