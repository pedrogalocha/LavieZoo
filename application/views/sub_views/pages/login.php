<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<header class="bg text-white" style="background-image: url('<?php echo base_url('includes/img/bg/2_login_bg.png') ?>'); 
background-repeat: no-repeat; background-size: cover; background-position: center center;">
	<div style="padding-top:110px;"></div>
	<form class="text-dark text-uppercase needs-validation" id="form_login" method="POST"
		action='<?php echo base_url('post_login') ?>' novalidate>
		<div class="row" style="margin-right: 0px; margin-left: 0px;">

			<div class="container col-sm-8 col-md-6 mx-auto align-self-center align-items-center justify-content-center">
				<!-- Começo da border transparente-->

				<div class="rounded px-2 pt-3 pb-2 align-items-center justify-content-center"
					style="background-color: rgba(255, 255, 255, 0.85)">
					<img class="" src="<?php echo base_url('includes/img/agencia_cadastro_icone.svg') ?>" style="
            position:absolute;
            top: 0;
            left: 50%;
            transform:translate(-50%,-25%);
            " />
					<div class="mt-5 row form-group" style="padding-top:50px ">
						<h3 class="mt-5 mx-auto font-weight-bold text-center" style="color: #0C7C95">Login</h3>
					</div>
					<div class="form-group row">
						<div class="col-md-9 mx-auto text-center">
							<label class="align-self-center font-weight-bold" for="inputEmail">E-mail</label>
							<input type="text" class="form-control text-left" name="inputEmail" id="inputEmail"
								placeholder="Digite o seu E-mail" required>

						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-9 mx-auto text-center">
							<label class="align-self-center font-weight-bold" for="inputSenha">Senha</label>
							<input type="password" class="form-control text-left" name="inputSenha" id="inputSenha"
								placeholder="Digite a sua Senha" required>
							<br>
							<p id="text" style="COLOR: RED; display: none; font-family: 'Montserrat', sans-serif !important;
    font-weight: bold;">Tecla CapsLock Ativada!!!</p>
						</div>
					</div>


					<div class="d-flex justify-content-center col-md-12">
						<button class="btn btn-lg btn-warning text-white">Acessar</button>
					</div>
					<br>
					<!-- <div class=" d-flex justify-content-center pt-2 col-md-12">
                        <button class="btn btn-sm btn-info">Ainda não é membro? Cadastre-se Aqui</button>
                      </div> -->

				</div>
				<script>
					var input = document.getElementById("inputSenha");
					var text = document.getElementById("text");
					input.addEventListener("keyup", function (event) {

						if (event.getModifierState("CapsLock")) {
							text.style.display = "block";
						} else {
							text.style.display = "none"
						}
					});

				</script>
				<script>
					$(document).ready(function ($) {
						$("#form_login").validate();
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

					jQuery.extend(jQuery.validator.messages, {
						required: "Favor Preencher esse campo"
						// remote: "Please fix this field.",
						// // email: "Please enter a valid email address.",
						// url: "Please enter a valid URL.",
						// date: "Please enter a valid date.",
						// dateISO: "Please enter a valid date (ISO).",
						// number: "Please enter a valid number.",
						// digits: "Please enter only digits.",
						// creditcard: "Please enter a valid credit card number.",
						// equalTo: "Please enter the same value again.",
						// accept: "Please enter a value with a valid extension.",
						// maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
						// minlength: jQuery.validator.format("Please enter at least {0} characters."),
						// rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
						// range: jQuery.validator.format("Please enter a value between {0} and {1}."),
						// max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
						// min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
					});

				</script>

				<!-- Fim da border transparente -->
	</form>


</header>
