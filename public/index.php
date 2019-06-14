<?php
@extends('front.template.main')

@section('title','Blog de cv Código Víctoria')
   
@section('content')

	  	<div class="row justify-content-center p-3" >
			@foreach($articles as $article)
				<div class="row">	
					<div class="col-lg-4">
						<div class="d-none d-lg-block col-lg-auto">
								<div class="card border-primary mb-3" style="max-width: 30rem;">
									<a  href=" {{route('front.view.article', $article->slug)}} ">
										@foreach($article->images as $image)
											<img class="img-thumbnail " style="height: 100%; width: 100%; display: center;" src="{{ asset('images/articles/'.$image->name) }}" alt="Card image">
										@endforeach
									</a>
																		
									<div class="card-footer text-muted">
										<div class="row  justify-content-between">
											<div class="col-auto"><small class="text-muted"><a href=" {{route('front.view.article', $article->slug)}} ">
											<strong>{{ $article->title }}</strong>
											</a></small></div>
										</div>
									 	<div class="row  justify-content-between">
									 		<div class="col-6"><small class="text-muted"><a href="{{route('front.search.category', $article->category->name)}} ">{{$article->category->name}}</a></small></div> 
									 		<div class="col-6"><small class="text-muted"> {{$article->created_at->diffForHumans()}} </small></div>
									 	</div>
									</div>
								</div>
							</div>	
						
							<div class="d-none d-lg-block col-lg-auto">
								<div class="card border-primary mb-3" style="max-width: 30rem;">
									<a  href=" {{route('front.view.article', $article->slug)}} ">
										@foreach($article->images as $image)
											<img class="img-thumbnail mx-auto d-block" style="height: 100%; width: 100%; display: center;" src="{{ asset('images/articles/'.$image->name) }}" alt="Card image">
										@endforeach
									</a>
																		
									<div class="card-footer text-muted">
										<div class="row  justify-content-between">
											<div class="col-auto"><small class="text-muted"><a href=" {{route('front.view.article', $article->slug)}} ">
											<strong>{{ $article->title }}</strong>
											</a></small></div>
										</div>
									 	<div class="row  justify-content-between">
									 		<div class="col-6"><small class="text-muted"><a href="{{route('front.search.category', $article->category->name)}} ">{{$article->category->name}}</a></small></div> 
									 		<div class="col-6"><small class="text-muted"> {{$article->created_at->diffForHumans()}} </small></div>
									 	</div>
									</div>
								</div>
							</div>	
					</div>
				
					<div class="col-lg-8">
						<div class="card border-primary mb-3" style="max-width: 30rem;">
							<a  href=" {{route('front.view.article', $article->slug)}} ">
								@foreach($article->images as $image)
									<img class="img-thumbnail " style="height: 100%; width: 100%; display: center;" src="{{ asset('images/articles/'.$image->name) }}" alt="Card image">
								@endforeach
							</a>
																
							<div class="card-footer text-muted">
								<div class="row  justify-content-between">
									<div class="col-auto"><small class="text-muted"><a href=" {{route('front.view.article', $article->slug)}} ">
									<strong>{{ $article->title }}</strong>
									</a></small></div>
								</div>
							 	<div class="row  justify-content-between">
							 		<div class="col-6"><small class="text-muted"><a href="{{route('front.search.category', $article->category->name)}} ">{{$article->category->name}}</a></small></div> 
							 		<div class="col-6"><small class="text-muted"> {{$article->created_at->diffForHumans()}} </small></div>
							 	</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach

			</div>	
			{!! $articles->render() !!} 
			
			<!--<div class="col align-self-end col-md-4">
				<aside>
					@include('admin.template.partials.aside')
				</aside>
			</div>
			-->
		</div>
	

   
@endsection
  
