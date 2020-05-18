@extends('adminlte::page')

@section('title')
@section('title_postfix', ' - Contato')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Marketing Digital</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/">Página Inicial</a></li>
      <li class="breadcrumb-item active">Contato</li>
    </ol>
  </div>
</div>
@stop

@section('content')

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h5><i class="icon fas fa-check"></i>
    Sucesso</h5>
  <ul>
    
    <li>{{ session()->get("success") }}</li>
  </ul>
</div>
@endif

<div class="col-md-12">
  <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Entre em Contato - Dúvida / Sugestão / Elogio</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('contato.enviar_email') }}" method="POST" role="form">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Seu E-mail: *</label>
          <input name="email" type="email" class="form-control" placeholder="Seu email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Seu Nome: *</label>
          <input name="nome" type="text" class="form-control" placeholder="Seu Nome">
        </div>
       <div class="form-group">
        <label for="exampleFormControlTextarea1">Sua Mensagem: *</label>
        <textarea name="mensagem" class="form-control" rows="3"></textarea>
      </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form>
  </div>
  <!-- /.card -->

</div>
@stop
