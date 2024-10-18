<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <h1 class="my-text-main fw-bold text-center display-2">{{__("ui.all articles")}}</h1>
            </div>
        </div>
        <div class="row justify-content-evenly">
            @forelse ($articles as $article)
            <div class="col-6 col-md-4 mt-4">
                <x-card :article="$article" />
            </div>
        @empty
            <div class="col-5">
                <h3 class="text-center">{{__("ui.no articles")}}</h3>
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
