@extends('admin.template.main')


@section('content')


<section>
	<div class="container ">
	  	<div class="row  py-5" >
			<div class="col-md-8 d-inline-block ">
				<div class="row">
					@foreach($articles as $article)
						<div class="col-md-6">


							<div class="card border-primary mb-3" style="max-width: 20rem;">
								<a href=" {{route('front.view.article', $article->slug)}} ">
									@foreach($article->images as $image)
										<img style="height: 200px; width: 100%; display: block;" src="{{ asset('images/articles/'.$image->name) }}" alt="Card image">
									@endforeach
								</a>
								<h6 class=""></h6>
								 <div class="card-body">
								 	<a href=" {{route('front.view.article', $article->slug)}} ">
										<h5 class="card-title">{{ $article->title }}</h5>
									</a>
								</div> 
								
								 <div class="card-footer text-muted">
								 	<div class="row  justify-content-between">
								 		<div class="col-6"><small class="text-muted"><a href="{{route('front.search.category', $article->category->name)}} ">{{$article->category->name}}</a></small></div> 
								 		<div class="col-6"><small class="text-muted"> {{$article->created_at->diffForHumans()}} </small></div>
								 	</div>
								 	
								    
								</div>
							</div>


						</div>	
					@endforeach
				</div>
				{!! $articles->render() !!}	
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
