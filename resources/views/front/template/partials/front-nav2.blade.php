<!--INICIO NAVBAR BARRA DE NAVEGACIOB SUPERIO-->
	<div class="container-fluid ">
    
        <nav class="navbar navbar-expand-lg navbar-primary bg-withe">
			

        	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavop" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavop">
	
				<ul class="navbar-nav mr-auto">
	                	                
	                
                	<li class="nav-item dropdown">
                		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                			@foreach($categories as $category)   
                                 <a class="dropdown-item" href="{{route('front.search.category', $category->name)}} ">{{$category->name}} <span class="float-right badge badge-primary badge-pill">{{$category->articles->count() }}</span></a> 
                            @endforeach
                			
                		</div>
                	</li>

                	<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Promociones</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($promotions as $promotion)   
                                    <a class="dropdown-item" href="{{route('front.search.promotion', $promotion->name)}} ">{{$promotion->name}}  <span class="float-right badge badge-primary badge-pill">{{$promotion->articles->count() }}</span></a>
                            @endforeach
                            
                        </div>
                    </li>

                	<li class="nav-item dropdown">
                		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                			<a class="dropdown-item" href="#">Action</a>
                			<a class="dropdown-item" href="#">Another action</a>
                			<div class="dropdown-divider"></div>
                			<a class="dropdown-item" href="#">Something else here</a>
                		</div>
                	</li>
                	<li class="nav-item dropdown">
                		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lo Nuevo</a>
                		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                			<a class="dropdown-item" href="#">Action</a>
                			<a class="dropdown-item" href="#">Another action</a>
                			<div class="dropdown-divider"></div>
                			<a class="dropdown-item" href="#">Something else here</a>
                		</div>
                	</li>

	               	<li class = "nav-item">
	                  <a class="nav-link" href="#"> <font style = "vertical-align: inherit;">Audio</font> </a>
	                </li>
	                <li class = "nav-item">
	                  <a class="nav-link" href="#"> <font style = "vertical-align: inherit;"> Tv y Video</font> </a>
	                </li>
	                <li class = "nav-item">
	                  <a class="nav-link" href="#"> <font style = "vertical-align: inherit;"> Cables</font> </a>
	                </li>
	                <li class = "nav-item">
	                  <a class="nav-link" href="#"> <font style = "vertical-align: inherit;"> Accesorios</font> </a>
	                </li>
	            </ul> 
			</div>	


                
        </nav>
    </div>    

