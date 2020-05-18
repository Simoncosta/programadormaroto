@extends('adminlte::page')

@section('title')

@section('content_header')
<h1 class="m-0 text-dark">Web Design e Desenvolvimento Web</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <h3 class="profile-username text-center">Sorteio - Caneca do DEV!!!</h3>
                <p class="text-muted text-center">
                    Corre lá e aproveita para participar
                    <a target="_blank" href="https://www.instagram.com/programadormaroto">@programadormaroto</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <section class="content-max-width">
            <section id="main-header">
                <div class="callout callout-warning">
                    <h4><i class="fas fa-bullhorn"></i> Bem Vindo!</h4> 
                    <p>
                        Procurando a melhor maneira de ficar à frente das tendências no setor de web design e desenvolvimento web? Você veio ao lugar certo. Com nosso blog de web design e desenvolvimento web, é fácil manter-se atualizado no mercado, além de aprender novas dicas e truques para web design e desenvolvimento web.

                        Navegue pelas nossas postagens mais recentes!
                    </p>
                </div>

                <div class="callout callout-info">
                    <h4>Web Designer</h4> 
                    <p>
                        Não importa o seu nível de experiência, nossas postagens no blog de web design oferecem algo para todos.
                    </p>
                    <p>
                        Esteja você procurando um novo site para inspiração de design ou procurando truques inovadores de design, nosso blog de web design oferece uma variedade de conteúdo para as necessidades de todos os web designers. Além disso, abordamos tópicos que cruzam o design da web, como experiência do usuário (UX), marketing digital e muito mais.
                    </p>
                    <p>
                        Se você deseja iniciar uma carreira em web design, nosso blog oferece uma variedade de recursos úteis. Se você está pesquisando o treinamento e a educação por trás de uma carreira em web design ou revisando os requisitos de um empregador, nossa postagem no blog de web design pode ajudar.
                    </p>
                </div>

                <div class="callout callout-info">
                    <h4>Web Developer</h4> 
                    <p>
                        As postagens do nosso blog de desenvolvimento da Web ajudam desenvolvedores da Web de todos os níveis e níveis de experiência.
                    </p>
                    <p>
                        Desde o aprendizado de uma nova linguagem de programação até a determinação do melhor sistema de gerenciamento de conteúdo (CMS) para um cliente, nosso blog de desenvolvimento da web fornece tudo o que você precisa para crescer como desenvolvedor profissional da web.
                    </p>
                </div>
            </section>
        </section>
    </div>
    <div class="col-lg-4">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <h3 class="profile-username text-center">CURSO DESTAQUE</h3>
                <div class="text-center">
                    <img class=" img-fluid img-circle" src="{{ asset('image/cursos/LogoAcademyLaraFood.png')}}" alt="User profile picture">
                </div>
                <p class="text-muted text-center">Curso de Laravel Completo!</p>
                <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> PHP / Laravel / ADMINLTE</strong>
                    <p class="text-muted">
                        Este curso aborda a criação do LaraFood (o delivery completo feito em Laravel). Desenvolve tudo do zero um sistema completo de delivery, com níveis de acesso (ACL) e muito mais.<br> APRENDI BASTANTE COM ESSE CURSO!!!
                    </p>
                </div>
                <a href="https://go.hotmart.com/D28646627Y" class="btn btn-success btn-block"><b>Aproveitar</b></a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    @foreach($news as $new)
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-indigo color-palette">
                <h3 class="card-title">
                    <i class="fas fa-code"></i>
                    Web Development e Web Designer
                </h3>
                <div class="d-flex justify-content-between">
                    <h3 class="card-title"></h3>
                    <h3 class="card-title">~ {{ $new->reading }} minutos lendo</h3>
                </div>
            </div>
            <div class="card-body">
                    <h4 class="">{{ $new->title }}</h4>
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <img class="img-fluid" src='{{ url("storage/news/{$new->sub_image}") }}' alt="Photo">
                    </div>
                    <div class="col-sm-8">
                        <p>{!! $new->sub_news !!}</p>
                        <span class="float-left">
                            <a type="button" class="btn btn-block btn-outline-secondary btn-sm" href="{{ route('noticia.show', $new->uuid) }}">Ler Mais...</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    @endforeach
    {{ $news->links() }}
</div>
@stop
