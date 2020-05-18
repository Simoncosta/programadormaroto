@extends('adminlte::page')

@section('title')
@section('title_postfix', ' - TI Cursos')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">TI Cursos</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/">Página Inicial</a></li>
      <li class="breadcrumb-item active">TI Cursos</li>
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
            LGPD
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b>LGPD Essencial</b></h2>
                <p class="text-muted text-sm"><b>Sobre: </b>entender mais sobre em que a Lei de Proteção de Dados Pessoais </p>
                <!--<ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                </ul>-->
              </div>
              <div class="col-5 text-center">
                <img src="{{ asset('image/cursos/lgpd.png')}}" alt="" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="mailto:simonfrtd@gmail.com" class="btn btn-sm bg-teal">
                <i class="fa fa-envelope"></i>
              </a>
              <a href="https://go.hotmart.com/M29422650G" target="_blank" class="btn btn-sm btn-primary">
                <i class="fa fa-eye"></i> Visualizar Curso
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
        <div class="card bg-light">
          <div class="card-header text-muted border-bottom-0">
            DESENVOLVIMENTO MOBILE
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b>Curso de Node.js, React e React Native</b></h2>
                <p class="text-muted text-sm"><b>Sobre: </b> Node.js / Criar API / React / aplicativo para Smartphone IOS e Android </p>
                <!--<ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                </ul>-->
              </div>
              <div class="col-5 text-center">
                <img src="{{ asset('image/cursos/cursodenodejsreactereactnative.jpg')}}" alt="" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="mailto:simonfrtd@gmail.com" class="btn btn-sm bg-teal">
                <i class="fa fa-envelope"></i>
              </a>
              <a href="https://go.hotmart.com/Q29402306D" target="_blank" class="btn btn-sm btn-primary">
                <i class="fa fa-eye"></i> Visualizar Curso
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
        <div class="card bg-light">
          <div class="card-header text-muted border-bottom-0">
            MANUTENÇÃO
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b>Curso Manutenção de Celular</b></h2>
                <p class="text-muted text-sm"><b>Sobre: </b> Manutenção de Celulares do Zero</p>
                <!--<ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                </ul>-->
              </div>
              <div class="col-5 text-center">
                <img src="{{ asset('image/cursos/m_celular.png')}}" alt="" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="mailto:simonfrtd@gmail.com" class="btn btn-sm bg-teal">
                <i class="fa fa-envelope"></i>
              </a>
              <a href="https://go.hotmart.com/R29401412K" target="_blank" class="btn btn-sm btn-primary">
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