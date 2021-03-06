<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">
<header class="bg text-white" style="background-image: url('<?php echo base_url('includes/img/bg/3_novo membro_bg.png') ?>'); 
background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="container d-flex align-items-center justify-content-center">
        <section id="novomembro" class="mt-5 bg text-white w-100">
            <div class="container">
              <div class="row justify-content-center">
                <div class=" mx-auto col col-lg-8">
                  <h1 class="text-center text-uppercase">Novo membro <br/> Do Laviezoo!</h1>
                  <p class="text-center text-dark text-uppercase"><strong>Selecione qual perfil você se encaixa:</strong></p>
                </div>
              </div>
              <div class="row justify-content-center text-center">      
                    <div class="col-sm-2 mr-3">
                      <span class="fa-stack fa-3x">
                        <a href="<?php echo base_url('cadastro_clinica') ?>"><i class="fas fa-circle fa-stack-2x"style = "color: #84AFB7"></i>
                        <i class="fas fa-stack-1x fa-clinic-medical" style = "color:white"></i></a>
                      </span>
                      <h5 class="service-heading text-uppercase" style = "color: #39BFBF">Clínica</h4>
                    </div>
                    
                    <div class="border-right" style="border-width:2px !important;"></div>
                    <div class="col-sm-2 ml-3 ">
                      <span class="fa-stack fa-3x">
                        <a href="<?php echo base_url('cadastro_vet') ?>"><i class="fas fa-circle fa-stack-2x" style = "color: #84AFB7"></i>
                        <i class="fas fa-stack-1x fa-user-md" style = "color:white"></i></a>
                      </span>
                      <h5 class="service-heading text-uppercase" style = "color: #39BFBF">Veterinário</h4>
                    </div>
                    </div> 
              <div class="row justify-content-center mt-2">
              <a href="<?php echo base_url('login') ?>"><button class="rounded text-center btn btn-sm btn-light" >Ja é membro? Faça o login</button>
                </div>  
            </div>
          </section>
    </div>
</div>
</header>