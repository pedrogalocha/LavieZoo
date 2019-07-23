<body class="pt-5 bg text-white" style="margin-top:80px; background-color: #F9F2C7; background-image:none">

      <form class="text-dark text-uppercase needs-validation" method="POST" action='<?php echo base_url('insert_vet') ?>' novalidate>
        <div class="row">
          
        <div class="pt-5 container col-sm-8 mx-auto align-self-center align-items-center justify-content-center">
          <!-- Começo da border transparente-->

          <div class="rounded px-2 pt-3 pb-5 align-items-center justify-content-center"
            style="background-color: rgba(255, 255, 255, 0.85)">
            <img class="" src="img/agencia_cadastro_ICONE.svg" style="
            position:absolute;
            top: 0;
            left: 50%;
            transform:translate(-50%,-25%);
            "/>
            <div class="mt-5 row form-group">
              <h3 class="mt-5 mx-auto font-weight-bold text-center" style="color: #0C7C95">Cadastro Clínica</h3>
            </div>
            <div class="form-group row">
              <div class="col-md-9 mx-auto text-center">
                <label class="align-self-center font-weight-bold" for="inputNomeDaInstituicao">Nome da
                  Instituição</label>
                <input type="text" class="form-control text-uppercase" id="inputNomeDaInstituicao"
                  placeholder="Opções: Clínica, Hospital, Consultório, Laboratório" required>

              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-9 mx-auto text-center">
                <label class="align-self-center font-weight-bold" for="inputCNPJ">CNPJ</label>
                <input type="text" class="form-control text-uppercase" id="inputCNPJ"
                  placeholder="Digite o CNPJ da instituição" required pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})
                  ">
              </div>
            </div>
          </div> <!-- Fim da border transparente -->

          <div class="pt-4 px-2 form-group row">
            <div class="col-md-6 mx-auto ">
              <label class="align-self-center font-weight-bold" for="inputVeterinarioTitular">Veterinário
                Titular</label>
              <input type="text" class="form-control text-uppercase text-left" id="inputVeterinarioTitular"
                placeholder="Nome completo do veterinário Titular" required>
            </div>

            <div class="col-md-6 mx-auto ">
              <label class="align-self-center font-weight-bold" for="inputCRMV">CRMV</label>
              <input type="text" class="form-control text-uppercase text-left" id="inputCRMV"
                placeholder="Digite o CRMV" required pattern="^[0-9]*$">
            </div>
          </div>

          <div class="pt-4 px-2 form-group row">
            <div class="col-md-6 mx-auto ">
              <label class="align-self-center font-weight-bold" for="inputDataDeNascimento">Data de Nascimento</label>
              <input type="date" class="form-control text-uppercase text-left" id="inputDataDeNascimento"
                placeholder="dd/mm/aaaa" required pattern="^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$">
            </div>

            <div class="col-md-6 mx-auto ">
              <label class="align-self-center font-weight-bold" for="inputEspecialidade">Especialidade</label>
              <input type="text" class="form-control text-uppercase text-left" id="inputEspecialidade"
                placeholder="Qual a sua Especialidade?" required >
            </div>
          </div>

          <div class="px-2 form-group row">
              <div class="col-md-6 mx-auto ">
              <div class="pt-4 form-check form-check-inline">
                <input class="form-check-input" type="radio" rname="inlineRadioOptions" id="inlineRadio1"
                  value="Masculino" required>
                <label class="form-check-label" for="inlineRadio1">Masculino</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                  value="Feminino">
                <label class="form-check-label" for="inlineRadio2">Feminino</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                  value="NaoBinario">
                <label class="form-check-label" for="inlineRadio3">Não Binário</label>
              </div>
            </div>

            <div class="col-md-6 mx-auto ">
              <label class="align-self-center font-weight-bold" for="inputCPF">CPF</label>
              <input type="text" class="form-control text-uppercase text-left" id="inputCPF" placeholder="Digite o CPF" required pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})">
            </div>
          </div>

          <div class="px-2 form-group row">
            <div class="col-md-6 mx-auto ">
              <label class="align-self-center font-weight-bold" for="inputConveniado">Conveniado?</label>
              <input type="text" class="form-control text-uppercase text-left" id="inputConveiado"
                placeholder="Digite aqui">
            </div>

            <div class="col-md-6 mx-auto pt-5 ">
              <button class="btn-azul"> Ainda não é conveniado? Conheça o nosso plano!</button>
            </div>
          </div>



          <hr style="border-top: dotted 10px; color: #6EB1B9;" />

          <div class="px-2 pt-4 form-group row">
            <div class="col-md-12 mx-auto ">
              <label class="align-self-center font-weight-bold" for="inputEndereco">Endereço</label>
              <input type="text" class="form-control text-uppercase text-left" id="inputEndereco"
                placeholder="Digite o endereço da instituição" required>
            </div>
          </div>

            <div class="px-2 form-group row">

              <div class="col-md-2 mx-auto ">
                <label class="align-self-center font-weight-bold" for="inputComplemento">Complemento</label>
                <input type="text" class="form-control text-uppercase text-left" id="inputComplemento"
                  placeholder="Digite Aqui" formnovalidate = "true">
              </div>

              <div class="col-md-4 mx-auto ">
                <label class="align-self-center font-weight-bold" for="inputBairro">Bairro</label>
                <input type="text" class="form-control text-uppercase text-left" id="inputBairro"
                  placeholder="Digite Aqui" required>
              </div>

              <div class="col-md-4 mx-auto ">
                <label class="align-self-center font-weight-bold" for="inputCidade">Cidade</label>
                <input type="text" class="form-control text-uppercase text-left" id="inputCidade"
                  placeholder="Digite Aqui" required>
              </div>
              <div class="col-md-2 mx-auto ">
                <label class="align-self-center font-weight-bold" for="inputEstado">Estado</label>
                <input type="text" class="form-control text-uppercase text-left" id="inputEstado" placeholder="SP" required>
              </div>
            </div>

            
          <div class="px-2 form-group row">
              <div class="col-md-2 mx-auto ">
                <label class="align-self-center font-weight-bold" for="inputCep">CEP</label>
                <input type="text" class="form-control text-uppercase text-left" id="inputCep"
                  placeholder="Digite Aqui" required pattern="[0-9]{5}[\-]?[0-9]{3}">
              </div>
  
              <div class="col-md-4 mx-auto ">
                <label class="align-self-center font-weight-bold" for="inputCelular">Celular</label>
                <input type="text" class="form-control text-uppercase text-left" id="inputCelular" 
                  placeholder="(__) _____-____" required pattern="^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$">
              </div>
              <div class="col-md-6"></div>
            </div>

            <hr style="border-top: dotted 10px; color: #6EB1B9;" />

            <div class="px-2 form-group row">
                <div class="col-md-6 mx-auto ">
                  <label class="align-self-center font-weight-bold" for="inputEmail">E-mail</label>
                  <input type="email" class="form-control text-uppercase text-left" id="inputEmail"
                    placeholder="Digite o seu e-mail" required pattern="">
                </div>
    
                <div class="col-md-6 mx-auto ">
                  <label class="align-self-center font-weight-bold" for="inputSenha">Senha</label>
                  <input type="password" class="form-control text-uppercase text-left" id="inputSenha"
                    placeholder="Digite a sua senha" required>
                </div>
              </div>
            
              <div class="px-2 form-group row">
                  <div class="col-md-6 mx-auto ">
                    <label class="align-self-center font-weight-bold" for="inputEmailConfirm">Confirme o E-mail</label>
                    <input type="email" class="form-control text-uppercase text-left" id="inputEmailConfirm"
                      placeholder="Confirme o seu e-mail" required
                      onblur="camposIguais(document.getElementById('inputEmail'), this)"
                      
                      >
                  </div>
      
                  <div class="col-md-6 mx-auto ">
                    <label class="align-self-center font-weight-bold" for="inputSenhaConfirm">Confirme a Senha</label>
                    <input type="password" class="form-control text-uppercase text-left" id="inputSenhaConfirm"
                      placeholder="Confirme a sua senha" required
                      onblur="camposIguais(document.getElementById('inputSenha'), this)">
                  </div>
                </div>

                <div class="px-2 form-group row pb-5">
                  <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="TermosECondicoes" required>
                        <label class="form-check-label" for="TermosECondicoes">
                          Li e concordo com os termos e condições do LavieZoo
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="SaberMais" novalidate>
                        <label  class="form-check-label" for="SaberMais">
                          Para saber mais sobre como o LavieZoo coleta, processa, compartilha e protege seus dados pessoais, leia a Política de Privacidade do Laviezoo
                        </label>
                      </div>
                      </div>
                      <div class="col-md-12">
                        <button class="btn btn-lg btn-warning text-white">Cadastrar</button>
                      </div>
                </div>
          </div>     
      </div>
      </form>
  </body>


<!-- Scripts de validação de formulário-->
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
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
</script>

<script>        
  function camposIguais(p1, p2) {
  if (p1.value != p2.value || p1.value == '' || p2.value == '') {
      p2.setCustomValidity('Campos estão diferentes');
  } else {
    input.setCustomValidity('');
  }
  }
  </script>