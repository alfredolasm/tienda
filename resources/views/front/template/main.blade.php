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

    <!--BARRA DE NAVEGACION PRINCIPAL-->

        @include('front.template.partials.front-nav')
        <div class="pt-5 mt-2"></div>
        <div class="d-none d-lg-block">
          @include('front.template.partials.front-nav2')
        </div>

       
    <div class="container-fluid">
     
          <div class="row pt-1">
            <!--Este es el Hader-->
            
              @include('front.template.partials.carousel')
        
           
          </div>

          <!--FIN DEL HEADER-->
  
      <div class="row py-3 bg-dark ">
        <div class="col-sm-block col-lg-3  mt-1">
         <div class="dropdown">
            <a class="btn btn-block btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categorias
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              
              @foreach($categories as $category)   
                    <a class="dropdown-item" href="{{route('front.search.category', $category->name)}} ">{{$category->name}} <span  class=" float-right badge badge-primary badge-pill">{{$category->articles->count() }}</span></a> 
              @endforeach
            </div>
          </div>
         
        </div>

        <div class="col-sm-block col-lg-3 mt-1">
          <div class="dropdown">
            <a class="btn btn-block btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Promociones
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              
              @foreach($promotions as $promotion)   
                    <a class="dropdown-item" href="{{route('front.search.promotion', $promotion->name)}} ">{{$promotion->name}} <span class="  float-right badge badge-primary badge-pill">{{$promotion->articles->count() }}</span></a> 
              @endforeach
            </div>
          </div>
        </div>
        <div class="col-sm-block col-lg-3 mt-1">
          <a href="#" class="btn btn-primary btn-lg btn-block display-4" role="button" aria-pressed="true">
            Servicios
            <!--<img src="/images/front/_kitcloucecoesport2.jpg" alt="Card image" style="height: 200px; width: 100%; display: block;">-->
          </a>
        </div>
        <div class="col-sm-block col-lg-3 mt-1">
          <a href="#" class="btn btn-primary btn-lg btn-block display-4" role="button" aria-pressed="true">
            Promosiones
            <!--<img src="/images/front/_kitcloucecoesport2.jpg" alt="Card image" style="height: 200px; width: 100%; display: block;">-->
          </a>
        </div>
      </div>
        
         
            <!-- CONTENIDO PRINCIPAL-->
          <p><h3>Recomendaciones</h3></p> 
              <div class="row bg-secundary">
               <!--CONTENIDO-->
                                <!-- FEATURES -->
                  @include('admin.template.partials.errors')
                  @yield('content')
              </div>  
            
        <div class="row">
          <div class="col">
            <div class="card mb-3 " >
              <div class=" text-white bg-primary card-header">Palabras Claves</div>
              <div>
                @foreach($tags as $tag)
                  <a  href=" {{route('front.search.tag', $tag->name)}} ">
                  <span class="badge badge-primary badge-pill "> <strong>{{$tag->name}}</strong></span></a>
                  @endforeach
                </div>
             </div>
          </div>
        </div>


        <p><h3 >Marcas Exclusivas</h3></p>
        <div class="row">
          <div class="col-md-3">
            <div class="card mb-3">
              
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
              </div>
              <img style="height: 200px; width: 100%; display: block;" src="/images/front/3m-logo.jpg" alt="Card image">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              
              <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
              <div class="card-footer text-muted">
                2 days ago
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-3">
              
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
              </div>
              <img style="height: 200px; width: 100%; display: block;" src="/images/front/3m-logo.jpg" alt="Card image">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              
              <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
              <div class="card-footer text-muted">
                2 days ago
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-3">
              
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
              </div>
              <img style="height: 200px; width: 100%; display: block;" src="/images/front/3m-logo.jpg" alt="Card image">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              
              <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
              <div class="card-footer text-muted">
                2 days ago
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-3">
              
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
              </div>
              <img style="height: 200px; width: 100%; display: block;" src="/images/front/3m-logo.jpg" alt="Card image">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              
              <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
              <div class="card-footer text-muted">
                2 days ago
              </div>
            </div>
          </div>
        </div>
     
    </div>
          
      <footer>
        <div class=" container-fluid ">
          <div class="row d-sm-block">
            <ul class="nav collasep flex-sm-column sticky-buttom bg-dark">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
            <div class="row justify-content-md-center">
              <p>Copyright &copy;2018 </p>
            </div>  
          </div>
        </div>
      </footer>
  
 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('plugins/jquery/js/popper.js') }} "></script>
    <script src="{{asset('plugins/jquery/js/bootstrap.js') }} "></script>
    
  </body>
</html>