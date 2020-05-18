@extends('adminlte::page')

@section('title')

@section('content_header')
<h1 class="m-0 text-dark">Incluir Notícia</h1>
@stop

@section('content')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<div class="row">
	<div class="col-md-12">
		<div class="card card-primary">
        	<div class="card-header">
            	<h3 class="card-title">Nova Notícia</h3>
            </div>
            <form action="{{ route('store') }}" method="post" role="form" enctype="multipart/form-data">
            	@csrf
            	<div class="card-body">
            		<div class="form-group">
                    	<label for="exampleInputEmail1">Quantos Minutos Gasta Lendo?</label>
                    	<input type="text" name="reading" class="form-control" placeholder="~ 6 minutos para ler">
                  	</div>
                	<div class="form-group">
                    	<label for="exampleInputEmail1">Título</label>
                    	<input type="text" name="title" class="form-control" placeholder="Título">
                  	</div>
                  	<div class="form-group">
                    	<label for="exampleInputFile">Sub Imagem</label>
                    	<div class="input-group">
                      		<div class="custom-file">
                        		<input type="file" name="sub_image">
                      		</div>
                    	</div>
                  	</div>
                  	<div class="form-group">
                    	<label>Sub Notícia</label>
                        <textarea class="form-control" id="sub_news" name="sub_news" rows="3" placeholder="Sub Notícia"></textarea>
                        <script>
		                    CKEDITOR.replace('sub_news');
		                </script>
                    </div>
                  	<div class="form-group">
                    	<label>Notícia</label>
                        <textarea class="form-control" id="news" name="news" rows="3" placeholder="Sub Notícia"></textarea>
                        <script>
		                    CKEDITOR.replace('news');
		                </script>
                    </div>
                </div>
                <div class="card-footer">
                  	<button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
        	</form>
		</div>
	</div>
</div>
@stop