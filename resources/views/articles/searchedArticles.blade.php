<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 my-3 text-center">
                <h1 class="my-text-main fw-bold text-center display-3">{{__("ui.search results")}}: <span class="my-text-acc">{{ $query }}</span></h1>
            </div>
        </div>
        <div class="row justify-content-evenly">
            @forelse ($articles as $article)
            <div class="col-6 col-md-4 mt-4">
                <x-card :article="$article" />
            </div>
        </div>
        @empty
            <div class="row d-flex align-content-center">
                <div class="col-12">
                    <h3 class="text-center display-2">{{__("ui.there are no articles for your search")}}</h3>
                </div>
            </div>
        @endforelse
    </div>
    {{-- <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center my-5">
                {{ $articles->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div> --}}
</x-layout>

