@extends('admin.template.main')

@section('title','Editar Articulo - '. $article->title)

@section('content')

	{!! Form::open(['route'=> ['articles.update', $article], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!!  Form::label('title', 'Titulo') !!}
			{!!  Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo', 'required']) !!}
		</div>

		<div class="form-group ">
			{!! Form::label('name','Categorias')  !!}
			{!! Form::select('category_id', $categories ,$article->category->id,['class' => 'form-control select-category', 'required']) !!}
		
		</div>

		<div class="form-group ">
			{!!  Form::label('content', 'Contenido') !!}
			{!!  Form::textarea('content', $article->content,['class' => 'form-control textarea-content']) !!}
		</div>

		<div class="form-group">
			{!!  Form::label('tags','Tags') !!}
			{!!  Form::select('tags[]',$tags, $my_tags, ['class' => 'form-control select-tag', 'multiple' => 'Seleccione una opción...', 'required']) !!}
		</div>
		
        <div class="form-group">
	        <div class="form-group dropzone-previews">
	        	{!!  Form::submit('Editar articulo', ['class' => 'btn btn-primary', 'id'=>'file-btn']) !!}
	        </div>
	    </div>

	{!! Form::close() !!}

@endsection

@section('js')
	<script>
		

		$('.select-tag').chosen({
			placeholder_text_multiple:'Seleccione un máximo de tres(3) Tags',
			max_selected_options     :3,
			search_contains     	 :true,
			no_results_text			 :'No se ha encontrado resultado' 
		});

		$('.select-category').chosen({
			no_results_text			 :'No se ha encontrado resultado' 
		});

		$('.textarea-content').trumbowyg();
		
	</script>

@endsection