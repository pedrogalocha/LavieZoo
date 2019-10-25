<body class="pt-5 bg text-white " style="margin-top:80px; background-color: #F3F3F3; background-image:none">

  <form class="text-dark text-uppercase needs-validation" id="form_atu" method="POST"
    action="<?php echo base_url('update_vet') ?>" novalidate>
    <div class="row">
      <div class="pt-5 container col-sm-8 mx-auto align-self-center align-items-center justify-content-center">
        <div class="rounded px-2 pt-3 pb-5 align-items-center justify-content-center"
          style="background-color: rgba(255, 255, 255, 0.85)">
          <!-- Começo da border transparente-->

          <?php if(strpos($userInfo['USUARIO_NIVEL_ACESSO'], "CLI") !== false ) {?> <img class=""
            src="<?php echo base_url('includes/img/agencia_cadastro_icone.svg') ?>" style="
      position:absolute;
      top: 0;
      left: 50%;
      transform:translate(-50%,-25%);
      " />
          <div class="mt-5 row form-group">
            <h3 class="mt-5 mx-auto font-weight-bold text-center" style="color: #0C7C95">Cadastro Clínica</h3>
          </div>
          <div class="form-group row">
            <div class="col-md-9 mx-auto text-center">
              <label class="align-self-center font-weight-bold" for="inputNomeDaInstituicao">Nome da
                Instituição</label>
              <input type="text" class="form-control text-uppercase"
                value="<?php echo $userInfo['CLINICA_NOME_FANTASIA']?>" name="inputNomeDaInstituicao"
                id="inputNomeDaInstituicao" placeholder="Opções: Clínica, Hospital, Consultório, Laboratório">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-9 mx-auto text-center">
              <label class="align-self-center font-weight-bold" for="inputCNPJ">CNPJ</label>
              <input type="text" class="form-control text-uppercase cnpj" value="<?php echo $userInfo['CLINICA_CNPJ']?>"
                name="inputCNPJ" id="inputCNPJ" placeholder="Digite o CNPJ da instituição" pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})
            ">
            </div>
          </div>
        </div>

        <div class="pt-4 px-2 form-group row">
          <div class="col-md-6 mx-auto ">
            <label class="align-self-center font-weight-bold" for="inputEspecialidade">Nome Responsável</label>
            <input type="text" class="form-control text-uppercase text-left" name="inputEspecialidade"
              id="inputEspecialidade" placeholder="Qual a sua Especialidade?"
              value="<?php echo $userInfo['CLINICA_RESPONSAVEL_NOME']?>">
          </div>
          <div class="col-md-6 mx-auto ">
            <label class="align-self-center font-weight-bold" for="inputDataDeNascimento">Data de Nascimento</label>
            <input type="date" class="form-control text-uppercase text-left" name="inputDataDeNascimento"
              id="inputDataDeNascimento" value="<?php echo $userInfo['CLINICA_RESPONSAVEL_DATA_DE_NASCIMENTO']?>">
          </div>
        </div>

        <div class="px-2 form-group row">
          <div class="col-md-6 mx-auto ">
            <div class="pt-4 form-check form-check-inline">
              <input class="form-check-input"
                <?php echo $userInfo['CLINICA_RESPONSAVEL_SEXO']=="Masculino" ? "checked" : "" ?> type="radio"
                name="inlineRadioOptions" id="inlineRadio1" value="Masculino">
              <label class="form-check-label" for="inlineRadio1">Masculino</label>
            </div>
            <div class="form-check form-check-inline">
              <input <?php echo $userInfo['VETERINARIO_SEXO']=="Feminino" ? "checked" : "" ?> class="form-check-input"
                type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Feminino">
              <label class="form-check-label" for="inlineRadio2">Feminino</label>
            </div>
            <div class="form-check form-check-inline">
              <input <?php echo $userInfo['VETERINARIO_SEXO']=="NaoBinario" ? 'checked' : '' ?> lass="form-check-input"
                type="radio" name="inlineRadioOptions" id="inlineRadio3" value="NaoBinario">
              <label class="form-check-label" for="inlineRadio3">Não Binário</label>
            </div>
          </div>

          <div class="col-md-6 mx-auto ">
            <label class="align-self-center font-weight-bold" for="inputCPF">CPF</label>
            <input type="text" value="<?php echo $userInfo['CLINICA_RESPONSAVEL_CPF']?>"
              class="form-control text-uppercase text-left cpf" name="inputCPF" id="inputCPF" placeholder="Digite o CPF"
              pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})">
          </div>
        </div>

        <hr style="border-top: dotted 10px; color: #6EB1B9;" />

        <div class="px-2 pt-4 form-group row">
          <div class="col-md-12 mx-auto ">
            <label class="align-self-center font-weight-bold" for="inputEndereco">Endereço</label>
            <input type="text" value="<?php echo $userInfo['CLINICA_ENDEREÇO']?>"
              class="form-control text-uppercase text-left" name="inputEndereco" id="inputEndereco"
              placeholder="Digite o endereço da instituição">
          </div>
        </div>

        <div class="px-2 form-group row">

          <div class="col-md-2 mx-auto ">
            <label class="align-self-center font-weight-bold" for="inputComplemento">Complemento</label>
            <input type="text" value="<?php echo $userInfo['CLINICA_COMPLEMENTO']?>"
              class="form-control text-uppercase text-left" name="inputComplemento" id="inputComplemento"
              placeholder="Digite Aqui" formnovalidate="true">
          </div>

          <div class="col-md-4 mx-auto ">
            <label class="align-self-center font-weight-bold" for="inputBairro">Bairro</label>
            <input type="text" value="<?php echo  $userInfo['CLINICA_BAIRRO']?>"
              class="form-control text-uppercase text-left" name="inputBairro" id="inputBairro"
              placeholder="Digite Aqui">
          </div>

          <div class="col-md-4 mx-auto ">
            <label class="align-self-center font-weight-bold" for="inputCidade">Cidade</label>
            <input type="text" value="<?php echo $userInfo['CLINICA_CIDADE']?>"
              class="form-control text-uppercase text-left" name="inputCidade" id="inputCidade"
              placeholder="Digite Aqui">
          </div>
          <div class="col-md-2 mx-auto ">
            <label class="align-self-center font-weight-bold" for="inputEstado">Estado</label>
            <input type="text" value="<?php echo  $userInfo['CLINICA_ESTADO']?>"
              class="form-control text-uppercase text-left" name="inputEstado" id="inputEstado" placeholder="SP">
          </div>
        </div>


        <div class="px-2 form-group row">
          <div class="col-md-2 mx-auto ">
            <label class="align-self-center font-weight-bold" for="inputCep">CEP</label>
            <input type="text" value="<?php echo $userInfo['CLINICA_CEP']?>"
              class="form-control text-uppercase text-left cep" name="inputCep" id="inputCep" placeholder="Digite Aqui"
              pattern="[0-9]{5}[\-]?[0-9]{3}" onblur="buscarEndereco(document.getElementById('inputCep').value); ">
          </div>

          <div class="col-md-4 mx-auto ">
            <label class="align-self-center font-weight-bold" for="inputCelular">Celular</label>
            <input type="text" value="<?php echo $userInfo['CLINICA_CELULAR']?>"
              class="form-control text-uppercase text-left ddd_cell" name="inputCelular" id="inputCelular"
              placeholder="(__) _____-____" pattern="^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$">
          </div>
          <div class="col-md-6"></div>
        </div>
        <?php } else {?>

        <img class="" src="<?php echo base_url('includes/img/icons/user_icon.png') ?>" style="
    position:absolute;
    top: 0;
    left: 50%;
    transform:translate(-50%,-25%);
    max-width : 20%;
    " />

        <div class="mt-5 row form-group">
          <h3 class="mt-5 mx-auto font-weight-bold text-center" style="color: #0C7C95">Dados Veterinário</h3>
        </div>

        <div class="form-group row">
          <div class="col-md-9 mx-auto text-center">
            <label class="align-self-center font-weight-bold" for="inputNomeCompleto">Nome Completo</label>
            <input type="text" class="form-control text-uppercase" value="<?php echo $userInfo['VETERINARIO_NOME']?>"
              name="inputNomeCompleto" id="inputNomeCompleto" placeholder="Digite o seu nome completo">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-9 mx-auto text-center">
            <label class="align-self-center font-weight-bold" for="inputCRMV">CRMV</label>
            <input type="text" class="form-control text-uppercase" value="<?php echo $userInfo['VETERINARIO_CRMV']?>"
              name="inputCRMV" id="inputCRMV" placeholder="Digite o CRMV" pattern="^[0-9]*$">

              <input type="text" class="form-control text-uppercase" value="<?php echo $userInfo['VETERINARIO_ID']?>"
              name="inputId" id="inputId"  pattern="^[0-9]*$" hidden>
          </div>
        </div>
      </div>

      <div class="pt-4 px-2 form-group row">
        <div class="col-md-6 mx-auto ">
          <label class="align-self-center font-weight-bold" for="inputDataDeNascimento">Data de Nascimento</label>
          <input type="date" value="<?php echo $userInfo['VETERINARIO_DATA_NASC']?>"
            class="form-control text-uppercase text-left" name="inputDataDeNascimento" id="inputDataDeNascimento"
            placeholder="dd/mm/aaaa" pattern="^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$">
        </div>

        <div class="col-md-6 mx-auto ">
          <label class="align-self-center font-weight-bold" for="inputEspecialidade">Especialidade</label>
          <input type="text" value="<?php echo $userInfo['VETERINARIO_ESPECIALIDADE']?>"
            class="form-control text-uppercase text-left" name="inputEspecialidade" id="inputEspecialidade"
            placeholder="Qual a sua Especialidade?">
        </div>
      </div>

      <div class="px-2 form-group row">
        <div class="col-md-6 mx-auto ">
          <div class="pt-4 form-check form-check-inline">
            <input class="form-check-input" <?php echo $userInfo['VETERINARIO_SEXO']=="Masculino" ? "checked" : "" ?>
              type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Masculino">
            <label class="form-check-label" for="inlineRadio1">Masculino</label>
          </div>
          <div class="form-check form-check-inline">
            <input <?php echo $userInfo['VETERINARIO_SEXO']=="Feminino" ? "checked" : "" ?> class="form-check-input"
              type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Feminino">
            <label class="form-check-label" for="inlineRadio2">Feminino</label>
          </div>
          <div class="form-check form-check-inline">
            <input <?php echo $userInfo['VETERINARIO_SEXO']=="NaoBinario" ? "checked" : "" ?> class="form-check-input"
              type="radio" name="inlineRadioOptions" id="inlineRadio3" value="NaoBinario">
            <label class="form-check-label" for="inlineRadio3">Não Binário</label>
          </div>
        </div>

        <div class="col-md-6 mx-auto ">
          <label class="align-self-center font-weight-bold" for="inputCPF">CPF</label>
          <input type="text" value="<?php echo $userInfo['VETERINARIO_CPF']?>"
            class="form-control text-uppercase text-left cpf" name="inputCPF" id="inputCPF" placeholder="Digite o CPF"
            pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})">
        </div>
      </div>

      <hr style="border-top: dotted 10px; color: #6EB1B9;" />

      <div class="px-2 pt-4 form-group row">
        <div class="col-md-12 mx-auto ">
          <label class="align-self-center font-weight-bold" for="inputEndereco">Endereço</label>
          <input type="text" value="<?php echo  $userInfo['VETERINARIO_ENDERECO']?>"
            class="form-control text-uppercase text-left" name="inputEndereco" id="inputEndereco"
            placeholder="Digite o endereço da instituição">
        </div>
      </div>

      <div class="px-2 form-group row">

        <div class="col-md-2 mx-auto ">
          <label class="align-self-center font-weight-bold" for="inputComplemento">Complemento</label>
          <input type="text" value="<?php echo  $userInfo['VETERINARIO_COMPLEMENTO'] ?>"
            class="form-control text-uppercase text-left" name="inputComplemento" id="inputComplemento"
            placeholder="Digite Aqui" formnovalidate="true">
        </div>

        <div class="col-md-4 mx-auto ">
          <label class="align-self-center font-weight-bold" for="inputBairro">Bairro</label>
          <input type="text" value="<?php echo  $userInfo['VETERINARIO_BAIRRO']?>"
            class="form-control text-uppercase text-left" name="inputBairro" id="inputBairro" placeholder="Digite Aqui">
        </div>

        <div class="col-md-4 mx-auto ">
          <label class="align-self-center font-weight-bold" for="inputCidade">Cidade</label>
          <input type="text" value="<?php echo  $userInfo['VETERINARIO_CIDADE']?>"
            class="form-control text-uppercase text-left" name="inputCidade" id="inputCidade" placeholder="Digite Aqui">
        </div>
        <div class="col-md-2 mx-auto ">
          <label class="align-self-center font-weight-bold" for="inputEstado">Estado</label>
          <input type="text" value="<?php echo  $userInfo['VETERINARIO_ESTADO'] ?>"
            class="form-control text-uppercase text-left" name="inputEstado" id="inputEstado" placeholder="SP">
        </div>
      </div>


      <div class="px-2 form-group row">
        <div class="col-md-2 mx-auto ">
          <label class="align-self-center font-weight-bold" for="inputCep">CEP</label>
          <input type="text" value="<?php echo  $userInfo['VETERINARIO_CEP'] ?>"
            class="form-control text-uppercase text-left cep" name="inputCep" id="inputCep" placeholder="Digite Aqui"
            pattern="[0-9]{5}[\-]?[0-9]{3}" onblur="buscarEndereco(document.getElementById('inputCep').value); ">
        </div>

        <div class="col-md-4 mx-auto ">
          <label class="align-self-center font-weight-bold" for="inputCelular">Cel</label>
          <input type="text" value="<?php echo  $userInfo['VETERINARIO_CELULAR'] ?>"
            class="form-control text-uppercase text-left ddd_cell" name="inputCelular" id="inputCelular"
            placeholder="(__) _____-____" pattern="^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$">
        </div>
        <div class="col-md-6"></div>
        
      </div>
      
      <?php }?>
      <div class="col-md-12">
                        <button type="submit" class="btn btn-lg btn-warning text-white">Atualizar</button>
                      </div>
                 </div>



    </div>


    </div>
    