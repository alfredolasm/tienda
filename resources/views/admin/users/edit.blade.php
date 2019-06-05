@extends('admin.template.main')

@section('title','Editar Usuario '. $user->name)

@section('content')
	{!! Form::open(['route' => ['users.update', $user],'method' => 'PUT']) !!}
	
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo' ,'required']) !!}
			
		</div>

		<div class="form-group">
			{!! Form::label('email','Correo electronico') !!}
			{!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'example@email' ,'required']) !!}
			
		</div>

		<div class="form-group">
			{!! Form::label('type','Tipo') !!}
			{!! Form::select('type',['member' => 'Miembro', 'admin' =>'Administrador'], $user->type, ['class' => 'form-control', 'placeholder' => 'Selecione una opción...', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}

		</div>
	{!!Form::close()!!}
@endsection
