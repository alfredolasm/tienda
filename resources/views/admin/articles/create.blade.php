@extends('admin.template.main')

@section('title','Crear Articulo')

@section('content')

	{!! Form::open(['route'=> 'articles.store', 'method' => 'POST', 'files'=>'true']) !!}

		<div class="form-group">
			{!!  Form::label('title', 'Titulo') !!}
			{!!  Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo', 'required']) !!}
		</div>

		<div class="form-group ">
			{!! Form::label('name','Categorias')  !!}
			{!! Form::select('category_id', $categories,null,['class' => 'form-control select-category', 'required'])  !!}
		</div>

		<div class="form-group ">
			{!!  Form::label('content', 'Contenido') !!}
			{!!  Form::textarea('content', null,['class' => 'form-control textarea-content']) !!}
		</div>

		<div class="form-group">
			{!!  Form::label('tags','Tags') !!}
			{!!  Form::select('tags[]',$tags, null, ['class' => 'form-control select-tag', 'multiple' => 'Seleccione una opción...', 'required']) !!}
		</div>
		<div class="form-group">
	        <div class="card card-primary">
                <div class="card-heading">
                    Lista de Imagenes
                </div>
                <div class="card-body">
                    <div class="dz-message dropzone" style="height:200px;">
                    	{!! Form::file('image') !!}
                        Arrastere y Suelte aqui.. o haga click
                    </div>
				</div>
            </div>
        </div>
         <div class="form-group">
	        <div class="form-group dropzone-previews">
	        	{!!  Form::submit('Agregar articulo', ['class' => 'btn btn-primary', 'id'=>'file-btn']) !!}
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
		
		Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 5,
            
            init: function() {
                var submitBtn = document.querySelector("#file-btn");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                    /*alert("file uploaded");*/
                });
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
 
                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };


	</script>

@endsection