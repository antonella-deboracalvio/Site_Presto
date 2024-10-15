<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <h1>Tutti gli articoli</h1>
            </div>
        </div>
        <div class="row">
            @forelse ($articles as $article)
            <div class="col-12 col-md-4 mt-3">
                <x-card :article="$article" />
            </div>
        @empty
            <div class="col-12">
                <h3 class="text-center">Non ci sono articoli</h3>
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
