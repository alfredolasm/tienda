@extends('admin.template.main')

@section('title','Listado de Articulos')
 
@section('content')
<div class="col-md-auto">
	<div class="row py-5">
		<a href="{{ route('articles.create') }}" class="btn btn-primary">Registrar Nuevo artículo</a> 
		<!-- Buscador de Articulos-->
		{!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right' ]) !!}
			<div class="input-group">
				{!!  Form::text('title',null, ['class' => 'form-control', 'placeholder' => 'Buscar Articulo', 'aria-describedby' => 'search' ]) !!}
				<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> 
				</span>
			</div>	
		{!! Form::close() !!}
		<table class="table table-striped"> 
		<thead >	
			<th>ID</th>
			<th>Titulo</th>
			<th>categoria</th>
			<th>Usuario</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($articles as $article)
			<tr>
				<td>{{$article->id}}</td>
				<td>{{$article->title}}</td>
				<td>{{$article->category->name}}</td>
				<td>{{$article->user->name}}</td>
				<td><a href="{{ route('articles.edit', $article->id)}} " class="btn btn-warning" ><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> </a><a href="{{ route('articles.destroy', $article->id)}} " class="btn btn-danger" onclick="return confirm('Desea eliminar la cetgoria?') "><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
			</tr>
			@endforeach()
		</tbody>
	</table>
	<div >
		<p class="text-center">{!! $articles->render() !!}</p>
	</div>
</div>

@endsection