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









    <div class="wrapper container">
        <div class="row">
            @forelse ($articles as $article)
                <div class="card-custom col-5 justify-content-between col-md-3">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">Non ci sono articoli</h3>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
