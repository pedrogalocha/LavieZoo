<!-- <section id="about">
  <div class="container">
    <div class="row">
      <img src="<?php echo base_url('includes/img/icon_doggo.svg') ?>"
        class="dog_mobile col-sm-2 rounded mx-auto d-block" alt="ìcone de um cachorro" />
      <div class="w-100"></div>
      <div class="col-lg-8 mx-auto">
        <p class="lead text-center font-weight-bold" style="color: #224F59">Veterinário, você está <br /> no lugar certo
          e na hora certa!</p>

        <div class="text-muted text-center">
          CONHEÇA OS PLANOS,<b> LITE E BASIC</b>
          ESCOLHA QUAL SE ADEQUA<br> MELHOR A SUA ROTINA, EXPERIMENTE FAZER PARTE DA EQUIPE
          <br> LAVIEZOO. </div>
      </div>
    </div>
    <div class="row justify-content-between text-center">
      <div class="col-sm-2"></div>
      <div class="col-sm-2">
        <span class="fa-stack fa-3x">
          <i class="fas fa-hands-helping"></i>
        </span>
        <h5 class="service-heading">SUPORTE</h4>

      </div>
      <div class="col-sm-2">
        <span class="fa-stack fa-3x">
          <i class="fas fa-vial"></i>
        </span>
        <h5 class="service-heading">LABORATÓRIO</h4>

      </div>
      <div class="col-sm-2">
        <span class="fa-stack fa-3x">
          <i class="fas fa-credit-card "></i>
        </span>
        <h5 class="service-heading">PAGAMENTO INTEGRADO</h4>

      </div>
      <div class="col-sm-2">
        <span class="fa-stack fa-3x">
          <i class="fas fa-user-md "></i>
        </span>
        <h5 class="service-heading">PLATAFORMA PESSOAL</h4>

      </div>
      <div class="col-sm-2"></div>
    </div>
    <div class="row justify-content-center" style="margin-top:20px">
      <a href="<?php echo base_url('cadastro') ?>"><button 
          class="text-center btn btn-lg btn-laranja">CADASTRE-SE</button></a>
    </div>
  </div>
</section> -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<section id="about">
  <center><p class="h1 text-dark font-weight-bold">NOSSOS PLANOS</p>
<br>
<p class="h4 text-dark font-weight-bold">A Laviezoo oferece seus serviços laboratoriais</br>
sem cobrar nenhuma taxa de inscrição ou de cancelamento!</br></br>
Aqui, você fica a vontade para escolher o</br>
melhor plano para você e/ou sua equipe:
</p>
<br>
<br>
</center>
<div class="row justify-content-center" style="margin-top:20px">
      <!-- <a href="<?php echo base_url('cadastro') ?>"><button 
          class="text-center btn btn-lg btn-laranja">SAIBA MAIS</button></a> -->

          <button onclick="document.getElementById('id01').style.display='block'"  class="text-center btn btn-lg btn-laranja">SAIBA MAIS</button>
    </div>
</section>

<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        
      </header>
      <div class="w3-container">
      <header class="bg text-white" style="background-image: url('<?php echo base_url('includes/img/bg/CONHECA.png') ?>'); 
background-repeat: no-repeat; background-size: 100% 100%; background-position: center center;">
      </div>
      
    </div>
  </div>