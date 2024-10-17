<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="my-text-main fw-bold text-center display-3">{{$category->name}}</h1>
            </div>
        </div>
        <div class="row justify-content-evenly">
            @forelse ($articles as $article)
                <div class="col-6 col-md-4 mt-3">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center display-2">Non ci sono articoli in questa categoria</h3>
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