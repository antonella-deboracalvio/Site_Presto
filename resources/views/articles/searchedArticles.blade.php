<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 my-3 text-center">
                <h1 class="my-text-main fw-bold text-center display-3">{{ __('ui.search results') }}: <span
                        class="my-text-acc">{{ $query }}</span></h1>
            </div>
        </div>

        {{-- Ordina per --}}
        
        
        <div class="col-12 dropdown orderBy-custom">
            <button class="btn my-bg-quar btn-info-custom dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ordina per
            </button>
            <ul class="dropdown-menu">
                
                <li><a class="dropdown-item orderBy-filter" href="{{ route('searchArticlesPriceAsc',['query' => $query]) }}">Dal meno caro</a></li>
                
                <hr class="dropdown-divider m-0">
                
                <li><a class="dropdown-item orderBy-filter" href="{{ route('searchArticlesPriceDesc',['query' => $query]) }}">Dal più caro</a></li>
                
                <hr class="dropdown-divider m-0">
                
                <li><a class="dropdown-item orderBy-filter" href="{{ route('searchArticles', ['query' => $query]) }}">Dal più recente</a></li>
                
            </ul>
        </div>
        
        {{-- fine Ordina per --}}


        <div class="row justify-content-evenly px-3 px-md-0">
            @forelse ($articles as $article)
                <div class="col-12 col-md-4 mt-4 justify-content-center d-flex">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center display-2">{{__("ui.there are no articles for your search")}}</h3>
                </div>
            @endforelse
        </div>
    </div>
    {{-- <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center my-5">
                {{ $articles->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div> --}}
</x-layout>



