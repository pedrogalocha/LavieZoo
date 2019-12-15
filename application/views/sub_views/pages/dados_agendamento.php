<body class="pt-5 bg text-white" style="margin-top:80px; background-color: #F3F3F3; background-image:none">
	<?php
	$permissao = $this->session->userdata('USUARIO_NIVEL_ACESSO');
	?>
	<form class="text-dark text-uppercase needs-validation" method="POST" id="form_cad"
		action='<?php echo base_url('update_agendamento') ?>' novalidate autocomplete="off">
		<div class="row" style="display: inline">

			<div class="pt-5 container col-sm-8 mx-auto align-self-center align-items-center justify-content-center">

				<div class="mt-5 row form-group">
					<h3 class="mt-5 mx-auto font-weight-bold text-center" style="color: #0C7C95">Dados do Animal</h3>
				</div>
				<div class="pt-4 px-2 form-group row">
					<div class="col-md-6 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputNomeAnimal">Nome</label>
						<input type="text" class="form-control text-uppercase text-left"
							value="<?php echo  $acionaInfo['ANIMAL_NOME'] ?>" name="inputNomeAnimal"
							id="inputNomeAnimal" placeholder="Nome Do Animal" required>
					</div>

					<div class="col-md-3 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputIdadeAnimal">ANOS</label>
						<input type="text" required class="form-control text-uppercase text-left"
							name="inputIdadeAnimal" value="<?php echo  $acionaInfo['ANIMAL_IDADE'] ?>"
							id="inputIdadeAnimal" placeholder="Idade do Animal" required>
					</div>

					<div class="col-md-3 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputMesesAnimal">MESES</label>
						<input type="text" required class="form-control text-uppercase text-left"
							name="inputMesesAnimal" value="<?php echo $acionaInfo['ANIMAL_MESES'] ?>"
							id="inputMesesAnimal" placeholder="Meses do Animal" required>
					</div>
				</div>

				<div class="pt-4 px-2 form-group row">
					<div class="col-md-3 mx-auto ">
						<div class="pt-4 form-check form-check-inline">
							<input class="form-check-input"
								<?php echo $acionaInfo['ANIMAL_RACA']=="Cachorro" ? "checked" : "" ?> type="radio"
								name="radioRaca" id="Cachorro" value="Cachorro">
							<label class="form-check-label" for="Cachorro">Canino</label>
						</div>
						<div class="form-check form-check-inline">
							<input <?php echo $acionaInfo['ANIMAL_RACA']=="Gato" ? "checked" : "" ?>
								class="form-check-input" type="radio" name="radioRaca" id="Gato" value="Gato">
							<label class="form-check-label" for="Gato">Felino</label>
						</div>
					</div>

					<div class="col-md-3 mx-auto ">
						<div class="pt-4 form-check form-check-inline">
							<input class="form-check-input"
								<?php echo $acionaInfo['ANIMAL_SEXO']=="Macho" ? "checked" : "" ?> type="radio"
								name="radioSexo" id="Cachorro" value="Macho">
							<label class="form-check-label" for="Macho">Macho</label>
						</div>
						<div class="form-check form-check-inline">
							<input <?php echo $acionaInfo['ANIMAL_SEXO']=="Fêmea" ? "checked" : "" ?>
								class="form-check-input" type="radio" name="radioSexo" id="Femea" value="Fêmea">
							<label class="form-check-label" for="Femea">Fêmea</label>
						</div>
					</div>

					<div class="col-md-6 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputEspecie">ESPECIE</label>
						<input type="text" class="form-control text-uppercase text-left"
							value="<?php echo  $acionaInfo['ANIMAL_ESPECIE'] ?>" name="inputEspecie" id="inputEspecie"
							placeholder="Especie do Animal" required>
					</div>
				</div>

				<div class="px-2 form-group row">
					<div class="col-md-12 mx-auto ">
						<label class="align-self-center font-weight-bold" required
							for="inputConveniado">Proprietário</label>
						<input type="text" class="form-control text-uppercase text-left form-control"
							name="inputNomeProprietario" value="<?php echo  $acionaInfo['ANIMAL_PROPRIETARIO']?>"
							id="inputNomeProprietario" placeholder="Nome Completo do Proprietario do Animal">
					</div>
				</div>
				<br>
				<hr style="border-top: dotted 10px; color: #6EB1B9;" />

				<div class="px-2 form-group row">
					<div class="col-md-12 mx-auto ">
						<?php foreach ($tipoAgendamento as $tpagen) { ?>
						<?php if ($tpagen->PERFIL_EXAME_ID <= 9) { ?>
						<div class="pt-2 form-check form-check">
							<input onclick="ocultaOutrosExames()" class="form-check-input" type="radio"
								name="radioExame" id="inlineRadio1" value="<?php print_r($tpagen->PERFIL_EXAME_ID) ?>"
								required>
							<label class="form-check-label"
								for="inlineRadio1"><b><?php print_r($tpagen->TIPO_PERFIL_EXAME) ?> </b>-
								<?php print_r($tpagen->DS_PERFIL_EXAME) ?></label>
						</div>
						<?php } ?>
						<?php } ?>
						<?php foreach ($exameUsuario as $eUsu) { ?>
						<div class="pt-2 form-check form-check">
							<input onclick="ocultaOutrosExames()" class="form-check-input" type="radio"
								name="radioExame" id="inlineRadio1" value="<?php print_r($eUsu->PERFIL_EXAME_ID) ?>"
								required>
							<label class="form-check-label"
								for="inlineRadio1"><?php print_r($eUsu->DS_PERFIL_EXAME) ?></label>
						</div>
						<?php } ?>

					</div>
				</div>
			</div>
			<!-- <div class="pt-2 container col-sm-12 mx-auto align-self-center align-items-center justify-content-center"
				style="margin-top:30px; margin-bottom:30px; background-color: #F9F2C7">
				<div class="px-2 form-group row">
					<div class="col-md-8 mx-auto mb-2 ">
						<?php if ($permissao == 'PRO' || $permissao == 'ADMIN') { ?>
						<div class="pt-2 form-check form-check" style="padding-left: 0px !important">
							<div class="col-sm-3 d-inline" style="padding-left: 0px !important">
								<div class="pt-2 form-check form-check d-inline">
									<input hidden <?php echo $acionaInfo['TIPO_BUSCA']=="Busca em Clinica" ? "checked" : "" ?>
										onchange="ocultaData();ocultaAgend();exibeDataBusca()" class="form-check-input"
										type="radio" name="radioBusca" id="inlineRadioOptions2"
										value="Busca em Clinica" >
									<label class="form-check-label" for="buscaEmClinica">Busca em Clinica</label>
								</div>
							</div>
							<div class="col-sm-2 d-inline" style="padding-left: 1px !important; padding-right:0px">
								<label id="DataBusca" class=" coleta-clinica align-self-center font-weight-bold"
									for="inputDataBusca">Data busca</label>
							</div>
							<div class="col-sm-2 d-inline " style="padding-left: 1px !important">
								<input onchange="validaDataBusca()" id="DataBusca2" class="coleta-clinica"
									type="datetime-local" name="inputBusca" placeholder="dd/mm/aaaa"
									value="<?php echo $acionaInfo['DATA_BUSCA_CLINICA']?>">
							</div>
						</div>

						<div class="pt-2 form-check form-check" style="padding-left: 0px !important">
							<div class="col-sm-3 d-inline" style="padding-left: 0px !important">
								<div class="pt-2 form-check form-check d-inline">
									<input <?php echo $acionaInfo['TIPO_BUSCA']=="Coleta Em Clinica" ? "checked" : "" ?>
										onchange="exibeData();ocultaAgend();ocultaDataBusca()" class="form-check-input"
										type="radio" name="radioBusca" id="inlineRadioOptions3"
										value="Coleta Em Clinica">
									<label class="form-check-label" for="coletaEmClinica">Coleta em Clinica</label>
								</div>
							</div>

							<div class="col-sm-2 d-inline" style="padding-left: 1px !important; padding-right:0px">
								<label id="DataColeta" class=" coleta-clinica align-self-center font-weight-bold"
									for="inputDataColeta">Data</label>
							</div>
							<div class="col-sm-2 d-inline " style="padding-left: 1px !important">
								<input onchange="validaData()" id="DataColeta2" class="coleta-clinica" type="date"
									name="inputColeta" placeholder="dd/mm/aaaa"
									value="<?php echo $acionaInfo['DATA_COLETA']?>">
							</div>
							<div class="col-sm-2 d-inline" style="padding-left: 1px !important">
								<select name="inputFaixaHorario"
									onchange="ValidaHorario(this.options[this.selectedIndex].value)" id="faixaHorario"
									class="coleta-clinica" onchange="">
									<option label="Faixa de Horario">Faixa de Horario</option>
								</select>
							</div>
						</div>
						<?php } ?>

						<div class="pt-2 form-check form-check" tyle="
                    padding-top: 0px !important;">
							<input <?php echo $acionaInfo['TIPO_BUSCA']=="Busca Domiciliar" ? "checked" : "" ?> onchange="ocultaData();exibeAgend();ocultaDataBusca()" class="form-check-input"
								type="radio" name="radioBusca" id="inlineRadioOptions3"
								value="Busca Domiciliar">
							<label class="form-check-label" for="buscaDomiciliar">Coleta Domiciliar</label>
						</div>

						<div class="px-2 form-group row" style="font-size:0.8rem !important">
							<div class="px-2 col-md-12 pt-4 form-group row" style="
                padding-top: 0px !important;
            ">
							</div>

						</div>
						<div class="px-2 pt-4 form-group row " style="
                padding-top: 0px !important;
            ">
							<div class="col-md-12 mx-auto ">
								<label id="Endereco" class="coleta-clinica align-self-center font-weight-bold"
									for="inputEndereco">Endereço</label>
								<input type="text" class="coleta-clinica form-control text-uppercase text-left"
									name="inputEndereco" id="inputEndereco"
									placeholder="Digite o endereço da instituição"
									value="<?php echo $acionaInfo['ENDERECO']?>">
							</div>
						</div>

						<div class="px-2 form-group row">

							<div id="complemento" class="coleta-clinica col-md-4 mx-auto ">
								<label class="align-self-center font-weight-bold"
									for="inputComplemento">Complemento</label>
								<input type="text" class="form-control text-uppercase text-left" name="inputComplemento"
									id="inputComplemento" placeholder="Digite Aqui" formnovalidate="true"
									value="<?php echo $acionaInfo['COMPLEMENTO']?>">
							</div>

							<div id="bairro" class="coleta-clinica col-md-4 mx-auto ">
								<label class="align-self-center font-weight-bold" for="inputBairro">Bairro</label>
								<input type="text" class="form-control text-uppercase text-left" name="inputBairro"
									id="inputBairro" placeholder="Digite Aqui"
									value="<?php echo $acionaInfo['BAIRRO']?>">
							</div>

							<div id="cidade" class="coleta-clinica col-md-4 mx-auto ">
								<label class="align-self-center font-weight-bold" for="inputCidade">Cidade</label>
								<input type="text" class="form-control text-uppercase text-left" name="inputCidade"
									id="inputCidade" placeholder="Digite Aqui"
									value="<?php echo $acionaInfo['CIDADE']?>">
							</div>
						</div>


						<div class="px-2 form-group row">
							<div id="estado" class="coleta-clinica margin-final-agendamento col-md-2 mx-auto ">
								<label class="margin-final-agendamento align-self-center font-weight-bold"
									for="inputEstado">Estado</label>
								<input type="text" class="form-control text-uppercase text-left" name="inputEstado"
									id="inputEstado" placeholder="SP" value="<?php echo $acionaInfo['ESTADO']?>">
							</div>
							<div id="cep" class="coleta-clinica margin-final-agendamento col-md-4 mx-auto ">
								<label class="margin-final-agendamento align-self-center font-weight-bold"
									for="inputCep">CEP</label>
								<input type="text" class="form-control text-uppercase text-left cep" name="inputCep"
									id="inputCep" placeholder="Digite Aqui" value="<?php echo $acionaInfo['CEP']?>"
									pattern="[0-9]{5}[\-]?[0-9]{3}"
									onblur="buscarEndereco(document.getElementById('inputCep').value); ">
							</div>

							<div id="celular" class="coleta-clinica margin-final-agendamento col-md-4 mx-auto ">
								<label class="align-self-center font-weight-bold" for="inputCelular">Celular</label>
								<input type="text" value="<?php echo $acionaInfo['CELULAR']?>"
									class="form-control text-uppercase text-left ddd_cell" name="inputCelular"
									id="inputCelular" placeholder="(__) _____-____"
									pattern="^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$">
							</div>
							<div class="col-md-6"></div>
						</div>
						
					</div>
					
				</div>
				
			</div> -->
			<div>
				<input hidden name="idUsu" value='<?php echo $acionaInfo['AGENDAMENTO_ID']?>'>
			</div>
			<div class="pt-5 container col-sm-8 mx-auto ">
				<label class="align-self-center font-weight-bold" for="selectStatus">Status</label>
				<select onchange="exibeDesc()" class="form-control text-uppercase" id="selectStatus" name="selectStatus" required>
					<option disabled>---<?php echo $acionaInfo['STATUS']?>---</option>
					<option value="DEMANDADO">DEMANDADO</option>
					<option value="EM EXECUÇÃO">EM EXECUÇÃO</option>
					<option value="CANCELADO">CANCELADO</option>
				</select>
			</div>
						
			<div class="pt-5 container col-sm-8 mx-auto">
			<label class="coleta-clinica align-self-center font-weight-bold" name="labelDesc" id = "labelDesc" for="inputDesc" >Descrição</label>
			<input type="text" class="coleta-clinica form-control text-uppercase text-left" 
							name="inputDesc" id="inputDesc" placeholder="Descrição...">
					</div>
		</div>
		<!-- btn btn-info btn-lg -->
		<div class="col-md-12 mb-2" style="text-align:center;">
			<button type="submit" class="btn btn-lg btn-warning text-white">Atualizar</button>
		</div>

	</form>

	<script>
		$(document).ready(function ($) {
			$('.ddd_cell').mask('(00) 00000-0000');
			$('.ddd_fix').mask('(00) 0000-0000');
			$('.cpf').mask('000.000.000-00');

			$("#form_cad").validate();
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

		function exibeData() {
			$("#DataColeta").removeClass("coleta-clinica");
			$("#DataColeta2").removeClass("coleta-clinica");
			$("#DataColeta").prop("required", true);
			$("#DataColeta2").prop("required", true);
		}
		function exibeDesc(){
			$("#labelDesc").removeClass("coleta-clinica");
			$("#inputDesc").removeClass("coleta-clinica");
			$("#labelDesc").prop("required", true);
			$("#inputDesc").prop("required", true);
		}

		function exibeDataBusca() {
			$("#DataBusca").removeClass("coleta-clinica");
			$("#DataBusca").prop("required", true);
			$("#DataBusca2").removeClass("coleta-clinica");
			$("#DataBusca2").prop("required", true);

		}

		function exibeOutrosExames() {
			$("#newExame").removeClass("coleta-clinica");
			$("#newExame").prop("required", true);
		}

		function ocultaOutrosExames() {
			$("#newExame").addClass("coleta-clinica");
			$("#newExame").prop("required", false);
		}

		function ocultaData() {
			$("#DataColeta").addClass("coleta-clinica");
			$("#DataColeta2").addClass("coleta-clinica");
			$("#DataColeta").prop("required", false);
			$("#DataColeta2").prop("required", false);
			$("#faixaHorario").prop("required", false);
		}

		function ocultaDataBusca() {
			$("#DataBusca").addClass("coleta-clinica");
			$("#DataBusca2").addClass("coleta-clinica");
			$("#DataBusca").prop("required", false);
			$("#DataBusca2").prop("required", false);
		}

		function validaData() {
			var data = $("#DataColeta2").val();
			var today = new Date();
			var date2 = today.getFullYear() + '-' + ("0" + (today.getMonth() + 1)).slice(-2) + '-' + ("0" + today.getDate())
				.slice(-2);
			if (data == '' || data < date2) {
				alert("Favor escolher uma data valida");
				$("#faixaHorario").val('');
				$("#DataColeta2").val('');
				$("#faixaHorario").addClass("coleta-clinica");
			} else {
				$("#faixaHorario").removeClass("coleta-clinica");
				$("#faixaHorario").prop("required", true);
				var target_url = "<?= base_url() ?>faixaHorario";
				var data_to_be_sent = data;
				$.ajax({
					url: target_url,
					dataType: "html",
					type: 'POST',
					data: {
						data_selecionada: data_to_be_sent
					},
					error: function (xhr, status, error) {
						alert('Houve um erro: ' + error);
					},
					success: function (results) {
						var faixaHorarios = results.replace(data_to_be_sent, "");
						faixaHorarios2 = $.parseJSON(faixaHorarios);

						$.each(faixaHorarios2, function (index) {
							$("#faix").remove();
						});
						$.each(faixaHorarios2, function (index) {
							$("#faixaHorario").append("<option id='faix' value ='" + faixaHorarios2[index]
								.FAIXA_HORARIO_ID +
								"'>" + faixaHorarios2[index].DS_FAIXA_HORARIO + "</option>");
						});
					}
				});
				return false;
			}
		}

		function validaDataBusca() {
			var data = $("#DataBusca2").val();
			var today = new Date();
			var date2 = today.getFullYear() + '-' + ("0" + (today.getMonth() + 1)).slice(-2) + '-' + ("0" + today.getDate())
				.slice(-2);
			if (data == '' || data < date2) {
				alert("Favor escolher uma data valida");

				$("#DataBusca2").val('');

			} else {

				return false;
			}
		}

		function ValidaHorario(value) {
			console.log(value);

			var data = $("#DataColeta2").val();

			switch (value) {
				case '0':
					alert("Favor selecionar uma das opções disponiveis.");
					break;

			}
		}

		function ocultaData() {
			$("#DataColeta").addClass("coleta-clinica");
			$("#DataColeta2").addClass("coleta-clinica");
			$("#faixaHorario").addClass("coleta-clinica");
			$("#DataColeta").prop("required", false);
			$("#DataColeta2").prop("required", false);
			$("#faixaHorario").prop("required", false);
			// $("#DataColeta").val('');
			// $("#DataColeta2").val('');
			// $("#faixaHorario").val('');

		}

		function exibeAgend() {
			$("#inputEndereco").removeClass("coleta-clinica");
			$("#Endereco").removeClass("coleta-clinica");
			$("#complemento").removeClass("coleta-clinica");
			$("#bairro").removeClass("coleta-clinica");
			$("#cidade").removeClass("coleta-clinica");
			$("#estado").removeClass("coleta-clinica");
			$("#celular").removeClass("coleta-clinica");
			$("#cep").removeClass("coleta-clinica");
			$("#inputEndereco").prop("required", true);
			$("#Endereco").prop("required", true);
			$("#complemento").prop("required", true);
			$("#bairro").prop("required", true);
			$("#cidade").prop("required", true);
			$("#estado").prop("required", true);
			$("#celular").prop("required", true);
			$("#cep").prop("required", true);
		}

		function ocultaAgend() {
			$("#inputEndereco").addClass("coleta-clinica");
			$("#Endereco").addClass("coleta-clinica");
			$("#complemento").addClass("coleta-clinica");
			$("#bairro").addClass("coleta-clinica");
			$("#cidade").addClass("coleta-clinica");
			$("#estado").addClass("coleta-clinica");
			$("#celular").addClass("coleta-clinica");
			$("#cep").addClass("coleta-clinica");
			$("#inputEndereco").prop("required", false);
			$("#Endereco").prop("required", false);
			$("#complemento").prop("required", false);
			$("#bairro").prop("required", false);
			$("#cidade").prop("required", false);
			$("#estado").prop("required", false);
			$("#celular").prop("required", false);
			$("#cep").prop("required", false);
			// $("#inputEndereco").val('');
			// $("#Endereco").val('');
			// $("#complemento").val('');
			// $("#bairro").val('');
			// $("#cidade").val('');
			// $("#estado").val('');
			// $("#celular").val('');
			// $("#cep").val('');
		}

		jQuery.extend(jQuery.validator.messages, {
			required: "Favor Preencher esse campo",
			remote: "Please fix this field.",
			email: "Favor Digitar um E-mail valido.",
			url: "Please enter a valid URL.",
			date: "Please enter a valid date.",
			dateISO: "Please enter a valid date (ISO).",
			number: "Please enter a valid number.",
			digits: "Please enter only digits.",
			creditcard: "Please enter a valid credit card number.",
			equalTo: "Please enter the same value again.",
			accept: "Please enter a value with a valid extension.",
			maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
			minlength: jQuery.validator.format("Please enter at least {0} characters."),
			rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
			range: jQuery.validator.format("Please enter a value between {0} and {1}."),
			max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
			min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
		});

	</script>
</body>
