<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Spartacus Traders</title>
    <link rel="icon" href="favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="res/site/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="res/site/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='res/site/css/personal.css' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="res/site/css/agency.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav" style="background: rgba(0,0,0,0.6); padding-top: 40px; padding-bottom: 22px; border: none; height: 100px">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger img-logo" href="#page-top"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Menu do Site">
            menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#sobre">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#loja">Treinamento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="drop-entrar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entrar</a>
                    <div class="dropdown-menu" aria-labelledby="linkDrop" style="padding: 15px 15px">
                        <form style="width: 180px;" action="std/login" method="post">
                            <div>
                                <label style="font-family: Arial, Helvetica, sans-serif; font-size: 1.2em; font-style: oblique">Área do Aluno</label>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control mr-sm-2" placeholder="E-mail" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control mr-sm-2" placeholder="Senha" name="pass">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary my-2 my-sm-2">Entrar</button>
                            </div>
                            <div>
                                <label style="font-family: Arial, Helvetica, sans-serif; font-size: 0.7em; font-style: oblique">esqueceu sua senha?</label>
                            </div>



                        </form>

                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>