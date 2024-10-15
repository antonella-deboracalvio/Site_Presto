<x-layout>
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            
            <div class="col-6 ">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </a>
                </div>
            </div>
            <div class="col-6">
                <h1>{{ $article->title }}</h1>
                <p>Prezzo: €{{ $article->price }} </p>
                <p>Categoria: {{ $article->category->name }}</p>
                <p>Inserzionista: {{ $article->user->name }}</p>
                <p>Data di creazione: {{ $article->created_at->format('d/m/Y') }}</p>
            </div>
            <div class="col-12 mt-3">
                <p>Descrizione: {{ $article->description }}</p>
            </div>
        </div>
    </div>
    
    
    
    
    
</x-layout>
