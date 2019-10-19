<?php
defined('BASEPATH') or exit('No direct script access allowed');
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

  <link href="<?php echo base_url('includes/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" />

  <!-- Custom fonts for this template -->
  <script src="https://kit.fontawesome.com/0f03743da6.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway&display=swap" rel="stylesheet" />
  <script src="<?php echo base_url('includes/vendor/jquery/jquery.js') ?>"></script>
  <script src="<?php echo base_url('includes/vendor/jquery/jquery.min.js') ?>"></script>



  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('includes/css/scrolling-nav.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('includes/css/fonts.css') ?>" rel="stylesheet" />
  <link href="<?php echo base_url('includes/css/cadastro.css') ?>" rel="stylesheet" />

  <script type="text/javascript" src="<?php echo base_url('includes/js/jquery.mask.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('includes/js/jquery.mask.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('includes/js/jquery.validate.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('includes/js/jquery.validate.min.js') ?>"></script>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">
    <div class="container">
      <a class=" font_logo navbar-brand js-scroll-trigger fonte-rale" href="<?php echo base_url('') ?>"><span
          style="color:#00617C; ">Lavie</span><span style="color: #0C7C95;">Zoo</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item nav-texto">
            <a class="nav-link js-scroll-trigger navbar-links" href="#about">SOBRE</a>
          </li>
          <li class="nav-item nav-texto">
            <?php $hidden = "hidden";
            if ($this->session->userdata('USUARIO_NIVEL_ACESSO') >= 1) {
                $hidden = "id"
                ?>
            <a class="nav-link js-scroll-trigger navbar-links"
              href="<?php echo base_url('agendamento') ?>">AGENDAMENTO</a>
            <?php };?>

          </li>
          <?php if ($this->session->userdata('USUARIO_NIVEL_ACESSO') != null || $this->session->userdata('USUARIO_NIVEL_ACESSO') != "ADMIN") {?>
          <li class="nav-item nav-texto">
            <a class="nav-link js-scroll-trigger navbar-links" href="<?php echo base_url('Dash') ?>">DASHBOARD</a>
          </li>
          <li class="nav item">
            <a href="<?php echo base_url('sair') ?>"><button class="btn btn-azul">Sair</button></a>
          </li>
          <?php }
;?>
          <?php if ($this->session->userdata('USUARIO_NIVEL_ACESSO') == null){?>
          <li class="nav item">
            <a href="<?php echo base_url('login') ?>"><button class="btn btn-azul">LOGIN</button></a>
          </li>
          <li class="nav item">
            <a href="<?php echo base_url('cadastro') ?>"><button class="btn btn-laranja">CADASTRE-SE</button></a>
          </li>
          <?php }
;?>
          <li class="nav item">
            <a href="">
              <div class="fa-stack fa-2x" style="font-size: 20px;">
                <i class="insta-circle fas fa-circle fa-stack-2x" style=""></i>
                <i class="insta-icon fab fa-stack-1x fa-instagram fa-lg"></i>
            </a>
      </div>
      </li>
      </ul>
    </div>
    </div>
  </nav>