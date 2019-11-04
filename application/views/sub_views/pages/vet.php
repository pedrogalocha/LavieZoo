<body class="pt-5 bg text-white" style="margin-top:80px; background-color: #F3F3F3; background-image:none">
	<?php 
?>

	<?php if($permissao == "CLI_PRO" && $clinica == true ){ ?>
	<form class="text-dark text-uppercase needs-validation" method="POST" id="form_cad"
		action='<?php echo base_url('insert_vet_cli/'.$idCli) ?>' novalidate autocomplete="off">
		<?php } else {?>
		<form class="text-dark text-uppercase needs-validation" method="POST" id="form_cad"
			action='<?php echo base_url('insert_vet') ?>' novalidate autocomplete="off">
			<?php } ?>
			<div class="row">
				<?php print_r($clinica) ?>
				<div class="pt-5 container col-sm-8 mx-auto align-self-center align-items-center justify-content-center">
					<div class="rounded px-2 pt-3 pb-5 align-items-center justify-content-center"
						style="background-color: rgba(255, 255, 255, 0.85)">
						<img class="" src="<?php echo base_url('includes/img/agencia_cadastro_ICONE.svg') ?>" style="
            position:absolute;
            top: 0;
            left: 50%;
            transform:translate(-50%,-25%);
            " />

						<div class="mt-5 row form-group">
							<h3 class="mt-5 mx-auto font-weight-bold text-center" style="color: #0C7C95">Cadastro Veterinário</h3>
						</div>
						<div class="form-group row">
							<div class="col-md-9 mx-auto text-center">
								<label class="align-self-center font-weight-bold" for="inputNomeCompleto">Nome Completo</label>
								<input type="text" class="form-control text-uppercase" name="inputNomeCompleto" id="inputNomeCompleto"
									placeholder="Digite o seu nome completo" required>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-9 mx-auto text-center">
								<label class="align-self-center font-weight-bold" for="inputCRMV">CRMV</label>
								<input type="text" class="form-control text-uppercase" name="inputCRMV" id="inputCRMV"
									placeholder="Digite o CRMV" required pattern="^[0-9]*$">
							</div>
						</div>
					</div> <!-- Fim da border transparente -->


					<div class="pt-4 px-2 form-group row">
						<div class="col-md-6 mx-auto ">
							<label class="align-self-center font-weight-bold" for="inputDataDeNascimento">Data de Nascimento</label>
							<input type="date" class="form-control text-uppercase text-left" name="inputDataDeNascimento"
								id="inputDataDeNascimento" placeholder="dd/mm/aaaa" required
								pattern="^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$">
						</div>

						<div class="col-md-6 mx-auto ">
							<label class="align-self-center font-weight-bold" for="inputEspecialidade">Especialidade</label>
							<input type="text" required class="form-control text-uppercase text-left" name="inputEspecialidade"
								id="inputEspecialidade" placeholder="Qual a sua Especialidade?" required>
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
							<input type="text" class="form-control text-uppercase text-left cpf" name="inputCPF" id="inputCPF"
								placeholder="Digite o CPF" required
								pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})">
						</div>
					</div>

					<div class="px-2 form-group row">
						<div class="col-md-6 mx-auto ">
							<label class="align-self-center font-weight-bold" required for="inputConveniado">Telefone Celular</label>
							<input type="text" class="form-control text-uppercase text-left ddd_cell form-control" name="inputCel"
								id="inputCel" placeholder="+55(__)_____-____" onfocus="this.removeAttribute('readonly');" readonly>
						</div>

						<div class="col-md-6 mx-auto ">
							<label class="align-self-center font-weight-bold" for="inputConveniado">Telefone Fixo</label>
							<input type="text" class="form-control text-uppercase text-left ddd_fix" name="inputFixo" id="inputFixo"
								placeholder="+55(__)____-____" onfocus="this.removeAttribute('readonly');" readonly>
						</div>

						<div class="col-md-3 mx-auto pt-5 ">
							<button class="btn-azul">Conheça o nosso plano!</button>
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
							<input type="text" class="form-control text-uppercase text-left" name="inputComplemento"
								id="inputComplemento" placeholder="Digite Aqui" formnovalidate="true">
						</div>

						<div class="col-md-5 mx-auto ">
							<label class="align-self-center font-weight-bold" for="inputBairro">Bairro</label>
							<input type="text" class="form-control text-uppercase text-left" name="inputBairro" id="inputBairro"
								placeholder="Digite Aqui" required>
						</div>

						<div class="col-md-5 mx-auto ">
							<label class="align-self-center font-weight-bold" for="inputCidade">Cidade</label>
							<input type="text" class="form-control text-uppercase text-left" name="inputCidade" id="inputCidade"
								placeholder="Digite Aqui" required>
						</div>

					</div>

					<div class="px-2 form-group row">
						<div class="col-md-6 mx-auto ">
							<label class="align-self-center font-weight-bold" for="inputEstado">Estado</label>
							<input type="text" class="form-control text-uppercase text-left" name="inputEstado" id="inputEstado"
								placeholder="SP" required>
						</div>
						<div class="col-md-6 mx-auto ">
							<label class="align-self-center font-weight-bold" for="inputCep">CEP</label>
							<input type="text" class="form-control text-uppercase text-left cep" name="inputCep" id="inputCep"
								placeholder="Digite Aqui" required pattern="[0-9]{5}[\-]?[0-9]{3}"
								onblur="buscarEndereco(document.getElementById('inputCep').value); ">
						</div>
					</div>
					<hr style="border-top: dotted 10px; color: #6EB1B9;" />

					<div class="px-2 form-group row">
						<div class="col-md-6 mx-auto ">
							<label class="align-self-center font-weight-bold" for="inputEmail">E-mail</label>
							<input type="email" required class="form-control text-uppercase text-left form-control" name="inputEmail"
								id="inputEmail" placeholder="Digite seu Email" onfocus="this.removeAttribute('readonly');" readonly>
						</div>

						<div class="col-md-6 mx-auto ">
							<label class="align-self-center font-weight-bold" for="inputSenha">Senha</label>
							<input type="password" required class="form-control text-uppercase text-left" name="inputSenha"
								id="inputSenha" placeholder="Digite sua Senha" onfocus="this.removeAttribute('readonly');" readonly>
						</div>
					</div>

					<div class="px-2 form-group row">
						<div class="col-md-6 mx-auto ">
							<label class="align-self-center font-weight-bold" for="inputEmailConfirm">Confirme o seu E-mail</label>
							<input type="email" name="inputEmailConfirm" class="form-control text-uppercase text-left"
								id="inputEmailConfirm" placeholder="Insira o email novamente">
						</div>

						<div class="col-md-6 mx-auto ">
							<label class="align-self-center font-weight-bold" for="inputSenhaConfirm">Confirme a sua Senha</label>
							<input type="password" name="inputSenhaConfirm" class="form-control text-uppercase text-left"
								id="inputSenhaConfirm" placeholder="Insira a senha novamente">
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
								<input class="form-check-input" type="checkbox" id="SaberMais" required>
								<label class="form-check-label" for="SaberMais">
									Para saber mais sobre como o LavieZoo coleta, processa, compartilha e protege seus dados pessoais,
									leia a Política de Privacidade do Laviezoo
								</label>
							</div>
						</div>
						<div class="col-md-12">
                        <?php if ($permissao != 'CLI_PRO' ) {?>
							<button type="submit" class="btn btn-lg btn-warning text-white">Cadastrar</button>
							<?php }else{?>
								<button type="button" class="btn btn-lg btn-warning text-black" disabled>Cadastrar</button>
								<label color="red"> --->  Função disponivel apenas para Clinicas com o plano PRO</label>
								<?php } ?>
              
						</div>
					</div>
				</div>
			</div>
		</form>

		<script>
			$(document).ready(function ($) {
				$('.ddd_cell').mask('(00) 00000-0000');
				$('.ddd_fix').mask('(00) 0000-0000');
				$('.cpf').mask('000.000.000-00');

				$("#form_cad").validate();
			});

			$("#form_cad").validate({
				rules: {
					inputNomeCompleto: {
						required: true,
					},
					inputCRMV: {
						required: true,
					},
					inputDataDeNascimento: {
						required: true,
					},
					inputCel: {
						required: true,
					},
					inputEmail: {
						required: true,
						minlength: 6,
					},
					inputSenha: {
						required: true,
						minlength: 6,
					},
					inputSenhaConfirm: {
						equalTo: inputSenha,
					},
					inputEspecialidade: {
						required: true,
					},
					inputEmailConfirm: {
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
				messages: {
					inputNomeCompleto: {
						required: "Por favor, insira um nome",
					},
					inputCRMV: {
						required: "Por favor, insira o CRMV",
					},
					inputDataDeNascimento: {
						required: "Por favor, insira data de nascimento.",
					},
					inputCel: {
						required: "Por favor, informe um telefone celular",
					},
					inputEmail: {
						required: "É necessário informar um email",
						minlength: "É necessário inserir um email valido.",
					},
					inputSenha: {
						required: "É necessário informar uma senha valida.",
						minlength: "A senha deve ter pelo menos 6 digitos.",
					},
					inputSenhaConfirm: {
						equalTo: "As duas senhas devem ser iguais.",
					},
					inputEmailConfirm: {
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

			(function () {
				'use strict';
				window.addEventListener('load', function () {
					// Fetch all the forms we want to apply custom Bootstrap validation styles to
					var forms = document.getElementsByClassName('needs-validation');
					// Loop over them and prevent submission
					var validation = Array.prototype.filter.call(forms, function (form) {
						form.addEventListener('submit', function (event) {
							if (form.checkValidity() === false) {
								event.preventDefault();
								event.stopPropagation();
							}
							form.classList.add('was-validated');
						}, false);
					});
				}, false);
			})();


			function buscarEndereco(cep) {
				var url = 'http://api.postmon.com.br/v1/cep/' + cep.toString();
				$.getJSON(url, function (data) {
					document.getElementById("inputEndereco").value = data.logradouro
					document.getElementById("inputCidade").value = data.cidade
					document.getElementById("inputBairro").value = data.bairro
					document.getElementById("inputEstado").value = data.estado
				})
			}

		</script>
</body>
