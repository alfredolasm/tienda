<!-- Este el menu de navegacion -->
  <nav class="navbar navbar-expand-lg navbar-primary bg-withe">

  <div class="container">
    <div class="row">

       
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Boton de navegacion">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        @if(Auth::user())
        @endif
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('index')}} ">Inicio </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('users.index')}} ">Usuarios </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('categories.index') }} ">Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{route('articles.index')}} ">Articulos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('images.index')}} ">Imagenes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{route('tags.index')}} ">Tag</a>
        </li>
       
      </ul> 
    </div>
    </div>
  </div>
</nav>
