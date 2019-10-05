<body class="pt-3 bg">

  <?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

  <div>
    <div class="pt-5 px-2 row_dash mt-5" style="margin-right: 0;">
      <div class="col-md-6 mx-6 ml-6">
        <div class="col-md-12">
          <div class="row">
            <div>
              <span class="fa-stack fa-4x">
                <img style="max-width:90%" src="<?php echo base_url('\includes\img\icons\user_icon.png') ?>" alt="">
              </span>
            </div>
            <div>
              <?php if ($userInfo['VETERINARIO_NOME'] != "") {?>
              <p class="mt-5 font-weight-bold dashboard_user text_padrao">Seja bem vindo,
                <?php echo $userInfo['VETERINARIO_NOME'] ?></p>
              <p class="font-weight-bold text_padrao"><?php echo ("Dr. " . $userInfo['VETERINARIO_NOME']) ?></p>
              <?php } else {?>
              <p class="mt-5 font-weight-bold dashboard_user text_padrao">Seja bem vindo,
                <?php echo $userInfo['CLINICA_NOME_FANTASIA'] ?></p>
              <p class="font-weight-bold text_padrao"><?php echo ($userInfo['CLINICA_NOME_FANTASIA']) ?></p>
              <?php }?>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 mt-4">
        <div class="col-md-12">
          <div class="row">
            <div>
              <span class="fa-stack fa-1x">
                <img style="max-width:85%" src="<?php echo base_url('\includes\img\icons\icon_ajudar.png') ?>" alt="">
              </span>
            </div>
            <div>
              <p class="mt-2 ml-1 font-weight-bold dashboard_user text_padrao">Ajuda e Suporte</p>
            </div>
          </div>
          <div class="row mt-2">
            <div>
              <span class="fa-stack fa-1x">
                <a href="<?php echo base_url('editar/' . $userInfo['ID_USUARIO']) ?>"><img style="max-width:85%"
                    src="<?php echo base_url('\includes\img\icons\icon_settings.png') ?>" alt=""></a>
              </span>
            </div>
            <div>
              <p class="mt-2 ml-1 font-weight-bold dashboard_user text_padrao">Configurações</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pt-5 px-2 mt-5 row_dash background_dash ajuste_margin_dash_principal">
      <div class="col-md-4 mx-6 ml-6 ajuste_margin_list">
        <div>
          <div class="panel panel-primary" id="result_panel">
            <div class="panel-heading ">
              <h3 class="panel-title text_padrao">Casos / Seus Exames</h3>
            </div>
            <div class="panel-body">
              <ul class="list-group-scroll ajuste_bord_redonda" style="background-color: #F2DBAE ">
                <?php if ($agendamentos != null) {?>
                <?php $i = 1;foreach ($agendamentos as $agend) {?>
                <li class="list-group-item list_dash">
                  <?php if ($agend->PERFIL_EXAME_ID == 9) {?>
                  <a
                    href="<?php echo $agend->AGENDAMENTO_LAUDO ?>"><strong><?php print_r($i . " - " . $agend->AGENDAMENTO_OUTROS_EXAMES)?></strong></a>
                  <?php } else {?>
                  <a target="_blank"
                    href="<?php echo $agend->AGENDAMENTO_LAUDO ?>"><strong><?php print_r($i . " - " . $agend->DS_PERFIL_EXAME)?></strong></a>
                  <?php }?>
                  <p class="margin-botton-perso"><?php print_r("<b>Nome do Animal: </b>" . $agend->ANIMAL_NOME)?></p>
                  <p class="margin-botton-perso"><?php print_r("<b>Proprietario: </b>" . $agend->ANIMAL_PROPRIETARIO)?>
                  </p>
                  <p><?php print_r("<b>Status: </b>" . $agend->STATUS)?></p>
                </li>
                <?php $i++;}?>
                <?php } else {?>
                <li class="list-group-item list_dash">
                  <strong>Nenhum Item associado</strong>
                </li>
                <?php }?>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 mx-6 ml-4 ajuste_margin_list">
        <div>
          <div class="panel panel-primary" id="result_panel">
            <div class="panel-heading ">
              <h3 class="panel-title text_padrao">Requisições Enviadas </h3>
            </div>
            <div class="panel-body">
              <ul class="list-group-scroll ajuste_bord_redonda" style="background-color: #FFFFFF ">
                <li class="list-group-item list_dash_cad"><strong>Nenhum Item associado</strong>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <?php if ($permissao == 'CLI_PRO') {?>
      <div class="col-md-4 mx-6 ml-6 ajuste_margin_list">
        <div>
          <div class="panel panel-primary" id="result_panel">
            <div class="panel-heading ">
              <h3 class="panel-title text_padrao">Cadastrar Novo Usuário</h3>
            </div>
            <div class="panel-body">
              <ul class="list-group-scroll ajuste_bord_redonda" style="background-color: #F2DBAE ">
                <?php if ($vetAssociados != null) {?>
                <?php foreach ($vetAssociados as $vetass) {?>
                <li class="list-group-item list_dash">
                  <strong><?php print_r("Veterinario: " . $vetass->VETERINARIO_NOME)?></strong>
                  <p><?php print_r("CRMV: " . $vetass->VETERINARIO_CRMV)?></p>
                </li>
                <?php }?>
                <?php } else {?>
                <li class="list-group-item list_dash">
                  <strong>Nenhum Item associado</strong>
                </li>
                <?php }?>
              </ul>
              <div class="mt-2" style="text-align:center;">
                <a href="<?php echo base_url('cadastroVetCli/' . $userInfo['CLINICA_ID']) ?>"><button
                    class="btn-primary ajuste_bord_redonda">Cadastrar Novo Usuário</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
      <!-- <div class="col-md-8 mx-6 ml-6 mx-auto" style="text-align: center;">
      <div class="panel-heading "><h3 class="panel-title text_padrao">Canal Laviezoo</h3>
      </div>
      <div class="embed-responsive embed-responsive-16by9">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
      </div> -->

    </div>
  </div>
  </div>






</body>


<script>

</script>