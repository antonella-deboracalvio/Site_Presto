<x-layout>
    <h1>Hello world!</h1>

    <div>
        @forelse ($articles as $article)
            <div class="col-12 col-md-6">
                <x-card :article="$article" />
            </div>
        @empty
            <div class="col-12">
                <h3 class="text-center">Non ci sono articoli</h3>
            </div>
        @endforelse
    </div>
</x-layout>