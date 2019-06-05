@extends('admin.template.main')

@section('title','Listado de Categorias')

@section('content')
<div class="col-md-auto"> 
	<div class="row py-5">
		<a href="{{ route('categories.create') }}" class="btn btn-primary">Registrar Nueva Categoria</a>
		<table class="table table-striped">
			<thead >
				<th>Id</th>
				<th>Nombre</th>
				<th>Acción</th>
			</thead>
			<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{ $category->id }} </td>
					<td>{{ $category->name }} </td>
					<td><a href="{{ route('categories.edit', $category->id)}} " class="btn btn-warning" ><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> </a><a href="{{ route('categories.destroy', $category->id) }} " class="btn btn-danger" onclick="return confirm('Desea eliminar la cetgoria?') "><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
				</tr>
			@endforeach
			</tbody>
		</table>
	<div>
	<p class="text-center">{!! $categories->render() !!}</p>
	</div>
</div>

@endsection
