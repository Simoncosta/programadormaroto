@extends('adminlte::page')

@section('title')
@section('title_postfix', ' - Marketing Digital')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Marketing Digital</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/">Página Inicial</a></li>
      <li class="breadcrumb-item active">Marketing Digital</li>
    </ol>
  </div>
</div>
@stop

@section('content')
<div class="card card-solid">
  <div class="card-body pb-0">
    <div class="row d-flex align-items-stretch">

      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
        <div class="card bg-light">
          <div class="card-header text-muted border-bottom-0">
            NEGÓCIO DIGITAL
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b>Next Level</b></h2>
                <p class="text-muted text-sm"><b>Sobre: </b> Negócio Digital / Estratégias de Argumentação / Atraia Seus Clientes</p>
                <!--<ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                </ul>-->
              </div>
              <div class="col-5 text-center">
                <img src="{{ asset('image/cursos/nextlevel.png') }}" alt="" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="mailto:simonfrtd@gmail.com" class="btn btn-sm bg-teal">
                <i class="fa fa-envelope"></i>
              </a>
              <a href="https://go.hotmart.com/A28925102D" target="_blank" class="btn btn-sm btn-primary">
                <i class="fa fa-eye"></i> Visualizar Curso
              </a>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
@stop