<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="my-text-main fw-bold text-center display-3">{{__("ui.$category->name")}}</h1>
            </div>
        </div>
        <div class="row w-100 justify-content-evenly">
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
    {{-- <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center my-5">
                {{ $articles->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div> --}}
</x-layout>