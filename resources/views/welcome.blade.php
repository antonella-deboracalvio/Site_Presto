<x-layout>
    {{-- <div class="container">
        <div class="row">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3 card-custom">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">Non ci sono articoli</h3>
                </div>
            @endforelse
        </div>
    </div> --}}









    <div class="wrapper container-fluid">
        <h2 class="text-center m-5">Gli ultimi articoli</h2>
        <div class="row justify-content-center">
            @forelse ($articles as $article)
                <div class="col-11 articles-home align-content-center" data-aos="fade-right">
                    <div class="row">
                        <div class="col-4 container-vetro align-content-center ms-5">
                            <h3>{{ $article->title }}</h3>

                        </div>

                        <div class="col-4 align-content-center ms-auto me-5 preview-last-articles">
                            <h3 class="text-white">€{{ $article->price }}</h3>
                            <h3 class="text-white">{{ $article->category->name }}</h3>
                            <a href="{{ route('detailArticle', compact('article')) }}" class="btn btn-primary">Maggiori
                                Informazioni</a>

                        </div>
                    </div>

                </div>


            @empty
                <div class="col-12">
                    <h3 class="text-center">Non ci sono articoli</h3>
                </div>
            @endforelse
        </div>
    </div>

</x-layout>
