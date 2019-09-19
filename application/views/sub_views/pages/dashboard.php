<body class="pt-3 bg">

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
          <?php if($userInfo['VETERINARIO_NOME']  != "") {?>
            <p class="mt-5 font-weight-bold dashboard_user text_padrao">Seja bem vindo, <?php echo $userInfo['VETERINARIO_NOME'] ?></p>
            <p class="font-weight-bold text_padrao"><?php echo ("Dr. ".$userInfo['VETERINARIO_NOME']) ?></p>
          <?php } else { ?>
            <p class="mt-5 font-weight-bold dashboard_user text_padrao">Seja bem vindo, <?php echo $userInfo['CLINICA_NOME_FANTASIA'] ?></p>
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
              <img style="max-width:85%" src="<?php echo base_url('\includes\img\icons\icon_settings.png') ?>" alt="">
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
                <div class="panel-heading "><h3 class="panel-title text_padrao">Casos / Seus Exames</h3>
                </div>
                  <div class="panel-body" >
                  <ul class="list-group-scroll ajuste_bord_redonda" style="background-color: #F2DBAE ">
                      <li class="list-group-item list_dash"><strong>Signature
                          Accommodations</strong>
                          <p>Teste</p>
                      </li>
                  </ul>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-4 mx-6 ml-4 ajuste_margin_list">
          <div>
              <div class="panel panel-primary" id="result_panel">
                <div class="panel-heading "><h3 class="panel-title text_padrao">Cadastros Ativos  </h3>
                </div>
                  <div class="panel-body" >
                  <ul class="list-group-scroll ajuste_bord_redonda" style="background-color: #FFFFFF ">
                      <li class="list-group-item list_dash_cad"><strong>Signature
                          Accommodations</strong>
                          <p>Teste</p>
                      </li>
                  </ul>
                  </div>
              </div>
          </div>
      </div>
      
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



  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="myModalLabel">Wizard Steps</h3>
        </div>
        <div class="modal-body" id="myWizard">
          
         <div class="progress">
           <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 20%;">
             Step 1 of 5
           </div>
         </div>
        
         <div class="navbar">
            <div class="navbar-inner">
                  <ul class="nav nav-pills">
                     <li class="active"><a href="#step1" data-toggle="tab" data-step="1">Step 1</a></li>
                     <li><a href="#step2" data-toggle="tab" data-step="2">Step 2</a></li>
                     <li><a href="#step3" data-toggle="tab" data-step="3">Step 3</a></li>
                     <li><a href="#step4" data-toggle="tab" data-step="4">Step 4</a></li>
                  </ul>
            </div>
         </div>
         <div class="tab-content">
            <div class="tab-pane fade in active" id="step1">
               
              <div class="well"> 
                
                  <label>Security Question 1</label>
                  <select class="form-control input-lg">
                    <option value="What was the name of your first pet?">What was the name of your first pet?</option>
                    <option value="Where did you first attend school?">Where did you first attend school?</option>
                    <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                    <option value="What is your favorite car model?">What is your favorite car model?</option>
                  </select>
                  <br>
                  <label>Enter Response</label>
                  <input class="form-control input-lg">
              </div>
              <a class="btn btn-default next" href="#">Continue</a>
            </div>
            <div class="tab-pane fade" id="step2">
               <div class="well"> 
                  <label>Security Question 2</label>
                  <select class="form-control  input-lg">
                    <option value="What was the name of your first pet?">What was the name of your first pet?</option>
                    <option selected="" value="Where did you first attend school?">Where did you first attend school?</option>
                    <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
                    <option value="What is your favorite car model?">What is your favorite car model?</option>
                  </select>
                  <br>
                  <label>Enter Response</label>
                  <input class="form-control input-lg">
               </div>
               <a class="btn btn-default next" href="#">Continue</a>
            </div>
            <div class="tab-pane fade" id="step3">
              <div class="well"> <h2>Step 3</h2> Add another step here..</div>
               <a class="btn btn-default next" href="#">Continue</a>
            </div>
            <div class="tab-pane fade" id="step4">
              <div class="well"> <h2>Step 4</h2> You're Done!</div>
               <a class="btn btn-success first" href="#">Start over</a>
            </div>
         </div>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
          <button class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  




</body>


<script>

</script>