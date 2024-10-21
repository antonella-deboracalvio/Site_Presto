<x-layout>
    @if (session()->has('message'))
    <div class="row justify-content-center">
        <div class="col-5 alert alert-success text-center shadow rounded">
            {{ session('message') }}
        </div>
    </div>
    @endif
    
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-6">
                <div>
                    <h1 class="display-2 text-center">
                        {{__("ui.articles under review")}}
                    </h1>
                </div>
                
            </div>
        </div>
        
        {{-- immagini --}}
        
        @if ($article_to_check)
        <div class="row justify-content-center align-items-center mt-5">
            
            @if ($article_to_check->images->count())
            
            @foreach ($article_to_check->images as $key => $image)
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                <img class="revisor-image-custom mb-5" src="{{ $image->getUrl(300, 300) }}"
                alt="Immagine {{ $key + 1 }} dell'articolo {{ $article_to_check->title }}"
                class="img-fluid">
            </div>
            @endforeach
            @else
            
            
            <div class="row justify-content-center">
                @for ($i = 0; $i < 6; $i++)
                <div class="col-12 col-md-4 mt-3">
                    <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp"
                    alt="Immagine segnaposto" class="img-fluid rounded shadow">
                    
                </div>
                @endfor
            </div>
            
            @endif
            
        </div>
        {{-- dettagli --}}
        <div class="row justify-content-center align-items-center mt-5 mx-3">
            <div class="col-12  d-flex flex-column justify-content-center">
                <h1 class="text-align-center">{{ $article_to_check->title }}</h1>
                <p>{{__("ui.category")}}: {{ $article_to_check->category->name }}</p>
                
                <h2>€{{ $article_to_check->price }} </h2>
                <p>{{__("ui.data di creazione")}}: {{ $article_to_check->created_at->format('d/m/Y') }}</p>
                <p>{{__("ui.advertiser")}}: {{ $article_to_check->user->name }}</p>
                <div class="col-12">
                    <p>{{__("ui.description")}}: {{ $article_to_check->description }}</p>
                    
                </div>
                <a class="btn my-bg-quar btn-info-custom w-25 mb-5" href="#">{{__("ui.contact")}}<i
                    class="fa-solid fa-message ms-1"></i></a>
            </div>


                <div class="col-12 mt-3 d-flex justify-content-center">
                    <form action="{{ route('rejectArticle', ['article' => $article_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        
                        <button type="submit" class="btn btn-danger">{{__("ui.reject")}}</button>
                    </form>
                    
                    <form action="{{ route('acceptArticle', ['article' => $article_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        
                        <button type="submit" class=" btn btn-success ms-3">{{__("ui.approve")}}</button>
                    </form>

                </div>
                
                
                
            </div>
            
        </div>
        @else
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-6 ">
                <h1>{{__("ui.no article to review")}}</h1>
                <a href="{{ route('welcome') }}" class="btn btn-primary my-3">{{__("ui.go back to the homepage")}}</a>
            </div>
        </div>
        @endif
    </div>
    
    
    
</x-layout>
