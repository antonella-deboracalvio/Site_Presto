<x-layout>
    <div class="container justify-content-center">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="my-text-main fw-bold text-center display-1 noto-bold">{{__("ui.all articles")}}</h1>
            </div>
            
            
            
            
        </div>
        {{-- Ordina per --}}
        
        
        <div class="col-12 dropdown orderBy-custom">
            <button class="btn my-bg-quar btn-info-custom dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ordina per
            </button>
            <ul class="dropdown-menu">
                
                <li><a class="dropdown-item orderBy-filter" href="{{ route('orderByPriceAsc') }}">Dal meno caro</a></li>
                
                <hr class="dropdown-divider m-0">
                
                <li><a class="dropdown-item orderBy-filter" href="{{ route('orderByPriceDesc') }}">Dal più caro</a></li>
                
                <hr class="dropdown-divider m-0">
                
                <li><a class="dropdown-item orderBy-filter" href="{{ route('indexArticle') }}">Dal più recente</a></li>
                
            </ul>
        </div>
        
        {{-- fine Ordina per --}}
        
        
        <div class="row justify-content-evenly px-3 px-md-0">
            @forelse ($articles as $article)
            <div class="col-12 col-md-4 mt-4 justify-content-center d-flex">
                <x-card :article="$article" />
            </div>
            @empty
            <div class="col-5">
                <h3 class="text-center noto-bold">{{__("ui.no article")}}</h3>
            </div>
            @endforelse
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center my-5">
                {{ $articles->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
    
    
</x-layout>
