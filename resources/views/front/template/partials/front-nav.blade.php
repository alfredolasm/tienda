<!--INICIO NAVBAR BARRA PRINCIPAL DE NAVEGACIOB SUPERIO-->

<div class="container-fluid">
	
    <div class=" d-block">
        <nav class="navbar fixed-top  navbar-expand-lg navbar-dark bg-primary">
			<div class="d-none d-md-block"> <a class="navbar-brand" href="/">OnLine Shop </a></div>
			
    		<!-- Buscador de Articulos-->
        	{!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'form-inline ' ]) !!}
			<div class="input-group">
				{!!  Form::text('title',null, ['class' => 'mr-sm-2', 'placeholder' => 'Categorias', 'aria-describedby' => 'search' ]) !!}
				<button class = "btn btn-sm btn-primary" type = "submit"> <font style = "vertical-align: inherit;"> Buscar </font></button>
			</div>	
			{!! Form::close() !!}
	
            

        	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            	

            <div class="collapse navbar-collapse" id="navbarNav">
            
				
				<ul class="navbar-nav ml-auto">
	                	                
	                <li class = "nav-item">
	                  <a class="nav-link" href="{{route('index')}}"> <font style = "vertical-align: inherit;"> 0414-5740826</font> </a>
	                </li>
	               	<li class = "nav-item">
						<!-- Authentication Links -->
						<ul class="navbar-nav ">
		                    @guest
		                    	

		                        <li class="dropdown nav-item ">
                                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre><img src="/images/icons/2x/outline_perm_identity_white_18dp.png"><span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu ">
                                        <li class="nav-item"><a class="nav-link" href="{{ 
                                        route('login') }}" onclick="event.preventDefault();
                                                document.getElementById('login-form').submit();"><font style = "vertical-align: inherit;"> Inicia Sessión  </font></a>
                                                 <form id="login-form" action="{{ route('login') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                                    </form>

                                            </li>

                                        <li class="nav-item" ><a class="nav-link" href="{{ route('register') }}" onclick="event.preventDefault();
                                                document.getElementById('register-form').submit();"><font style = "vertical-align: inherit;"> Crear Cuenta </font> </a>

                                                 <form id="register-form" action="{{ route('register') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                                </form>

                                            </li>
                                    </ul>
                                </li>
		                       
		                    @else
		                        <li class="dropdown nav-item ">
			                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
			                          {{ Auth::user()->name }} <span class="caret"></span>
			                        </a>
			                        <ul class="dropdown-menu ">
			                            <li class="dropdown-item ">
                                                <a class="dropdown-item " href="{{ route('logout') }}"
			                                    onclick="event.preventDefault();
			                                    document.getElementById('logout-form').submit();"><font style = "vertical-align: inherit;">SALIR</font>
			                                </a>
			                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                                    {{ csrf_field() }}
			                                </form>
			                            </li>

			                        </ul>
		                        </li>
		                    @endguest
		                </ul>
		            </li>
		            <li class = "nav-item">
	                  <a class="nav-link" href="#"> <font style = "vertical-align: inherit;"> Carro de Compra</font> </a>
	                </li>
	            </ul> 
        </nav>
     </div>
 
</div>    

