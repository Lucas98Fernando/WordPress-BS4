<!doctype html>
<!-- Ativando a lingaguem dinâmica utilizando o PHP -->
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <!-- Configurando o charset automático com o PHP -->
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Caminho do CSS do Bootstrap utilizando a função bloginfo do PHP -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css">

    <!-- Caminho do CSS compiladado utilizando a função bloginfo do PHP -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">
    
    <!-- Caminho do CSS compiladado -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    

    <!-- Adicionando o header do WordPress -->
    <?php wp_head(); ?>
</head>

<body>
    <div class="container">

        <div class="row my-5 align-items-center">

            <div class="col-md-8 col-sm-12">
                <h1>WordPress + Bootstrap 4</h1>
                <p class="lead">Tema para WordPress com Bootstrap 4, utilizando SCSS e Gulp</p>
            </div>

            <div class="col-md-4 col-sm-12">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="O que deseja encontrar ?">
                        <div class="input-group-append">
                            <button class="btn btn-my-color-1" type="button">Pesquisar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">

            <div class="col mb-5">

                <!-- Utilizando uma das váriaveis de cor criadas no SCSS -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-my-color-2 rounded">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Quem somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Fale conosco</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>

        </div>