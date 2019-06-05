@extends('admin.template.main')

@section('title','Lista de imagenes')

@section('content')
	
<div class="row py-5">
	@foreach($images as $image)
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<img src="/images/articles/{{$image->name}}" class="img-responsive img-thumbnail">
				</div>
				<div class="panel-footer">Articulo: {{$image->article->title}} / {{$image->name}} </div>
				    
			</div>
		</div>	
	@endforeach
</div>
{!! $images->render() !!}


@endsection