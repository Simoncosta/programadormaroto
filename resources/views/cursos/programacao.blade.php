@extends('adminlte::page')

@section('title')
@section('title_postfix', ' - Programação')

@section('content_header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Programação</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/">Página Inicial</a></li>
      <li class="breadcrumb-item active">Programação</li>
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
            PHP - LARAVEL COMPLETO
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b>Curso Laravel (LaraFood)</b></h2>
                <p class="text-muted text-sm"><b>Sobre: </b> Web Designer / PHP / Laravel / HTML / CSS / JS </p>
                <!--<ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                </ul>-->
              </div>
              <div class="col-5 text-center">
                <img src="{{ asset('image/cursos/LogoAcademyLaraFood.png')}}" alt="" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="mailto:simonfrtd@gmail.com" class="btn btn-sm bg-teal">
                <i class="fa fa-envelope"></i>
              </a>
              <a href="https://go.hotmart.com/D28646627Y" target="_blank" class="btn btn-sm btn-primary">
                <i class="fa fa-eye"></i> Visualizar Curso
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
        <div class="card bg-light">
          <div class="card-header text-muted border-bottom-0">
            PHP SAMURAI
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b>Treinamento PHP Samurai | EspecializaTi</b></h2>
                <p class="text-muted text-sm"><b>Sobre: </b> Curso PHP Samurai / Básico / OO / PDO / namespaces / DI / PHPDOC / PSR / MVC / Composer / e muito mais </p>
                <!--<ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                </ul>-->
              </div>
              <div class="col-5 text-center">
                <img src="{{ asset('image/cursos/phpsamurai.jpg')}}" alt="" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="mailto:simonfrtd@gmail.com" class="btn btn-sm bg-teal">
                <i class="fa fa-envelope"></i>
              </a>
              <a href="https://go.hotmart.com/U29423442Y" target="_blank" class="btn btn-sm btn-primary">
                <i class="fa fa-eye"></i> Visualizar Curso
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
        <div class="card bg-light">
          <div class="card-header text-muted border-bottom-0">
            LARAVEL COM VUE
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b>Curso de Laravel com Vue JS</b></h2>
                <p class="text-muted text-sm"><b>Sobre: </b> Poderoso Framework PHP Laravel, e ainda abuse dos recursos do Vue JS. </p>
                <!--<ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                </ul>-->
              </div>
              <div class="col-5 text-center">
                <img src="{{ asset('image/cursos/vue.jpg')}}" alt="" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="mailto:simonfrtd@gmail.com" class="btn btn-sm bg-teal">
                <i class="fa fa-envelope"></i>
              </a>
              <a href="https://go.hotmart.com/A29424086P" target="_blank" class="btn btn-sm btn-primary">
                <i class="fa fa-eye"></i> Visualizar Curso
              </a>
            </div>
          </div>
        </div>
      </div>


      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
        <div class="card bg-light">
          <div class="card-header text-muted border-bottom-0">
            PHP - CRUD
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b>Crud Bootstrap, PHP-OO, PDO e PostgreSQL</b></h2>
                <p class="text-muted text-sm"><b>Sobre: </b> Bootstrap / PHP no Back-end / PostgreSQL </p>
                <!--<ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                </ul>-->
              </div>
              <div class="col-5 text-center">
                <img src="{{ asset('image/cursos/phpcrud.png')}}" alt="" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="mailto:simonfrtd@gmail.com" class="btn btn-sm bg-teal">
                <i class="fa fa-envelope"></i>
              </a>
              <a href="https://go.hotmart.com/V29401017K" target="_blank" class="btn btn-sm btn-primary">
                <i class="fa fa-eye"></i> Visualizar Curso
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
        <div class="card bg-light">
          <div class="card-header text-muted border-bottom-0">
            PYTHON
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b>Python Completo - Do Júnior ao Sênior</b></h2>
                <p class="text-muted text-sm"><b>Sobre: </b> Neste curso você ganhará de brinde 5 Cursos COMPLETOS de Python </p>
                <!--<ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                </ul>-->
              </div>
              <div class="col-5 text-center">
                <img src="{{ asset('image/cursos/PYTHON.png')}}" alt="" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="mailto:simonfrtd@gmail.com" class="btn btn-sm bg-teal">
                <i class="fa fa-envelope"></i>
              </a>
              <a href="https://go.hotmart.com/R29402640G" target="_blank" class="btn btn-sm btn-primary">
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