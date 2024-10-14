<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            
            <button type="button" class="my-bg-quar btn-info-custom btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            
            @guest
            <div class="accordion" id="accordionExample">
                <div class="accordion-item my-bg-sec">
                  <h2 class="accordion-header">
                    <button class="accordion-button my-bg-main text-white collapsed btn-accordion-custom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Accedi
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
        
                            <div class="mb-3 container-custom">
                              
                              <input placeholder="Email" type="email" class="input-custom w-100" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            </div>

                            <div class="mb-3 container-custom">
                              
                              <input placeholder="Password" type="password" class="input-custom w-100" id="exampleInputPassword1" name="password">
                            </div>
                          
                            <button type="submit" class="btn btn-info-custom my-bg-quar">Accedi</button>
                          </form>
                    </div>
                  </div>
                </div>
                
                <div class="accordion-item my-bg-sec">
                  <h2 class="accordion-header">
                    <button class="accordion-button my-bg-main text-white collapsed btn-accordion-custom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Registrati
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3 container-custom">
                                <input placeholder="Nome" type="text" class="input-custom w-100" id="nome" name="name">
                            </div>
                            <div class="mb-3 container-custom">
                                <input placeholder="Email" type="email" class="input-custom w-100" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            </div>
                            <div class="mb-3 container-custom">
                                <input placeholder="Password" type="password" class="input-custom w-100" id="exampleInputPassword1" name="password">
                            </div>
                            <div class="mb-3 container-custom">
                                <input placeholder="Conferma Password" type="password" class="input-custom w-100" id="exampleInputPassword1" name="password_confirmation">
                            </div>
                            
                            <button type="submit" class="btn btn-info-custom my-bg-quar">Registrati</button>
                        </form>
                    </div>
                  </div>
                </div>
              </div>

              @else
              
              <form class="dropdown-item" action="{{ route('logout') }}" method="post">@csrf <button
                class="btn btn-danger" type="submit"> Logout </button> </form>

            @endguest


        </div>
    </div>
</body>

</html>
