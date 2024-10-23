<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top p-0">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{ route('welcome') }}"><img src="/storage/img/logotipo.png"
                alt="logotipo"></a>


        <button class="navbar-toggler py-2 btn-info-custom my-bg-quar btn" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-compass fs-5"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-between align-items-center" id="navbarNav">

            <ul class="navbar-nav">
                {{-- tutti gli articoli --}}
                <li class="nav-item list-unstyled">
                    <a class="nav-link text-white link-navbar" href="{{ route('indexArticle') }}">
                        {{ __('ui.all articles') }}
                    </a>
                </li>

                <li class="nav-item list-unstyled dropdown">
                {{-- tutte le categorie --}}
                    <a class="nav-link dropdown-toggle text-white link-navbar" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('ui.categories') }}
                    </a>
                    <div class="dropdown-menu dropdownCustom w-100 bg-transparent justify-content-sm-start">
                        @foreach ($categories as $category)

                                <a class="text-decoration-none my-text-main text-nowrap py-md-2 contenitore-categoria-navbar d-inline-block categorie-navbar px-2 mt-2 mt-md-0 d-lg-block"
                                    href="{{ route('byCategory', ['category' => $category]) }}">{{ __("ui.$category->name") }}</a>
                            
                            @if (!$loop->last)
                                <hr class="dropdown-divider m-0">
                            @endif
                        @endforeach
                    </div>
                </li>
            </ul>


            {{-- search bar --}}
            <ul class="m-0 p-0">
                <li class="nav-item list-unstyled">
                    <form class="d-flex justify-content-center align-items-center form-search-nav py-3 py-md-0" role="search"
                        method="GET" action="{{ route('searchArticles') }}">
                        <input class="form-control input-custom me-2 search-bar-nav" type="search" name="query"
                            placeholder="{{ __('ui.search') }}" aria-label="Search">
                        <button class="btn my-bg-quar btn-info-custom" type="submit" id="basic-addon2"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </li>
            </ul>
            {{-- fine search bar --}}


            {{-- selezione lingua --}}
            <ul class="m-0 me-3 list-unstyled container-lang">
                <li class="lang-button-custom">
                    <div class="dropstart">
                        <button class="bg-transparent border-0 p-0 btn-flag" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="{{ asset('vendor/blade-flags/language-' . App::getLocale() . '.svg') }}"
                                width="32" height="32" />
                        </button>
                        <div class="dropdown-menu w-100 text-nowrap bg-transparent border-0 pt-0 text-end me-2">
                            @if (App::getLocale() == 'it')
                                <span class="mb-2"> <x-_locale lang='en' /></span>
                                <span class="mb-2"> <x-_locale lang='de' /></span>
                                <span class="mb-2"> <x-_locale lang='ja' /></span>
                            @elseif (App::getLocale() == 'en')
                                <span class="mb-2"> <x-_locale lang='it' /></span>
                                <span class="mb-2"> <x-_locale lang='de' /></span>
                                <span class="mb-2"> <x-_locale lang='ja' /></span>
                            @elseif (App::getLocale() == 'de')
                                <span class="mb-2"> <x-_locale lang='it' /></span>    
                                <span class="mb-2"> <x-_locale lang='en' /></span>
                                <span class="mb-2"> <x-_locale lang='ja' /></span>
                            @elseif (App::getLocale() == 'ja')
                                <span class="mb-2"> <x-_locale lang='it' /></span>    
                                <span class="mb-2"> <x-_locale lang='en' /></span>
                                <span class="mb-2"> <x-_locale lang='de' /></span>
                            @endif
                        </div>
                    </div>

                </li>
            </ul>
            {{-- fine selezione lingua --}}

        </div>

    </div>

    {{-- pulsante utente --}}
    @auth

        @if (Auth::user()->is_revisor)
            <li class="nav-item list-unstyled">
                @if (\App\Models\Article::toBeRevisedCount() > 0)
                    <span class="notifica-revisore translate-middle badge rounded-pill bg-danger">
                        {{ \App\Models\Article::toBeRevisedCount() }}
                    </span>
                @endif
            </li>
        @endif

        <button class="btn my-bg-quar btn-info-custom ms-auto me-3 text-nowrap user-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            {{ Auth::user()->name }} <i class="fa-solid fa-user ms-1"></i>
        </button>
    @else
        <button class="btn my-bg-quar btn-info-custom ms-auto me-3 user-btn login-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <i class="fa-regular fa-user"></i>
        </button>

    @endauth

{{-- fine pulsante utente --}}
</nav>

