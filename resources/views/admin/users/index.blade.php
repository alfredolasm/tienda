@extends('admin.template.main')

@section('title', 'Lista de Usuarios')

@section('content')
<div class="col-md-auto">
	<div class="row py-5">
		 <a href="{{ route('users.create') }}" class="btn btn-primary">Registrar Nuevo Usuario</a>
		<table class="table table-striped">
			<thead >
				<th>ID</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Tipo</th>
				<th>Acción</th>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr >
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							@if($user->type == 'admin')
								<span class="badge badge-danger text-wrap" style="width: 6rem;">{{ $user->type }}</span>	
							@else
								<span class="badge badge-primary text-wrap" style="width: 6rem;">{{ $user->type }}</span>
							@endif
						</td>
						<td>
							<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning" "><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> </a> 
							<a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger" onclick="return confirm('Desea eliminar el usuario?') "><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> </a> 
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	<div >
		<p class="text-center">{!! $users->render() !!}</p>
	</div>
</div>		
	
@endsection