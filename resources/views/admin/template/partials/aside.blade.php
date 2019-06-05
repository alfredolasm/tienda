
	<div class="card border-primary mb-5" style="max-width: 20rem;">
		<ul class="list-group">
			<div class=" text-white bg-primary card-header">Categorias</div>
			@foreach($categories as $category)	

				 <li class="list-group-item text-primary d-flex justify-content-between align-items-center">
				 	<a href="{{route('front.search.category', $category->name)}} ">{{$category->name}}</a> <span class="badge badge-success badge-pill">{{$category->articles->count() }}</span>
				 </li>
			@endforeach
		</ul>
	</div>

	
	<div class="card border-success mb-3" style="max-width: 20rem;">
		<div class=" text-white bg-success card-header">Tags</div>
			<div>
				@foreach($tags as $tag)
					<a  href=" {{route('front.search.tag', $tag->name)}} ">
					<span class="badge badge-primary "> {{$tag->name}}</span></a>
			  	@endforeach
		    </div>
	   </div>
	</div>
</div>