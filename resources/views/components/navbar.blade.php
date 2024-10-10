<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="#">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Registrati</a>
          </li>

          @else
          <li class="nav-item">
            <a class="nav-link" href="#">Benvenuto {{ Auth::user()->name }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                </li>

                <form action="{{ route('logout') }}" method="post">@csrf</form>
            </ul>
          </li>
          @endguest
         
         
        </ul>
      </div>
    </div>
  </nav>