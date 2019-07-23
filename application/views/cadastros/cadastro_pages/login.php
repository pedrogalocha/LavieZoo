<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<header class="bg text-white" style="background-image: url('<?php echo base_url('includes/img/bg/2_login_bg.png') ?>'); 
background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div style="padding-top:110px;"></div>
      <form class="text-dark text-uppercase needs-validation" method="POST" action='<?php echo base_url('post_login') ?>' novalidate>
        <div class="row">
          
        <div class="container col-sm-8 col-md-6 mx-auto align-self-center align-items-center justify-content-center" >
          <!-- Começo da border transparente-->

          <div class="rounded px-2 pt-3 pb-2 align-items-center justify-content-center"
            style="background-color: rgba(255, 255, 255, 0.85)">
            <img class="" src="<?php echo base_url('includes/img/agencia_cadastro_icone.svg') ?>" style="
            position:absolute;
            top: 0;
            left: 50%;
            transform:translate(-50%,-25%);
            "/>
            <div class="mt-5 row form-group" style="padding-top:50px ">
              <h3 class="mt-5 mx-auto font-weight-bold text-center" style="color: #0C7C95">Login</h3>
            </div>
            <div class="form-group row">
              <div class="col-md-9 mx-auto text-center">
              <label class="align-self-center font-weight-bold" for="inputEmail">E-mail</label>
                  <input type="email" class="form-control text-uppercase text-left" id="inputEmail"
                    placeholder="Digite o seu e-mail" required pattern="">

              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-9 mx-auto text-center">
              <label class="align-self-center font-weight-bold" for="inputSenha">Senha</label>
                  <input type="password" class="form-control text-uppercase text-left" id="inputSenha"
                    placeholder="Digite a sua senha" required>
              </div>
            </div>

            <div class="d-flex justify-content-center col-md-12">
                        <button class="btn btn-lg btn-warning text-white">Acessar</button>
                      </div>
                      <div class=" d-flex justify-content-center pt-2 col-md-12">
                        <button class="btn btn-sm btn-info">Ainda não é membro? Cadastre-se Aqui</button>
                      </div>

          </div> <!-- Fim da border transparente -->
</form>


</header>
