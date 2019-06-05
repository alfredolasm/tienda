@extends('admin.template.main')

@section('title', $article->name )

@section('content')
<section class="py-5">
	<div class="container">
	  	<div class="row">
			<div class="col-md-8 d-inline-block ">
				<div class="row">
					<div class="card mb-3">
			  			<div class="card-body">
			  				<h5 class="card-title">{{$article->title}}</h5>
			  				<h6 class="card-subtitle text-muted">{{$article->user->name}}</h6>
						 </div>
						<div class="card-body">
							<p class="card-text">{!!$article->content!!}</p>
							
						</div>
					
					    <div class="card-footer text-muted"><h3>Comentarios</h3></div>
					</div>
				</div>
			</div>	   
			<div class="col-md-4">
				<aside>
					@include('admin.template.partials.aside')
				</aside>
			</div>
		</div>
		
	</div>
</section>	


@endsection



