<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top p-0">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{ route('welcome') }}"><img src="/storage/img/logotipo.png"
                alt="logotipo"></a>
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
            <button class="btn my-bg-quar btn-info-custom ms-auto me-3 user-btn" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                {{ Auth::user()->name }} <i class="fa-solid fa-user ms-1"></i>
            </button>
        @else
            <button id="login-btn" class="btn my-bg-quar btn-info-custom ms-auto me-3 user-btn" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <i class="fa-regular fa-user"></i>
            </button>

        @endauth

        <button class="navbar-toggler py-2 btn-info-custom my-bg-quar btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-compass fs-5"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white link-navbar" href="{{ route('indexArticle') }}">Tutti gli articoli</a>
                </li>


                <li class="nav-item dropdown list-unstyled">
                    <a class="nav-link dropdown-toggle text-white link-navbar" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>

                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li> <a class="dropdown-item categorie-navbar"
                                    href="{{ route('byCategory', ['category' => $category]) }}">{{ $category->name }}</a>
                            </li>
                            @if (!$loop->last)
                                <hr class="dropdown-divider">
                            @endif
                        @endforeach
                    </ul>
                </li>

                <li>
                    <form class="d-flex justify-content-center form-search-nav py-3 py-md-0" role="search" method="GET"
                        action="{{ route('searchArticles') }}">
                        <input class="form-control input-custom me-2 search-bar-nav" type="search" name="query"
                            placeholder="Cerca" aria-label="Search">
                        <button class="btn my-bg-quar btn-info-custom" type="submit" id="basic-addon2"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </li>
            </ul>
        </div>
    </div>


</nav>

<script>
    let btnLogin = document.querySelector('#login-btn')
   
    btnLogin.addEventListener('click', () => {
        localStorage.setItem('offcanvasOpen', true)
    })

</script>
