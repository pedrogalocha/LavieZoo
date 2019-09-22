<body class="pt-5 bg text-white" style="margin-top:80px; background-color: #F3F3F3; background-image:none">
<?php 
?>
      <form class="text-dark text-uppercase needs-validation" method="POST" id="form_cad" action='<?php echo base_url('insert_vet') ?>' novalidate autocomplete="off">
        <div class="row" style="display: inline">
          
        <div class="pt-5 container col-sm-8 mx-auto align-self-center align-items-center justify-content-center">
            


          <div class="pt-4 px-2 form-group row">
            <div class="col-md-6 mx-auto ">
              <label class="align-self-center font-weight-bold" for="inputNomeAnimal">Nome</label>
              <input type="text" class="form-control text-uppercase text-left" name="inputNomeAnimal" id="inputNomeAnimal"
                placeholder="Nome Do Animal" required >
            </div>

            <div class="col-md-6 mx-auto ">
              <label class="align-self-center font-weight-bold" for="inputIdadeAnimal">IDADE</label>
              <input type="text" required class="form-control text-uppercase text-left" name="inputIdadeAnimal" id="inputIdadeAnimal"
                placeholder="Idade do Animal" required>
            </div>
          </div>

          <div class="px-2 form-group row">
              <div class="col-md-6 mx-auto ">
              <div class="pt-4 form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                  value="Cachorro" required>
                <label class="form-check-label" for="inlineRadio1">Cachorro</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                  value="Gato">
                <label class="form-check-label" for="inlineRadio2">Gato</label>
              </div>
            </div>

            <div class="col-md-6 mx-auto ">
              <label class="align-self-center font-weight-bold"  for="inputRaça">Raça</label>
              <input type="text" class="form-control text-uppercase text-left cpf" name="inputRaça" id="inputRaça" placeholder="Digite a Raça do Animal" required>
            </div>
          </div>

          <div class="px-2 form-group row">
            <div class="col-md-12 mx-auto ">
              <label class="align-self-center font-weight-bold" required for="inputConveniado">Nome do Porprietário</label>
              <input type="text" class="form-control text-uppercase text-left form-control" name="inputNomeProprietario" id="inputNomeProprietario" placeholder="Nome Completo do Proprietario do Animal">
            </div>
          </div>

            <hr style="border-top: dotted 10px; color: #6EB1B9;" />
          
            <div class="px-2 form-group row">
              <div class="col-md-12 mx-auto ">
              <?php foreach($tipoAgendamento as $tpagen){ ?>
                <div class="pt-2 form-check form-check">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="<?php print_r($tpagen->PERFIL_EXAME_ID) ?>" required>
                  <label class="form-check-label" for="inlineRadio1"><b><?php print_r($tpagen->TIPO_PERFIL_EXAME)?> </b>- <?php print_r($tpagen->DS_PERFIL_EXAME) ?></label>
                </div>
              <?php } ?>
              </div>
            </div>

            <div class="px-2 form-group row">
              <div class="col-md-12 mx-auto ">
                <label class="align-self-center font-weight-bold" required for="inputConveniado">Outros Exames: </label>
                <input type="text" class="form-control text-uppercase text-left form-control" name="inputOutrosExames" id="inputOutrosExames" placeholder="Digite Aqui">
              </div>
            </div>
          </div>

          
          <div class="pt-2 container col-sm-12 mx-auto align-self-center align-items-center justify-content-center" style="margin-top:30px; margin-bottom:30px; background-color: #F9F2C7">
            <div class="px-2 form-group row">
            <div class="col-md-8 mx-auto mb-2 ">
                <div class="pt-2 form-check form-check">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadioOptions2"
                    value="buscaEmClinica" required>
                  <label class="form-check-label" for="buscaEmClinica">Busca em Clinica</label>
                </div>
                <div class="pt-2 form-check form-check" style="padding-left: 0px !important">
                  <div class="col-sm-3 d-inline" style="padding-left: 0px !important">
                    <div class="pt-2 form-check form-check d-inline">
                      <input class="form-check-input" type="radio" name="Coleta" id="inlineRadioOptions2"
                        value="outro">
                      <label class="form-check-label" for="coletaEmClinica">Coleta em Clinica</label>
                    </div>
                  </div>
                  <div class="col-sm-2 d-inline" style="padding-left: 1px !important; padding-right:0px">
                    <label name="dataColeta" id="outro" class="align-self-center font-weight-bold" for="inputDataColeta">Data</label>
                  </div>
                  <div class="col-sm-2 d-inline " style="padding-left: 1px !important">
                    <input type="date" name="inputColeta" id="inputColeta"
                    placeholder="dd/mm/aaaa" >
                  </div>
                  <div class="col-sm-2 d-inline" style="padding-left: 1px !important">
                    <select class="coleta-clinica-faixa" id="exampleFormControlSelect1" onchange="">
                      <option value="0">Faixa de Horario</option>
                      <option value="1">09h-10h</option>
                      <option value="2">10h-11h</option>
                      <option value="3">11h-12h</option>
                      <option valur="4">12h-13h</option>
                    </select>
                  </div>
                </div>
                <div class="pt-2 form-check form-check" tyle="
                    padding-top: 0px !important;
                ">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadioOptions2"
                    value="buscaDomiciliar" required>
                  <label class="form-check-label" for="buscaDomiciliar">Coleta Domiciliar</label>
                </div>
              </div>
            </div>
          </div>
            <div class="col-md-12 mb-2" style="text-align:center;">
              <button type="submit" class="btn btn-lg btn-warning text-white">Enviar</button>
            </div>
        </div>
      </div>
      </form>

      <script>   
        $(document).ready(function($){
          $('.ddd_cell').mask('(00) 00000-0000');
          $('.ddd_fix').mask('(00) 0000-0000');
          $('.cpf').mask('000.000.000-00');

          $("#form_cad").validate();
        });

        $("#form_cad").validate({
          rules : {
                inputNomeCompleto:{
                  required:true,
                },
                inputCRMV:{
                  required:true,
                },
                inputDataDeNascimento:{
                  required:true,
                },
                inputCel:{
                  required:true,
                },
                inputEmail:{
                  required:true,
                  minlength: 6,
                },
                inputSenha:{
                  required:true,
                  minlength: 6,
                },
                inputSenhaConfirm:{
                  equalTo: inputSenha,
                },
                inputEspecialidade:{
                  required:true,
                },
                inputEmailConfirm:{
                  equalTo: inputEmail,
                },         
          },
          messages:{
                inputNomeCompleto:{
                  required:"Por favor, insira um nome",
                },
                inputCRMV:{
                  required:"Por favor, insira o CRMV",
                },
                inputDataDeNascimento:{
                  required:"Por favor, insira data de nascimento.",
                },
                inputCel:{
                  required:"Por favor, informe um telefone celular",
                },
                inputEmail:{
                  required:"É necessário informar um email",
                  minlength: "É necessário inserir um email valido.",
                },
                inputSenha: {
                  required:"É necessário informar uma senha valida.",
                  minlength: "A senha deve ter pelo menos 6 digitos.",
                },
                inputSenhaConfirm: {
                  equalTo: "As duas senhas devem ser iguais.",
                },
                inputEmailConfirm:{
                  equalTo: "Os dois emails devem ser iguais.",
                },
          }
        });

        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        
        $("input[name='Coleta']:radio")
        .change(function() {
          $("#ativo").toggle($(this).val() == "outro");
      </script>
  </body>