<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/storage/img/logo.png" type="image/x-icon">
    
    <title>Presto.it</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>

<body>
    <x-navbar />
    {{ $slot }}
    <x-footer />
    
    
    {{-- offcanvas con form di login/register --}}
    
    <div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            
            <button id="btn-close" type="button" class="my-bg-quar btn-info-custom btn-close" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div> 
            @endif
            
            @guest
            <div class="accordion" id="accordionExample">
                <div class="accordion-item my-bg-sec">
                    <h2 class="accordion-header">
                        <button class="accordion-button my-bg-main text-white collapsed btn-accordion-custom"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        Accedi
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form id="loginForm" method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            <div class="mb-3 container-custom">
                                
                                <input placeholder="Email" type="email" class="input-custom w-100 py-2"
                                id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            </div>
                            
                            <div class="mb-3 container-custom">
                                
                                <input placeholder="Password" type="password" class="input-custom w-100 py-2"
                                id="exampleInputPassword1" name="password">
                            </div>
                            
                            <button type="submit" class="btn btn-info-custom my-bg-quar">Accedi</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="accordion-item my-bg-sec">
                <h2 class="accordion-header">
                    <button class="accordion-button my-bg-main text-white collapsed btn-accordion-custom"
                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree">
                    Registrati
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3 container-custom">
                            <input placeholder="Nome" type="text" class="input-custom w-100 py-2"
                            id="nome" name="name">
         
                        </div>
                        <div class="mb-3 container-custom">
                            <input placeholder="Email" type="email" class="input-custom w-100 py-2"
                            id="email" aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="mb-3 container-custom">
                            <input placeholder="Password" type="password" class="input-custom w-100 py-2"
                            id="password" name="password">
                        </div>
                        <div class="mb-3 container-custom">
                            <input placeholder="Conferma Password" type="password"
                            class="input-custom w-100 py-2" id="password_confirmation"
                            name="password_confirmation">
                        </div>
                        
                        <button type="submit" class="btn btn-info-custom my-bg-quar">Registrati</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @else

   <div class="container">
                    <div class="row">
                        <div class="col-12 border rounded p-0">
                          <div class="w-100">
                            <a class="nav-link text-white text-center border-bottom py-3 my-bg-main btn-offcanvas-logged rounded-top" href="{{ route('createArticle') }}">Inserisci un articolo</a>

                            @if (Auth::user()->is_revisor)
                              @if (\App\Models\Article::toBeRevisedCount() > 0)
                                <span class="notifica-revisore-offcanvas translate-middle badge rounded-pill bg-danger">
                                  {{ \App\Models\Article::toBeRevisedCount() }}
                                </span>
                              @endif
                                <a href="{{ route('indexRevisor') }}" class="nav-link text-white my-bg-main position position-relative w-sm-25 text-center py-3 border-bottom btn-offcanvas-logged">Zona Revisore</a>
                            @endif

                          </div>

                            <form class="" action="{{ route('logout') }}" method="post">
                              @csrf 
                              <button class="rounded-bottom py-2 bg-danger text-white border-0 w-100" type="submit"> Logout <i class="fa-solid fa-person-through-window ms-1"></i></button> 
                            </form>

                        </div>
    
    @endguest
    
    
</div>
</div>


<script>
    let isOpen = localStorage.getItem('offcanvasOpen')
    let offcanvasRight = document.querySelector('#offcanvasRight')
    let btnClose = document.querySelector('#btn-close')
    if (isOpen == 'true') {
        offcanvasRight.classList.add('show')
    }
    btnClose.addEventListener('click', () => {
        localStorage.setItem('offcanvasOpen', false)
    })
</script>

</body>

</html>
