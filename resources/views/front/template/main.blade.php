<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatlible" content="ie-edge" >
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Victoria') }}</title>

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('plugins/bootstrap/css/main.css')}} ">

    <title>Código Victoria</title>
  
  </head>
  
 
  <body> 

    <!-- Este el menu de navegacion -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img style="height: 40px; width: 15%; display: block;"src="" alt="Fazt Logo">
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('index')}}  ">BLOG </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ACERCA DE </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">EQUIPO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACTOS</a>
            </li>
           
            
          </ul>

           <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">INICIA SESSION</a></li>
                            <li class="nav-item" ><a class="nav-link" href="{{ route('register') }}">REGISTRATE</a></li>
                        @else
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu ">
                                    <li class="dropdown-item">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            SALIR
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>



      <!-- fin usuario-->
        </div>

      </div>
    </nav>

    <!--Este es el Hader-->
    <hr>
    <header class="main-header"> 

      <div class="background-overlay text-white py-5">
        <div class="container">
          <div class="row bg-primary">
            <div class="col-md-8 text-center justify-content-center align-self-center ">
              <h1 class="text-white">MangoYoYo</h1>
              <p>Ya está disponible nuestro nuevo Blog ‘Especial para ti’ haz click ingresa Blog
               </p>
               <a href="{{route('index')}}  " class="btn btn-outline-secondary btn-lg text-white">
                Ver mas.
               </a>

             </div>
             <div class="col-md-4 ">
              <img style="height: 150px; width: 40%; display: block;" src="/images/front/imagenmango.jpg" alt="imagen del producto" class="img-fluid d-none d-sm-block">

             </div>
          </div>
        </div>
      </div>
    </header>
    <!-- NEWSLETTER -->
    <section class="bg-primary text-white py-5">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <input type="text" class="form-control-lg" placeholder="Ingrese su nombre"></input>
          </div>
          <div class="col-md-4">
            <input type="email" class="form-control-lg" placeholder="correo@email.com"></input>
          </div>
          <div class="col-md-4">
           <button  class="btn btn-primary btn-lg btn-block"><a href=" #"></a>
              Suscribe
            </button>

          </div>
        </div>
      </div>
    </section>

    <!-- FEATURES -->
    <section class="py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-auto col-md-3">
            <div class="card text-center border-primary">
              <div class="card-body">
                <h3 class="Caracteristica 1"> Lorem ipsum dolor sit amet, </h3>
              </div>

            </div>

          </div>
          <div class="col-auto col-md-3">
            <div class="card text-center bg-primary text-white">
              <div class="card-body">
                <h3 class="Caracteristica 2"> Lorem ipsum dolor sit amet, </h3>
              </div>

            </div>

          </div>
          <div class="col-auto col-md-3">
            <div class="card text-center border-primary">
              <div class="card-body">
                <h3 class="Caracteristica 3"> Lorem ipsum dolor sit amet, </h3>
              </div>

            </div>

          </div>
          <div class="col-auto col-md-3">
              <div class="card text-center bg-primary text-white">
              <div class="card-body">
                <h3 class="Caracteristica 2"> Lorem ipsum dolor sit amet, </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ABOUT -->
    <section class="bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="m-5">
            <h3>Why this product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ACORDION -->
    <section class="container text-center py-5">
      <div class="row">

        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Collapsible Group Item #1
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Collapsible Group Item #2
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck 

                 Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Collapsible Group Item #3
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- TEAM -->
    <section class="team text-center">
      <div class="container py-5">
        
          <h1 class="text-white">TEAM</h1>
          <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. </p>

          <div class="row">

            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <img  src="images/front/3m-logo.jpg" class="img-fluid rounded-circle w-50" alt="nombre imagen"> 
                  <h3>Luis A. Sánchez</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. </p>
                  <div class="d-flex flex-row justify-content-center">
                    <div class="py-4">
                      <a href="https://www.facebook.com/alfredolasmd" target="blank">
                        <i class="fab"> Face </i>
                      </a>
                    </div>
                     <div class="py-4">
                      <a href="https://www.facebook.com/alfredolasmd" target="blank">
                        <i class="fab"> Inst </i>
                      </a>
                    </div>
                     <div class="py-4">
                      <a href="https://www.facebook.com/alfredolasmd" target="blank">
                        <i class="fab"> Tw </i>
                      </a>
                    </div>
                  </div>
                  </img>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <img  src="images/front/3m-logo.jpg" class="img-fluid rounded-circle w-50" alt="nombre imagen"> 
                  <h3>Luis A. Sánchez</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. </p>
                  <div class="d-flex flex-row justify-content-center">
                    <div class="py-4">
                      <a href="https://www.facebook.com/alfredolasmd" target="blank">
                        <i class="fab"> Face </i>
                      </a>
                    </div>
                     <div class="py-4">
                      <a href="https://www.facebook.com/alfredolasmd" target="blank">
                        <i class="fab"> Inst </i>
                      </a>
                    </div>
                     <div class="py-4">
                      <a href="https://www.facebook.com/alfredolasmd" target="blank">
                        <i class="fab"> Tw </i>
                      </a>
                    </div>
                  </div>
                  </img>
                </div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <img  src="images/front/3m-logo.jpg" class="img-fluid rounded-circle w-50" alt="nombre imagen"> 
                  <h3>Luis A. Sánchez</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. </p>
                  <div class="d-flex flex-row justify-content-center">
                    <div class="py-4">
                      <a href="https://www.facebook.com/alfredolasmd" target="blank">
                        <i class="fab"> Face </i>
                      </a>
                    </div>
                     <div class="py-4">
                      <a href="https://www.facebook.com/alfredolasmd" target="blank">
                        <i class="fab"> Inst </i>
                      </a>
                    </div>
                     <div class="py-4">
                      <a href="https://www.facebook.com/alfredolasmd" target="blank">
                        <i class="fab"> Tw </i>
                      </a>
                    </div>
                  </div>
                  </img>
                </div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <img  src="images/front/3m-logo.jpg" class="img-fluid rounded-circle w-50" alt="nombre imagen"> 
                  <h3>Luis A. Sánchez</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. </p>
                  <div class="d-flex flex-row justify-content-center">
                    <div class="py-4">
                      <a href="https://www.facebook.com/alfredolasmd" target="blank">
                        <i class="fab"> Face </i>
                      </a>
                    </div>
                     <div class="py-4">
                      <a href="https://www.facebook.com/alfredolasmd" target="blank">
                        <i class="fab"> Inst </i>
                      </a>
                    </div>
                     <div class="py-4">
                      <a href="https://www.facebook.com/alfredolasmd" target="blank">
                        <i class="fab"> Tw </i>
                      </a>
                    </div>
                  </div>
                  </img>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <!-- CONTAC -->
    <section>
      <div class="container">
        <div class="row">

          <div class="col-lg-9">
            <h3>Contacto</h3>
            <p>gggjhgjjk hjk</p>
            <form action="#" >
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <i class="fas fa-user input-group-text">@</i>
                </div>
                <input type="text" class="form-control" placeholder="Nombre">
              </div>  

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <i class="fas fa-user input-group-text">@</i>
                </div>
                <input type="email" class="form-control" placeholder="nobre@correo.com">
              </div>  

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <i class="fas fa-user input-group-text">@</i>
                </div>
                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Escribe tu mensaje"></textarea>
              </div>  
              <button class="btn btn-primary btn-lg btn-block ">Envia tu mensaje</button>
            </form>
          </div>
          <div class="col-lg-3 align-self-center">
            <img src="images/front/images.jpeg">
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
<footer>
  <div class="container p-3 text-white text-center">
    <p>Copyright &copy;2018 </p>
  </div>

</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('plugins/jquery/js/bootstrap.js') }} "></script>
    <script src="{{asset('plugins/jquery/js/popper.js') }} "></script>
    
     
  </body>
</html>