<x-layout>
    @if(session()->has('message'))
    <div class="row justify-content-center">
        <div class="col-5 alert alert-success text-center shadow rounded">
            {{ session('message') }}
        </div>
    </div>
    @endif
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div>
                    <h1 class="display-2 text-center">
                        Articoli in revisione
                    </h1>
                </div>
                
            </div>
        </div>
        @if($article_to_check)
        <div class="row">
            <div class="col-md-8">
                <div class="row justify-content-center">
                    @for ($i = 0; $i < 6; $i++)
                    <div class="col-12 col-md-4 mt-3">
                        <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" alt="Immagine segnaposto" class="img-fluid rounded shadow">
                        
                    </div>
                    
                    @endfor
                </div>
                <div class="col-md-4">
                    <div>
                        <h1>{{$article_to_check->title}}</h1>
                        <h3>Autore: {{$article_to_check->user->name}}</h3>
                        <h4>€{{$article_to_check->price}}</h4>
                        <h4 class="fst-italic text-muted">#{{$article_to_check->category->name}}</h4>
                        <p>{{$article_to_check->description}}</p>
                    </div>
                    <div>
                        <form action="{{ route('rejectArticle', ['article' => $article_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            
                            <button type="submit" class="btn btn-danger">Rifiuta</button>
                        </form>
                        
                        <form action="{{ route('acceptArticle', ['article' => $article_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            
                            <button type="submit" class="btn btn-success">Approva</button>
                        </form>
                    </div>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-12">
                    <h1>Nessun articolo da revisionare</h1>
                    <a href="{{ route('welcome') }}" class="btn btn-primary">Torna alla home</a>
                </div>
            </div>
            @endif
        </div>
        
        
        
    </x-layout>