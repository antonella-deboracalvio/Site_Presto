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
            <div class="row justify-content-evenly align-items-center mt-5 bg-light py-5 rounded mx-1 border">

                @if ($article_to_check->images->count())

                    @foreach ($article_to_check->images as $key => $image)
                        <div class="col-6 col-md-4 d-flex justify-content-evenly align-items-center  p-3 mt-4">
                            <img class="revisor-image-custom rounded" src="{{ $image->getUrl(300, 300) }}"
                                alt="Immagine {{ $key + 1 }} dell'articolo {{ $article_to_check->title }}"
                                class="img-fluid">
                        </div>


                        {{-- ratings --}}
                        <div class="col-5 col-md-3 h-100 ps-3">
                            <div class="card-body">
                                <h5 class="noto-bold">
                                    Ratings
                                </h5>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{$image->adult}}"></div>
                                    </div>
                                    <div class="col-10">Adult</div>

                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{$image->violence}}"></div>
                                    </div>
                                    <div class="col-10">Violence</div>

                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{$image->spoof}}"></div>
                                    </div>
                                    <div class="col-10">Spoof</div>

                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{$image->racy}}"></div>
                                    </div>
                                    <div class="col-10">Racy</div>

                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{$image->medical}}"></div>
                                    </div>
                                    <div class="col-10">Medical</div>

                                </div>


                            </div>

                        </div>
                        {{-- labels --}}
                        <div class="col-12 col-md-2 h-100 mt-2 mt-md-0 px-4 ps-5 px-md-0 ">
                            <div class="card-body">
                                <h5 class="noto-bold">Labels</h5>
                                @if ($image->labels)
                                    @foreach ($image->labels as $label)
                                        #{{ $label }}
                                    @endforeach
                                @else
                                <p class="fst-italic">No labels</p>
                                @endif
                            </div>
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
