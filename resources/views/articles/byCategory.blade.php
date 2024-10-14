<x-layout>
     

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-2">Articoli della categoria <span class="text-info">{{$category->name}}</span></h1>
            </div>
            <div class="row">
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

            </div>


</x-layout>