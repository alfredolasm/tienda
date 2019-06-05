
@extends('admin.template.main')

@section('title','Crear Usuario')

@section('content')
	
	{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de Usuario' ,'required']) !!}
			
		</div>

		<div class="form-group">
			{!! Form::label('email','Correo electronico') !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@email' ,'required']) !!}
			
		</div>

		<div class="form-group">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password', ['class' => 'form-control','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type','Tipo') !!}
			{!! Form::select('type',['member' => 'Miembro', 'admin' =>'Administrador'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción...', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}

		</div>
	{!!Form::close()!!}
@endsection
