<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('indexArticle') }}">Tutti gli articoli</a>
                </li>
            </ul>
            @guest
                <ul class="ms-auto">
                    <a class="nav-link dropdown-toggle text-black" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="fa-regular fa-user"></i></a>

                    <div class="dropdown-menu rounded-3 ms-auto">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="email">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            </div>

                            <button type="submit" class="btn btn-primary">Accedi</button>
                        </form>
                    </div>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#">Benvenuto {{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('createArticle') }}">Inserisci un articolo</a>
                    </li>

                    <form class="dropdown-item" action="{{ route('logout') }}" method="post">@csrf <button
                            class="btn btn-danger" type="submit"> Logout </button> </form>
                </ul>

            @endguest

        </div>
    </div>
    
    
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
        aria-controls="offcanvasRight">prova</button>
</nav>


