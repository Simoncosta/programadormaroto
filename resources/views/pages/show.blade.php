@section('content')
@extends('adminlte::page')

@section('title_postfix', " - $new->title")

@section('content_header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">{{ $new->title }}</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Página Inicial</a></li>
            <li class="breadcrumb-item active">Ler Mais...</li>
        </ol>
    </div>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-indigo color-palette">
                <h3 class="card-title">
                	<i class="fas fa-code"></i>
                    Web Designer
                </h3>
            </div>
            <div class="card-body">
                <div id="accordion">
                    {!! $new->news !!}
                </div>
             
            </div>
            <div class="card-footer">
                <a type="submit" href="{{ route('index') }}" class="btn btn-primary"><i class="fas fa-undo-alt"></i> Voltar</a>
            </div>   
        </div>
	</div>
</div>
@stop