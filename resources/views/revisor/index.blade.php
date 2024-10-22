<x-layout>
    @if (session()->has('message'))
        <div class="row justify-content-center">
            <div class="col-5 alert alert-success text-center shadow rounded">
                {{ session('message') }}
            </div>
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 mt-3">
                <div>
                    <h1 class="display-3 text-center montserrat-bold">
                        {{ __('ui.articles under review') }}
                    </h1>
                </div>

            </div>
        </div>

        {{-- immagini --}}

        @if ($article_to_check)
            <div class="row justify-content-center align-items-center mt-5">

                @if ($article_to_check->images->count())

                    @foreach ($article_to_check->images as $key => $image)
                        <div class="col-6 col-md-4 d-flex justify-content-evenly align-items-center">
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
            <div class="row justify-content-center align-items-center mt-5 mx-3 w-100 ms-0">
                <div class="col-12 col-md-5 mt-3 mt-md-0 d-flex bg-light rounded border pt-1 flex-column">
                    <h1 class="montserrat-bold border-bottom w-100">{{ $article_to_check->title }}</h1>
                    <p class="w-50 mb-2 noto-bold w-100">{{ $article_to_check->category->name }}</p>
                    <h2 class="text-danger montserrat-bold border-top border-bottom py-1">
                        €{{ $article_to_check->price }} </h2>
                    <p>{{ __('ui.data di creazione') }}: {{ $article_to_check->created_at->format('d/m/Y') }}</p>
                    <p class="border-bottom pb-2">{{ __('ui.advertiser') }}: {{ $article_to_check->user->name }}</p>
                    <a class="btn my-bg-quar btn-info-custom w-50 mb-3 noto-bold w-100"
                        href="#">{{ __('ui.contact') }}
                        <i class="fa-solid fa-message ms-1"></i>
                    </a>
                    <p class="d-block mb-1 noto-bold border-top pt-2">{{ __('ui.description') }}:</p>
                    <p> {{ $article_to_check->description }}</p>
                </div>


                <div class="col-12 mt-3 d-flex justify-content-center">
                    <form action="{{ route('rejectArticle', ['article' => $article_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <button type="submit" class="btn btn-danger">{{ __('ui.reject') }}</button>
                    </form>

                    <form action="{{ route('acceptArticle', ['article' => $article_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <button type="submit" class=" btn btn-success ms-3">{{ __('ui.approve') }}</button>
                    </form>

                </div>



            </div>

    </div>
@else
    <div class="row justify-content-center align-items-center mt-5">
        <div class="col-12 text-center">
            <h1>{{ __('ui.no article to review') }}</h1>
            <a href="{{ route('welcome') }}"
                class="btn btn-info-custom my-bg-quar my-3 noto-bold">{{ __('ui.go back to the homepage') }}</a>
        </div>
    </div>
    @endif
    </div>



</x-layout>
