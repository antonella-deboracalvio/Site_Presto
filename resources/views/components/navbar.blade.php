<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{ route('welcome') }}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('indexArticle')}}">Tutti gli articoli</a>
            </li>
        </ul>
        
        <li class="nav-item dropdown list-unstyled">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Categorie
        </a>
        
        <ul class="dropdown-menu">
            @foreach ($categories as $category)
            <li> <a class="dropdown-item" href="{{ route('byCategory', ['category' => $category]) }}">{{ $category->name }}</a></li>
            @if(!$loop->last)
            <hr class="dropdown-divider">
            @endif
            @endforeach
        </ul>
    </li>
</div>

@auth


<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('createArticle') }}">Inserisci un articolo</a>
    </li>
</ul>
<ul class="navbar-nav ms-auto">
    {{-- <li class="nav-item">
        <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
    </li> --}}
</ul>

<button class="btn my-bg-quar btn-info-custom " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
aria-controls="offcanvasRight">{{ Auth::user()->name }} <i class="fa-regular fa-user ms-1"></i></button>
@else
<button class="btn my-bg-quar btn-info-custom ms-auto" type="button" data-bs-toggle="offcanvas"
data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
class="fa-regular fa-user"></i></button>

@endauth





</div>
</div>



</nav>
