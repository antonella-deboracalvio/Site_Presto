<!-- Footer -->
<footer class="my-bg-ter text-center text-white footerCustom">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
          ><i class="fa-brands fa-facebook text-white text-white my-bg-main rounded-circle p-2 p-md-3"></i
        ></a>

        <!-- Twitter -->
        <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
          ><i class="fa-brands fa-x-twitter text-white my-bg-main rounded-circle p-2 p-md-3"></i></a>
  
        <!-- Google -->
        <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google text-white my-bg-main rounded-circle p-2 p-md-3"></i
        ></a>
  
        <!-- Instagram -->
        <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram text-white my-bg-main rounded-circle p-2 p-md-3"></i
        ></a>
  
        <!-- Linkedin -->
        <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in text-white my-bg-main rounded-circle p-2 p-md-3"></i
        ></a>
  
        <!-- Github -->
        

      <!-- Section: Text -->
      <section class="mb-4">
        <p>
          {{__("ui.lorem ipsum")}}
        </p>
      </section>
      <!-- Section: Text -->
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row justify-content-around">
          <!--Grid column-->
          @auth
            @if(!auth()->user()->is_revisor)
            <div class="col-12 col-md-3 mb-5 mb-md-0">
              <h5 class="text-uppercase">{{__("ui.vuoi diventare revisore?")}}</h5>
    
              <ul class="list-unstyled mb-0">
                <li>
                  <p>{{__("ui.clicca qui per inviare la tua richiesta")}}</p>
                </li>
                <li>
                    <a class ="my-text-main btn my-bg-quar btn-info-custom" href="{{route('becomeRevisor')}}">{{__("ui.become revisor")}}</a>
                </li>
              </ul>
            </div>
            @endif
          @endauth
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="text-uppercase">{{__("ui.links")}}</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a class="text-white text-decoration-none" href="#!">Privacy</a>
              </li>
              <li>
                <a class="text-white text-decoration-none" href="#!">Gestisci cookies</a>
              </li>
              <li>
                <a class="text-white text-decoration-none" href="#!">Sicurezza</a>
              </li>
              <li>
                <a class="text-white text-decoration-none" href="#!">Condizioni</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h5 class="text-uppercase">{{__("ui.links")}}</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a class="text-white text-decoration-none" href="#!">Chi siamo</a>
              </li>
              <li>
                <a class="text-white text-decoration-none" href="#!">Categorie</a>
              </li>
              <li>
                <a class="text-white text-decoration-none" href="#!">Idee regalo</a>
              </li>
              <li>
                <a class="text-white text-decoration-none" href="#!">Magazine</a>
              </li>
            </ul>
          </div>
          
  
          
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3 my-bg-sec text-white">
      © 2024 Copyright:
      <p>Calvio - Comerci - Fattori</p>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->