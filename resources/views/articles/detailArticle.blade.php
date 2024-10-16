<x-layout>
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            
            <div class="col-6 ">
                <div id="carouselExampleIndicators" class="carousel slide ">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner rounded">
                      <div class="carousel-item active">
                        <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col-6  d-flex flex-column justify-content-center">
                <h1>{{ $article->title }}</h1>

                <a class="btn my-bg-quar btn-info-custom w-25 mb-5"
                href="{{ route('byCategory', ['category' => $article->category]) }}">{{ $article->category->name }} <i class="fa-solid fa-circle-right ms-1"></i></a>
                <h2>€{{ $article->price }} </h2>
                <p>Inserzionista: {{ $article->user->name }}</p>
                <p>Data di creazione: {{ $article->created_at->format('d/m/Y') }}</p>
                <a class="btn my-bg-quar btn-info-custom w-25 mb-5" href="#" > Contatta <i class="fa-solid fa-message ms-1"></i></a>
            </div>
            <div class="col-12 mt-3">
                <p>Descrizione: {{ $article->description }}</p>
            </div>
        </div>
    </div>
    
    
    
    
    
</x-layout>
