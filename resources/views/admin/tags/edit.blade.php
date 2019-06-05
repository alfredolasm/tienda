@extends('admin.template.main')

@section('title', 'Modificar Tag')

@section('content')
	
	{{ Form::open(['route' => ['tags.update', $tag], 'method' => 'PUT']) }}

	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name', $tag->name,['class'=>'form-control','placeholder'=>'Nombre', 'required'] ) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}

	</div>

@endsection