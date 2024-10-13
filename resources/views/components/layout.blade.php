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





    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            


            @guest
            <div class="accordion " id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Accedi
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
        
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            </div>
                          
                            <button type="submit" class="btn btn-primary">Accedi</button>
                          </form>
                    </div>
                  </div>
                </div>
                
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Registrati
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="name">
                                
                            </div>
                            
                            
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            </div>
                            
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Registrati</button>
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
