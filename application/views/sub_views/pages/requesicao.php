<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Lavie Zoo - Cuidado a um toque</title>

	<!-- Bootstrap core CSS -->

	<link href="<?php echo base_url('includes/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" />

	<!-- Custom fonts for this template -->
	<script src="https://kit.fontawesome.com/0f03743da6.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway&display=swap" rel="stylesheet" />
	<script src="<?php echo base_url('includes/vendor/jquery/jquery.js') ?>"></script>
	<script src="<?php echo base_url('includes/vendor/jquery/jquery.min.js') ?>"></script>



	<!-- Custom styles for this template -->
	<link href="<?php echo base_url('includes/css/scrolling-nav.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('includes/css/fonts.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('includes/css/cadastro.css') ?>" rel="stylesheet" />

	<!-- <script type="text/javascript" src="<?php echo base_url('includes/js/jquery.mask.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('includes/js/jquery.mask.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('includes/js/jquery.validate.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('includes/js/jquery.validate.min.js') ?>"></script> -->

</head>


<body class="pt-5 bg text-white" style="margin-top:80px; background-color: #F3F3F3; background-image:none" onload="CriaPDF()">
<!--  -->


	<?php
	$permissao = $this->session->userdata('USUARIO_NIVEL_ACESSO');
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$horario_solicitacao = date('Y-m-d H:i:s');
	?>
	<form class="text-dark text-uppercase needs-validation" method="POST" id="form_cad"
		action='<?php echo base_url('cadastrarAgendamento') ?>' novalidate autocomplete="off">
		<div class="row" style="display: inline" id="tabela">

			<div class="pt-5 container col-sm-8 mx-auto align-self-center align-items-center justify-content-center">
			<hr style="border-top: dotted 10px; color: #6EB1B9;" />
				<div class="pt-4 px-2 form-group row">

					<div class="col-md-6 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputNomeAnimal">Nome</label>
						<input type="text" class="form-control text-uppercase text-left"
							value="<?php echo  $acionaInfo['ANIMAL_NOME'] ?>" name="inputNomeAnimal" id="inputNomeAnimal"
							placeholder="Nome Do Animal" required>
					</div>

					<div class="col-md-3 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputIdadeAnimal">ANOS</label>
						<input type="text" required class="form-control text-uppercase text-left" name="inputIdadeAnimal"
							value="<?php echo  $acionaInfo['ANIMAL_IDADE'] ?>" id="inputIdadeAnimal"
							placeholder="Idade do Animal" required>
					</div>

					<div class="col-md-3 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputMesesAnimal">MESES</label>
						<input type="text" required class="form-control text-uppercase text-left" name="inputMesesAnimal"
							value="<?php echo $acionaInfo['ANIMAL_MESES'] ?>" id="inputMesesAnimal"
							placeholder="Meses do Animal" required>
					</div>
				</div>

				<div class="pt-4 px-2 form-group row">

					<div class="col-md-3 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputNomeAnimal">SEXO</label>
						<input type="text" class="form-control text-uppercase text-left"
							value="<?php echo  $acionaInfo['ANIMAL_SEXO'] ?>" name="inputSexo" id="inputSexo"
							placeholder="Sexo" required>
					</div>

					<div class="col-md-3 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputIdadeAnimal">ESPECIE</label>
						<input type="text" required class="form-control text-uppercase text-left" name="inputIdadeAnimal"
							value="<?php echo  $acionaInfo['ANIMAL_ESPECIE'] ?>" id="inputIdadeAnimal"
							placeholder="Idade do Animal" required>
					</div>

					<div class="col-md-6 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputMesesAnimal">PROPRIETÁRIO</label>
						<input type="text" required class="form-control text-uppercase text-left" name="inputProprietario"
							value="<?php echo $acionaInfo['ANIMAL_PROPRIETARIO'] ?>" id="inputProprietario"
							placeholder="PROPRIETÁRIO" required>
					</div>
				</div>

				<br>
				<hr style="border-top: dotted 10px; color: #6EB1B9;" />

				<div class="pt-4 px-2 form-group row">

					<div class="col-md-12 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputExame">PERFIL DE EXAME</label>
						<input type="text" class="form-control text-uppercase text-left"
							value="<?php echo  $acionaInfo['DS_PERFIL_EXAME'] ?>" name="inputExame" id="inputExame"
							placeholder="Exame" required>
					</div>
				</div>
				<div class="pt-4 px-2 form-group row">
					<?php 
					$vet;

					if($acionaInfo['VETERINARIO_NOME'] != null)
					{
					  $vet = $acionaInfo['VETERINARIO_NOME'];
					}
					else if($acionaInfo['CLINICA_NOME_FANTASIA'] != null){
						$vet = $acionaInfo['CLINICA_NOME_FANTASIA'];
					}
					?>
					<div class="col-md-6 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputClinica">VETERINARIO / CLINICA</label>
						<input type="text" class="form-control text-uppercase text-left" value="<?php echo $vet ?>"
							name="inputClinica" id="inputClinica" placeholder="Exame" required>
					</div>
					<div class="col-md-6 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputStatus">STATUS</label>
						<input type="text" class="form-control text-uppercase text-left" value="<?php echo  $acionaInfo['STATUS'] ?>"
							name="inputStatus" id="inputStatus" placeholder="STATUS" required>
					</div>	
				</div>
			</div>
		</div>
		<div class="pt-4 px-2 form-group row">
			<div class="col-md-12 mb-2" style="text-align:center;">
				<button type="button" class="btn btn-lg btn-warning text-white" id="btnImprimir"
					onclick="CriaPDF()">Gerar PDF</button>
			</div>
		</div>
		</div>
	</form>
	<script>
		function CriaPDF() {
			var minhaTabela = document.getElementById('tabela').innerHTML;
			// CRIA UM OBJETO WINDOW
			var win = window.open('', '', 'height=700,width=700');
			win.document.write('<html><head>');
			win.document.write('<link rel="stylesheet" type="text/css" href="../includes/vendor/bootstrap/css/bootstrap.min.css">');
			win.document.write('<link rel="stylesheet" type="text/css" href="../includes/css/cadastro.css">');
			win.document.write('<link rel="stylesheet" type="text/css" href="../includes/css/fonts.css">');
			// win.document.write('<title>teste de pdf</title>'); // <title> CABEÇALHO DO PDF.
			// INCLUI UM ESTILO NA TAB HEAD
			win.document.write('</head>');
			win.document.write('<body>');
			win.document.write(minhaTabela); // O CONTEUDO DA TABELA DENTRO DA TAG BODY
			win.document.write('</body></html>');
			win.document.close(); // FECHA A JANELA
			win.print(); // IMPRIME O CONTEUDO
		}
	</script>

	</html>