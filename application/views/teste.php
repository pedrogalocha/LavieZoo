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


	<?php
	$permissao = $this->session->userdata('USUARIO_NIVEL_ACESSO');
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$horario_solicitacao = date('Y-m-d H:i:s');
	?>
	<form class="text-dark text-uppercase needs-validation" method="POST" id="form_cad" action='<?php echo base_url('cadastrarAgendamento') ?>' novalidate autocomplete="off">
		<div class="row" style="display: inline" id="tabela">

		

			<div class="pt-5 container col-sm-8 mx-auto align-self-center align-items-center justify-content-center">

				<div class="pt-4 px-2 form-group row">
					<div class="col-md-6 mx-auto ">

						<label class="align-self-center font-weight-bold" for="inputNomeAnimal">Nome</label>
						<input type="text" class="form-control text-uppercase text-left" name="inputNomeAnimal" id="inputNomeAnimal" placeholder="Nome Do Animal" required>
					</div>

					<div class="col-md-3 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputIdadeAnimal">ANOS</label>
						<input type="number" required class="form-control text-uppercase text-left" name="inputIdadeAnimal" id="inputIdadeAnimal" placeholder="Idade em anos" required>
					</div>
					<div class="col-md-3 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputMesesAnimal">MÊSES</label>
						<input type="number" required class="form-control text-uppercase text-left" name="inputMesesAnimal" id="inputMesesAnimal" placeholder="Idade em mêses" required>
					</div>
				</div>

				<div class="px-2 form-group row">

					<div class="col-md-3 mx-auto ">
						<div class="pt-4 form-check form-check-inline">

							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Cachorro" required>
							<label class="form-check-label" for="inlineRadio1">Canino</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Gato">
							<label class="form-check-label" for="inlineRadio2">Felino</label>
						</div>
					</div>


					<div class="col-md-3 mx-auto ">
						<div class="pt-4 form-check form-check-inline">
							<input class="form-check-input" type="radio" name="RadioSexo" id="RadioMacho" value="Macho" required>
							<label class="form-check-label" for="inlineRadio3">Macho</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="RadioSexo" id="RadioFemea" value="Fêmea">
							<label class="form-check-label" for="inlineRadio4">Fêmea</label>
						</div>
					</div>

					<div class="col-md-6 mx-auto ">
						<label class="align-self-center font-weight-bold" for="inputRaça">Raça</label>
						<input type="text" class="form-control text-uppercase text-left" name="inputRaça" id="inputRaça" placeholder="Digite a Raça do Animal" required>
					</div>
				</div>

				<div class="px-2 form-group row">
					<div class="col-md-12 mx-auto ">
						<label class="align-self-center font-weight-bold" required for="inputConveniado">Proprietário</label>
						<input type="text" class="form-control text-uppercase text-left form-control" name="inputNomeProprietario" id="inputNomeProprietario" placeholder="Nome Completo do Proprietario do Animal">
					</div>
				</div>
					

				<hr style="border-top: dotted 10px; color: #6EB1B9;" />
			</div>


			<div class="pt-2 container col-sm-12 mx-auto align-self-center align-items-center justify-content-center" style="margin-top:30px; margin-bottom:30px; background-color: #F9F2C7">
				<div class="px-2 form-group row">
					<div class="col-md-8 mx-auto mb-2 ">
						<?php if ($permissao == 'PRO' || $permissao == 'ADMIN') { ?>


							<div class="pt-2 form-check form-check" style="padding-left: 0px !important">
								<div class="col-sm-3 d-inline" style="padding-left: 0px !important">
									<div class="pt-2 form-check form-check d-inline">
										<input onchange="ocultaData();ocultaAgend()" class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadioOptions2" value="Busca em Clinica" required>
										<label class="form-check-label" for="buscaEmClinica">Busca em Clinica</label>
									</div>
								</div>
								<div hidden class="col-sm-2 d-inline" style="padding-left: 1px !important; padding-right:0px">
									<label id="DataBusca" class=" coleta-clinica align-self-center font-weight-bold" for="inputDataBusca">Data busca</label>
								</div>
								<div hidden class="col-sm-2 d-inline " style="padding-left: 1px !important">
									<input onchange="validaDataBusca()" id="DataBusca2" class="coleta-clinica" type="datetime-local" name="inputBusca" placeholder="dd/mm/aaaa">
								</div> 
							</div>

							<div class="pt-2 form-check form-check" style="padding-left: 0px !important">
								<div class="col-sm-3 d-inline" style="padding-left: 0px !important">
									<div class="pt-2 form-check form-check d-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadioOptions3" value="Coleta Em Clinica" onchange="exibeData();ocultaAgend();ocultaDataBusca()">
										<label class="form-check-label" for="coletaEmClinica">Coleta em Clinica</label>
									</div>
								</div>

								<div class="col-sm-2 d-inline" style="padding-left: 1px !important; padding-right:0px">
									<label id="DataColeta" class=" coleta-clinica align-self-center font-weight-bold" for="inputDataColeta">Data</label>
								</div>
								<div class="col-sm-2 d-inline " style="padding-left: 1px !important">
									<input onchange="validaData()" id="DataColeta2" class="coleta-clinica" type="date" name="inputColeta" placeholder="dd/mm/aaaa">
								</div>
								<div class="col-sm-2 d-inline" style="padding-left: 1px !important">
									<select name="inputFaixaHorario" onchange="ValidaHorario(this.options[this.selectedIndex].value)" id="faixaHorario" class="coleta-clinica" onchange="">
										<option label="Faixa de Horario">Faixa de Horario</option>
									</select>
								</div>
							</div>
						<?php } else { ?>
							<div class="pt-2 form-check form-check">
								<input onchange="ocultaData();ocultaAgend();validaDataBusca()" class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadioOptions2" value="Busca em Clinica" disabled>
								<label class="form-check-label" for="buscaEmClinica">Busca em Clinica</label>
							</div>

							<div class="pt-2 form-check form-check" style="padding-left: 0px !important">
								<div class="col-sm-3 d-inline" style="padding-left: 0px !important">
									<div class="pt-2 form-check form-check d-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadioOptions3" value="Coleta Em Clinica" disabled onchange="exibeData();ocultaAgend();ocultaDataBusca()">
										<label class="form-check-label" for="coletaEmClinica">Coleta em Clinica</label>
									</div>
								</div>
								<div class="col-sm-2 d-inline" style="padding-left: 1px !important; padding-right:0px">
									<label id="DataColeta" class=" coleta-clinica align-self-center font-weight-bold" for="inputDataColeta">Data</label>
								</div>
								<div class="col-sm-2 d-inline " style="padding-left: 1px !important">
									<input onchange="validaData()" id="DataColeta2" class="coleta-clinica" type="date" name="inputColeta" placeholder="dd/mm/aaaa">
								</div>
								<div class="col-sm-2 d-inline" style="padding-left: 1px !important">
									<select name="inputFaixaHorario" onchange="ValidaHorario(this.options[this.selectedIndex].value)" id="faixaHorario" class="coleta-clinica" onchange="">
										<option label="Faixa de Horario">Faixa de Horario</option>
									</select>
								</div>
							</div>

						<?php } ?>

						<div class="pt-2 form-check form-check" tyle="
                    padding-top: 0px !important;">
							<input onchange="ocultaData();exibeAgend();ocultaDataBusca()" class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadioOptions3" value="Busca Domiciliar">
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
								<label id="Endereco" class="coleta-clinica align-self-center font-weight-bold" for="inputEndereco">Endereço</label>
								<input type="text" class="coleta-clinica form-control text-uppercase text-left" name="inputEndereco" id="inputEndereco" placeholder="Digite o endereço da instituição">
							</div>
						</div>

						<div class="px-2 form-group row">

							<div id="complemento" class="coleta-clinica col-md-4 mx-auto ">
								<label class="align-self-center font-weight-bold" for="inputComplemento">Complemento</label>
								<input type="text" class="form-control text-uppercase text-left" name="inputComplemento" id="inputComplemento" placeholder="Digite Aqui" formnovalidate="true">
							</div>

							<div id="bairro" class="coleta-clinica col-md-4 mx-auto ">
								<label class="align-self-center font-weight-bold" for="inputBairro">Bairro</label>
								<input type="text" class="form-control text-uppercase text-left" name="inputBairro" id="inputBairro" placeholder="Digite Aqui">
							</div>

							<div id="cidade" class="coleta-clinica col-md-4 mx-auto ">
								<label class="align-self-center font-weight-bold" for="inputCidade">Cidade</label>
								<input type="text" class="form-control text-uppercase text-left" name="inputCidade" id="inputCidade" placeholder="Digite Aqui">
							</div>
						</div>


						<div class="px-2 form-group row">
							<div id="estado" class="coleta-clinica margin-final-agendamento col-md-2 mx-auto ">
								<label class="margin-final-agendamento align-self-center font-weight-bold" for="inputEstado">Estado</label>
								<input type="text" class="form-control text-uppercase text-left" name="inputEstado" id="inputEstado" placeholder="SP">
							</div>
							<div id="cep" class="coleta-clinica margin-final-agendamento col-md-4 mx-auto ">
								<label class="margin-final-agendamento align-self-center font-weight-bold" for="inputCep">CEP</label>
								<input type="text" class="form-control text-uppercase text-left cep" name="inputCep" id="inputCep" placeholder="Digite Aqui" pattern="[0-9]{5}[\-]?[0-9]{3}" onblur="buscarEndereco(document.getElementById('inputCep').value); ">
							</div>

							<div id="celular" class="coleta-clinica margin-final-agendamento col-md-4 mx-auto ">
								<label class="align-self-center font-weight-bold" for="inputCelular">Celular</label>
								<input type="text" class="form-control text-uppercase text-left ddd_cell" name="inputCelular" id="inputCelular" placeholder="(__) _____-____" pattern="^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$">
							</div>
							<div class="col-md-6"></div>
						</div>
						<div>
							<input hidden="true" name="idUsu" value='<?= $idUsuario['ID_USUARIO']; ?>'>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 mb-2" style="text-align:center;">
				<button type="submit" class="btn btn-lg btn-warning text-white">Enviar</button>
			</div>
			
		</div>
		<div class="col-md-12 mb-2" style="text-align:center;">
				<button type="button" class="btn btn-lg btn-warning text-white" id="btnImprimir" onclick="CriaPDF()">teste</button>
			</div>
		</div>


	</form>
	<!-- Modal -->
	<form class="text-dark text-uppercase needs-validation" method="POST" id="form_exame"
		action='<?php echo base_url('insert_exame') ?>' novalidate autocomplete="off">

		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog modal-lg">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">
							<font color="Black">Cadastrar Tipo de Exame
						</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>

					</div>
					<div class="modal-body text">
					<input hidden="true" name="idUsu" value='<?= $idUsuario['ID_USUARIO']; ?>'>
						<input type="text" class="form-control text-uppercase text-left form-control"
							name="novoExame" id="novoExame" placeholder="Descreva o Exame...">
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-info btn-lg" >Cadastrar</button>
					</div>
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
		win.document.write('<link rel="stylesheet" type="text/css" href="includes/vendor/bootstrap/css/bootstrap.min.css">');
		win.document.write('<link rel="stylesheet" type="text/css" href="includes/css/cadastro.css">');
		win.document.write('<link rel="stylesheet" type="text/css" href="includes/css/fonts.css">');
        win.document.write('<title>teste de pdf</title>');   // <title> CABEÇALHO DO PDF.
		// INCLUI UM ESTILO NA TAB HEAD
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(minhaTabela);// O CONTEUDO DA TABELA DENTRO DA TAG BODY
        win.document.write('</body></html>');
        win.document.close();// FECHA A JANELA
        win.print();// IMPRIME O CONTEUDO
    }
</script>
</html>
</body>