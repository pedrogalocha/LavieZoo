<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lavie Zoo - Cuidado a um toque</title>

  <!-- Bootstrap core CSS -->
  
  <link href="<?php echo base_url('includes/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <script src="https://kit.fontawesome.com/0f03743da6.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway&display=swap" rel="stylesheet">


    
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('includes/css/scrolling-nav.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('includes/css/fonts.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger fonte-rale" href="#page-top"><span style="color:#00617C;">Lavie</span><span style="color: #0C7C95;">Zoo</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item nav-texto" >
            <a class="nav-link js-scroll-trigger navbar-links" href="#about">SOBRE</a>
          </li>
          <li class="nav-item nav-texto">
            <a class="nav-link js-scroll-trigger navbar-links" href="<?php echo base_url('agendamento') ?>">AGENDAMENTO</a>
          </li>
          <li class="nav item">
            <a href="<?php echo base_url('login') ?>"><button class="btn btn-azul">LOGIN</button></a>
          </li>
          <li class="nav item">
            <a href="<?php echo base_url('cadastro') ?>"><button  class="btn btn-laranja">CADASTRE-SE</button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>