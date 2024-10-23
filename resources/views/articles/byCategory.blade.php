<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="my-text-main fw-bold text-center display-3">{{__("ui.$category->name")}}</h1>
            </div>
        </div>
        {{-- Ordina per --}}
        
        @if ($articles->count() > 0)
            <div class="col-12 dropdown orderBy-custom">
                <button class="btn my-bg-quar btn-info-custom dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ordina per
                </button>
                <ul class="dropdown-menu">
                    
                    <li><a class="dropdown-item orderBy-filter" href="{{ route('byCategoryPriceAsc',['category' => $category]) }}">Dal meno caro</a></li>
                    
                    <hr class="dropdown-divider m-0">
                    
                    <li><a class="dropdown-item orderBy-filter" href="{{ route('byCategoryPriceDesc',['category' => $category]) }}">Dal più caro</a></li>
                    
                    <hr class="dropdown-divider m-0">
                    
                    <li><a class="dropdown-item orderBy-filter" href="{{ route('byCategory', ['category' => $category]) }}">Dal più recente</a></li>
                    
                </ul>
            </div>
        @endif
        
        {{-- fine Ordina per --}}
        
        <div class="row justify-content-evenly px-3 px-md-0">
            @forelse ($articles as $article)
                <div class="col-12 col-md-4 mt-4 justify-content-center d-flex">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center display-2">{{__("ui.no article in this category")}}</h3>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>