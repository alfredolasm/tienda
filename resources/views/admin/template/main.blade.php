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
  
   @include('admin.template.partials.nav')


        <div class="row mt-3 p-3 ">
        </div> 

<div class="container">

  

<!--Este es el Hader-->
  <header > 
      
     
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
</div>
<footer>
  <div class="container p-3 text-white text-center">
    <p>Copyright &copy;2018 </p>
  </div>
</footer>

    <!-- Scripts 
    <script src="{{asset('js/app.js') }}"></script>-->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('plugins/jquery/js/bootstrap.js') }} "></script>
    <script src="{{asset('plugins/jquery/js/popper.js') }} "></script>
  
  <script src="{{asset('plugins/trumbowyg/trumbowyg.js')}} " ></script>
  <script src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>
  <script src="{{asset('plugins/dropzone/dropzone.js')}}"></script>

	@yield('js')
	@yield('scripts')
</body>
</html>