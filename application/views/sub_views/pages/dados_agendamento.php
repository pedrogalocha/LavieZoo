<body class="pt-5 bg text-white" style="margin-top:80px; background-color: #F3F3F3; background-image:none">
	<?php
?>
	<form class="text-dark text-uppercase needs-validation" method="POST" id="form_cad" novalidate autocomplete="off">
		<div class="row" style="display: inline">

			<div class="pt-5 container col-sm-8 mx-auto align-self-center align-items-center justify-content-center">

				<div class="mt-5 row form-group">
					<h3 class="mt-5 mx-auto font-weight-bold text-center" style="color: #0C7C95">Dados do Animal</h3>
				</div>
				<div class="pt-4 px-2 form-group row">
					<div class="col-md-6 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputNomeAnimal">Nome</label>
						<input type="text" class="form-control text-uppercase text-left"
							value="<?php echo  $acionaInfo['ANIMAL_NOME'] ?>" name="inputNomeAnimal" id="inputNomeAnimal"
							placeholder="Nome Do Animal" required>
					</div>

					<div class="col-md-6 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputIdadeAnimal">IDADE</label>
						<input type="text" required class="form-control text-uppercase text-left" name="inputIdadeAnimal"
							value="<?php echo  $acionaInfo['ANIMAL_IDADE'] ?>" id="inputIdadeAnimal" placeholder="Idade do Animal"
							required>
					</div>
				</div>

				<div class="pt-4 px-2 form-group row">
					<div class="col-md-6 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputNomeAnimal">ESPECIE</label>
						<input type="text" class="form-control text-uppercase text-left"
							value="<?php echo  $acionaInfo['ANIMAL_ESPECIE'] ?>" name="inputNomeAnimal" id="inputNomeAnimal"
							placeholder="Nome Do Animal" required>
					</div>

					<div class="col-md-6 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputIdadeAnimal">RAÇA</label>
						<input type="text" required class="form-control text-uppercase text-left" name="inputIdadeAnimal"
							value="<?php echo  $acionaInfo['ANIMAL_RACA']?>" id="inputIdadeAnimal" placeholder="Idade do Animal"
							required>
					</div>
				</div>

				<div class="px-2 form-group row">
					<div class="col-md-12 mx-auto ">
						<label class="align-self-center font-weight-bold" required for="inputConveniado">Proprietário</label>
						<input type="text" class="form-control text-uppercase text-left form-control" name="inputNomeProprietario"
							value="<?php echo  $acionaInfo['ANIMAL_PROPRIETARIO']?>" id="inputNomeProprietario"
							placeholder="Nome Completo do Proprietario do Animal">
					</div>
				</div>
				<br>
				<hr style="border-top: dotted 10px; color: #6EB1B9;" />

				<div class="px-2 form-group row">
					<div class="col-md-12 mx-auto ">
						<label class="align-self-center font-weight-bold" required for="inputConveniado">TIPO DE EXAME</label>
						<input type="text" class="form-control text-uppercase text-left form-control" name="inputNomeProprietario"
							value="<?php echo  $acionaInfo['DS_PERFIL_EXAME']?>" id="inputNomeProprietario"
							placeholder="Nome Completo do Proprietario do Animal">
					</div>
				</div>

				<div class="pt-4 px-2 form-group row">
					<div class="col-md-6 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputNomeAnimal">BUSCA</label>
						<input type="text" class="form-control text-uppercase text-left"
							value="<?php echo  $acionaInfo['TIPO_BUSCA'] ?>" name="inputNomeAnimal" id="inputNomeAnimal"
							placeholder="Nome Do Animal" required>
					</div>

					<div class="col-md-6 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputIdadeAnimal">DATA DA COLETA</label>
						<input type="text" required class="form-control text-uppercase text-left" name="inputIdadeAnimal"
							value="<?php echo  $acionaInfo['DATA_COLETA']?>" id="inputIdadeAnimal" placeholder="Idade do Animal"
							required>
					</div>
				</div>



				<br>
				<hr style="border-top: dotted 10px; color: #6EB1B9;" />
				<div class="px-2 pt-4 form-group row">
					<div class="col-md-12 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputEndereco">Endereço</label>
						<input type="text" class="form-control text-uppercase text-left" name="inputEndereco" id="inputEndereco"
							value="<?php echo  $acionaInfo['ENDERECO']?>" placeholder="Digite o endereço da instituição" required>
					</div>
				</div>

				<div class="px-2 form-group row">

					<div class="col-md-2 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputComplemento">Comp.</label>
						<input type="text" class="form-control text-uppercase text-left" name="inputComplemento"
							id="inputComplemento" value="<?php echo  $acionaInfo['COMPLEMENTO']?>" placeholder="Digite Aqui"
							formnovalidate="true">
					</div>

					<div class="col-md-5 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputBairro">Bairro</label>
						<input type="text" class="form-control text-uppercase text-left" name="inputBairro" id="inputBairro"
							value="<?php echo  $acionaInfo['BAIRRO']?>" placeholder="Digite Aqui" required>
					</div>

					<div class="col-md-5 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputCidade">Cidade</label>
						<input type="text" class="form-control text-uppercase text-left" name="inputCidade" id="inputCidade"
							value="<?php echo  $acionaInfo['CIDADE']?>" placeholder="Digite Aqui" required>
					</div>

				</div>

				<div class="px-2 form-group row">
					<div class="col-md-6 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputEstado">Estado</label>
						<input type="text" class="form-control text-uppercase text-left" name="inputEstado" id="inputEstado"
							value="<?php echo  $acionaInfo['ESTADO']?>" placeholder="SP" required>
					</div>
					<div class="col-md-6 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputCep">CEP</label>
						<input type="text" class="form-control text-uppercase text-left cep" name="inputCep" id="inputCep"
							value="<?php echo  $acionaInfo['CEP']?>" placeholder="Digite Aqui" required
							pattern="[0-9]{5}[\-]?[0-9]{3}" onblur="buscarEndereco(document.getElementById('inputCep').value); ">
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
				var target_url = "<?=base_url()?>faixaHorario";
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
							$("#faixaHorario").append("<option id='faix' value ='" + faixaHorarios2[index].FAIXA_HORARIO_ID +
								"'>" + faixaHorarios2[index].DS_FAIXA_HORARIO + "</option>");
						});
					}
				});
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
			$("#DataColeta").val('');
			$("#DataColeta2").val('');
			$("#faixaHorario").val('');
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
			$("#inputEndereco").val('');;
			$("#Endereco").val('');;
			$("#complemento").val('');;
			$("#bairro").val('');;
			$("#cidade").val('');;
			$("#estado").val('');;
			$("#celular").val('');;
			$("#cep").val('');;
		}

		jQuery.extend(jQuery.validator.messages, {
			required: "Favor Preencher esse campo",
			remote: "Please fix this field.",
			email: "Please enter a valid email address.",
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
