@extends('admin.template.main')

@section('title','Listado de Tags')

@section('content')
<div class="col-md-auto">
	<div class="row py-5">
		<a href="{{ route('tags.create') }}" class="btn btn-primary">Registrar Nuevos Tags</a>
		<!-- Buscador de Tags-->
			{!! Form::open(['route' => 'tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
			<div class="input-group">
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar Tags..', 'aria-describedby' => 'search' ]) !!}
				<span class="input-group-addon" id="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
			</div>
			{!! Form::close() !!}
			<a href="" class="btn btn-primari" role="button"></a>
			<table class="table tables-striped">
				<thead >
				<th>ID</th>
				<th>Nombre</th>
				<th>Acción</th> 
			</thead>
			<tbody>
				@foreach($tags as $tag)
				<tr>
					<td> {{$tag->id}} </td>
					<td> {{$tag->name}} </td>
					<td><a href=" {{ route('tags.edit', $tag->id)}} " class="btn btn-warning" ><span class="glyphicon glyphicon-wrench " aria-hidden="true"></span> </a><a href=" {{ route('tags.destroy', $tag->id) }} " class="btn btn-danger" onclick="return confirm('Desea eliminar la cetgoria?') "><span class="glyphicon glyphicon-remove-circle ml-auto" aria-hidden="true"></span></a></td>
				</tr>
				@endforeach
			</tbody>
	</table>
	<div>
		<p class="text-center"> {!! $tags->render() !!} </p>		
	</div>
</div>

@endsection