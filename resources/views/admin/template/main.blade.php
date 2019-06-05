<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Victoria') }}</title>

 
     <!-- Styles -->  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('plugins/bootstrap/css/main.css')}} ">
     <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/css/bootstrap-glyphicons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/chosen/chosen.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropzone/dropzone.css ')}} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropzone/basic.css')}}">
    
</head>


<body >

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">

    <a class="navbar-brand" href="/">INICIO
      <img src="#" alt="">
    </a>
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Boton de navegacion">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        
       
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('index')}} ">PAGINA PRINCIAL </a>
        </li>
        @if(Auth::user())
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('users.index')}} ">USUARIO </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('categories.index') }} ">CATEGORIAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{route('articles.index')}} ">ARTICULOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('images.index')}} ">IMAGENES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{route('tags.index')}} ">TAGS</a>
        </li>
        
         @endif
      </ul> 
      <!--    ususario -->


      <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">INICIA SESSION</a></li>
                            <li class="nav-item"  ><a class="nav-link" href="{{ route('register') }}">REGISTRATE</a></li>
                        @else
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu ">
                                    <li class="dropdown-item" >
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
    <header class="admin-main-header"> 

      <div class="background-overlay text-white ">
        <div class="container">
          <div class="row bg-primary">
            <div class="col-md-8 text-center justify-content-center align-self-center ">
              <h1 class="text-white">MangoYoYo</h1>
              <p>Ya está disponible nuestro nuevo Blog ‘Especial para ti’ haz click ingresa Blog
               
             </div>
             <div class="col-md-4 ">
              <img style="height: 150px; width: 40%; display: block;" src="/images/front/imagenmango.jpg" alt="imagen del producto" class="img-fluid d-none d-sm-block">

             </div>
          </div>
        </div>
      </div>
    </header>	
    
<div class="container">
  <h3>@yield('title')</h3>
  @include('flash::message')
  <div class="row justify-content-md-center">
  <!-- FEATURES -->
    
			@include('admin.template.partials.errors')
			@yield('content')
  </div>
</div>	
<footer>
  <div class="container p-3 text-white text-center">
    <p>Copyright &copy;2018 </p>
  </div>
</footer>

    <!-- Scripts 
    <script src="{{asset('js/app.js') }}"></script>-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{asset('plugins/jquery/js/popper.js ')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
  
  <script src="{{asset('plugins/trumbowyg/trumbowyg.js')}} " ></script>
  <script src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>
  <script src="{{asset('plugins/dropzone/dropzone.js')}}"></script>

	@yield('js')
	@yield('scripts')
</body>
</html>