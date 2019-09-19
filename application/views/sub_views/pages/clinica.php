<body class="pt-5 bg text-white " style="margin-top:80px; background-color: #F9F2C7; background-image:none">

      <form class="text-dark text-uppercase needs-validation" id="form_cad" method="POST" action='<?php echo base_url('insert_clinica') ?>' novalidate>
        <div class="row">
          
        <div class="pt-5 container col-sm-8 mx-auto align-self-center align-items-center justify-content-center">
          <!-- Começo da border transparente-->

          <div class="rounded px-2 pt-3 pb-5 align-items-center justify-content-center"
            style="background-color: rgba(255, 255, 255, 0.85)">
            <img class="" src="<?php echo base_url('includes/img/agencia_cadastro_icone.svg') ?>" style="
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
                <input type="text" class="form-control text-uppercase" name="inputNomeDaInstituicao" id="inputNomeDaInstituicao"
                  placeholder="Opções: Clínica, Hospital, Consultório, Laboratório" required>

              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-9 mx-auto text-center">
                <label class="align-self-center font-weight-bold" for="inputCNPJ">CNPJ</label>
                <input type="text" class="form-control text-uppercase cnpj" name="inputCNPJ" id="inputCNPJ"
                  placeholder="Digite o CNPJ da instituição" required pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})
                  " required>
              </div>
            </div>
          </div> <!-- Fim da border transparente -->

          <div class="pt-4 px-2 form-group row">
            <div class="col-md-6 mx-auto ">
              <label class="align-self-center font-weight-bold" for="inputNomeTitular">Nome
                Responsável</label>
              <input type="text" class="form-control text-uppercase text-left" name="inputNomeTitular" id="inputNomeTitular"
                placeholder="Nome completo do Responsável" required>
            </div>
            <div class="col-md-6 mx-auto ">
              <label class="align-self-center font-weight-bold" for="inputDataDeNascimento">Data de Nascimento</label>
              <input type="date" class="form-control text-uppercase text-left" name="inputDataDeNascimento" id="inputDataDeNascimento"
                placeholder="dd/mm/aaaa" required pattern="^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$">
            </div>
          </div>

          <div class="px-2 form-group row">
              <div class="col-md-6 mx-auto ">
              <div class="pt-4 form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
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
              <input type="text" class="form-control text-uppercase text-left" name="inputCPF" id="inputCPF" placeholder="Digite o CPF" required pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})">
            </div>
          </div>

          <div class="px-2 form-group row">
            <div class="col-md-6 mx-auto pt-5 ">
              <button class="btn-azul"> Ainda não é conveniado? Conheça o nosso plano!</button>
            </div>
          </div>



          <hr style="border-top: dotted 10px; color: #6EB1B9;" />

          <div class="px-2 pt-4 form-group row">
            <div class="col-md-12 mx-auto ">
              <label class="align-self-center font-weight-bold" for="inputEndereco">Endereço</label>
              <input type="text" class="form-control text-uppercase text-left" name="inputEndereco" id="inputEndereco"
                placeholder="Digite o endereço da instituição" required>
            </div>
          </div>

            <div class="px-2 form-group row">

              <div class="col-md-2 mx-auto ">
                <label class="align-self-center font-weight-bold" for="inputComplemento">Complemento</label>
                <input type="text" class="form-control text-uppercase text-left" name="inputComplemento" id="inputComplemento"
                  placeholder="Digite Aqui" formnovalidate = "true">
              </div>

              <div class="col-md-4 mx-auto ">
                <label class="align-self-center font-weight-bold" for="inputBairro">Bairro</label>
                <input type="text" class="form-control text-uppercase text-left" name="inputBairro" id="inputBairro"
                  placeholder="Digite Aqui" required>
              </div>

              <div class="col-md-4 mx-auto ">
                <label class="align-self-center font-weight-bold" for="inputCidade">Cidade</label>
                <input type="text" class="form-control text-uppercase text-left" name="inputCidade" id="inputCidade"
                  placeholder="Digite Aqui" required>
              </div>
              <div class="col-md-2 mx-auto ">
                <label class="align-self-center font-weight-bold" for="inputEstado">Estado</label>
                <input type="text" class="form-control text-uppercase text-left" name="inputEstado" id="inputEstado" placeholder="SP" required>
              </div>
            </div>

            
          <div class="px-2 form-group row">
              <div class="col-md-2 mx-auto ">
                <label class="align-self-center font-weight-bold" for="inputCep">CEP</label>
                <input type="text" class="form-control text-uppercase text-left cep" name="inputCep" id="inputCep"
                  placeholder="Digite Aqui" required pattern="[0-9]{5}[\-]?[0-9]{3}"
                  onblur="buscarEndereco(document.getElementById('inputCep').value); ">
              </div>
  
              <div class="col-md-4 mx-auto ">
                <label class="align-self-center font-weight-bold" for="inputCelular">Celular</label>
                <input type="text" class="form-control text-uppercase text-left ddd_cell" name="inputCelular" id="inputCelular" 
                  placeholder="(__) _____-____" required pattern="^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$">
              </div>
              <div class="col-md-6"></div>
            </div>

            <hr style="border-top: dotted 10px; color: #6EB1B9;" />

            <div class="px-2 form-group row">
                <div class="col-md-6 mx-auto ">
                  <label class="align-self-center font-weight-bold" for="inputEmail">E-mail</label>
                  <input type="email" class="form-control text-uppercase text-left" name="inputEmail" id="inputEmail"
                    placeholder="Digite o seu e-mail" required pattern="">
                </div>
    
                <div class="col-md-6 mx-auto ">
                  <label class="align-self-center font-weight-bold" for="inputSenha">Senha</label>
                  <input type="password" class="form-control text-uppercase text-left" name="inputSenha" id="inputSenha"
                    placeholder="Digite a sua senha" required>
                </div>
              </div>
            
              <div class="px-2 form-group row">
                  <div class="col-md-6 mx-auto ">
                    <label class="align-self-center font-weight-bold" for="inputEmailConfirm">Confirme o E-mail</label>
                    <input type="email" class="form-control text-uppercase text-left" name= "inputEmailConfirm" id="inputEmailConfirm"
                      placeholder="Confirme o seu e-mail" required
                      >
                  </div>
      
                  <div class="col-md-6 mx-auto ">
                    <label class="align-self-center font-weight-bold" for="inputSenhaConfirm">Confirme a Senha</label>
                    <input type="password" class="form-control text-uppercase text-left" name = "inputSenhaConfirm" id="inputSenhaConfirm"
                      placeholder="Confirme a sua senha" required>
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
                        <button type="submit" class="btn btn-lg btn-warning text-white">Cadastrar</button>
                      </div>
                </div>
          </div>     
      </div>
      </form>
  </body>


  <script>   
        $(document).ready(function($){
          $('.ddd_cell').mask('(00) 00000-0000');
          $('.ddd_fix').mask('(00) 0000-0000');
          $('.cpf').mask('000.000.000-00');
          $('.cnpj').mask('000.000.000/0000-00');
          $('.cep').mask('00000-000')

          $("#form_cad").validate();
        });

        $("#form_cad").validate({
          rules : {
                inputNomeDaInstituicao:{
                  required:true,
                },
                inputCNPJ:{
                  required:true,
                },
                inputNomeTitular: {
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
                inputEndereco: {
                  required: true,
                },
                inputComplemento: {
                  required: true,
                },
                inputBairro: {
                  required: true,
                },
                inputCidade: {
                  required: true,
                },
                inputEstado: {
                  required: true,
                },
                inputCep: {
                  required: true,
                },
          },
          messages:{
                inputNomeDaInstituicao:{
                  required:"Por favor, insira o nome da empresa",
                },
                inputCRMV:{
                  required:"Por favor, insira o CNPJ",
                },
                inputNomeTitular: {
                  required:"Por favor, insira um nome de titular",
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
                inputEndereco: {
                  required: "Por favor inserir um endereço."
                },
                inputComplemento: {
                  required: "Por favor inserir um complemento.",
                },
                inputBairro: {
                  required: "Por favor inserir um Bairro.",
                },
                inputCidade: {
                  required: "Por favor inserir uma Cidade.",
                },
                inputEstado: {
                  required: "Por favor inserir uma Estado.",
                },
                inputCep: {
                  required: "Por favor inserir uma CEP.",
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

        $(document).ready(function(){

$('.next').click(function(){

  var nextId = $(this).parents('.tab-pane').next().attr("id");
  $('[href=#'+nextId+']').tab('show');
  return false;
  
})

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  
  //update progress
  var step = $(e.target).data('step');
  var percent = (parseInt(step) / 4) * 100;
  
  $('.progress-bar').css({width: percent + '%'});
  $('.progress-bar').text("Step " + step + " of 4");
  
  //e.relatedTarget // previous tab
  
})

$('.first').click(function(){

  $('#myWizard a:first').tab('show')

})

});
        
      </script>

  <script>
    function buscarEndereco(cep){
    var url = 'http://api.postmon.com.br/v1/cep/' + cep.toString();
    $.getJSON(url, function(data){
        document.getElementById("inputEndereco").value= data.logradouro
        document.getElementById("inputCidade").value= data.cidade
        document.getElementById("inputBairro").value= data.bairro
        document.getElementById("inputEstado").value= data.estado
    }
    )
  }
  </script>