<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Veterinario_Model','vet_model');
		$this->load->model('Clinica_Model','cli_model');
		$this->load->model('Usuario_Model','usu_model');
	}

	public function index()
	{
    $dados  =   array(
			'tela'      =>  'principal',
		);
		$this->load->view('sub_views/area_nav',$dados);
  }
  
  public function cadastro_vet()
	{
    $dados  =   array(
			'tela'      =>  'vet'
		);
		$this->load->view('sub_views/area_nav',$dados);
		
  }

  public function cadastro_clinica()
	{
    $dados  =   array(
			'tela'      =>  'clinica'
		);
		$this->load->view('sub_views/area_nav',$dados);
	}


	//Cadastro Vet
	public function insert_vet()
	{

		$dados_form = $this->input->post();

		$dados_insert['inputNomeCompleto'] = $dados_form['inputNomeCompleto'];
		$dados_insert['inputCRMV'] = $dados_form['inputCRMV'];
		$dados_insert['inputDataDeNascimento'] = $dados_form['inputDataDeNascimento'];
		$dados_insert['inputEspecialidade'] = $dados_form['inputEspecialidade'];
		$dados_insert['inlineRadioOptions'] = $dados_form['inlineRadioOptions'];
		$dados_insert['inputCPF'] = $dados_form['inputCPF'];
		$dados_insert['inputFixo'] = $dados_form['inputFixo'];
		$dados_insert['inputCel'] = $dados_form['inputCel'];
		$dados_insert['inputConveniado'] = $dados_form['inputConveniado'];
		$dados_insert['inputEmail'] = $dados_form['inputEmail'];
		$dados_insert['inputSenha'] = $dados_form['inputSenha'];

		$clinica_id = 0;

		// Pega CPF inserido e valida se já existe no banco
		$valida_cpf = $this->vet_model->validar_cpf($dados_insert['inputCPF']);

		//Validar se Email está cadastrado
		$valida_mail = $this->usu_model->validar_email($dados_insert['inputEmail']);

		//Caso esteja liberado, o mesmo retorna uma string informando isso.
		if($valida_cpf == "LIBERADO" && $valida_mail == "LIBERADO"){
			//cadastra Veterinario
			$insere_dados = $this->vet_model->cadastro_vet($dados_insert);
			//Seleciona ID vet
			$veterinario_id = $this->vet_model->pegar_id_vet($dados_insert['inputCPF']);
			//Cadastra Usuario
			$cadastro_usuario = $this->usu_model->cadastro_usu($dados_insert['inputEmail'], $dados_insert['inputSenha'], $veterinario_id, $clinica_id, 'VET_FREE');

			//Alerta JS com redirecionamento
			echo "<script> 
			alert('Veterinario cadastrado com sucesso.'); window.location.href = 'Login';
			</script>";
		} 
		else 
		{
			echo "<script> 
				alert('Usuario Já cadastrado.'); window.location.href = 'Cadastro';
			</script>";
		}
	}

	//Cadastro Clinica
	public function insert_clinica()
	{

		$dados_form = $this->input->post();

		$dados_insert['inputNomeDaInstituicao'] = $dados_form['inputNomeDaInstituicao'];
		$dados_insert['inputCNPJ'] = $dados_form['inputCNPJ'];
		$dados_insert['inputNomeTitular'] = $dados_form['inputNomeTitular'];
		$dados_insert['inputDataDeNascimento'] = $dados_form['inputDataDeNascimento'];
		$dados_insert['inlineRadioOptions'] = $dados_form['inlineRadioOptions'];
		$dados_insert['inputCPF'] = $dados_form['inputCPF'];
		$dados_insert['inputConveniado'] = $dados_form['inputConveniado'];
		$dados_insert['inputEndereco'] = $dados_form['inputEndereco'];
		$dados_insert['inputComplemento'] = $dados_form['inputComplemento'];
		$dados_insert['inputBairro'] = $dados_form['inputBairro'];
		$dados_insert['inputCidade'] = $dados_form['inputCidade'];
		$dados_insert['inputEstado'] = $dados_form['inputEstado'];
		$dados_insert['inputCep'] = $dados_form['inputCep'];
		$dados_insert['inputCelular'] = $dados_form['inputCelular'];

		$dados_insert['inputEmail'] = $dados_form['inputEmail'];
		$dados_insert['inputSenha'] = $dados_form['inputSenha'];

		print_r("inputNomeDaInstituicao", $dados_insert['inputNomeDaInstituicao'] );
		$id_vet = 0;

		// Pega CPF inserido e valida se já existe no banco
		$valida_cnpj = $this->cli_model->validar_cnpj($dados_insert['inputCNPJ']);

		//Validar se Email está cadastrado
		$valida_mail = $this->usu_model->validar_email($dados_insert['inputEmail']);

		//Caso esteja liberado, o mesmo retorna uma string informando isso.
		if($valida_cnpj == "LIBERADO" && $valida_mail = "LIBERADO"){
			//cadastra Veterinario
			$insere_dados = $this->cli_model->cadastro_clinica($dados_insert);

			//Seleciona ID vet
			$clinica_id = $this->cli_model->pegar_id_cli($dados_insert['inputCNPJ']);
			
			//Cadastra Usuario
			$cadastro_usuario = $this->usu_model->cadastro_usu($dados_insert['inputEmail'], $dados_insert['inputSenha'], 0, $clinica_id, 'CLI_FREE');

			//Alerta JS com redirecionamento
			echo "<script> 
				alert('Clinica cadastrada com sucesso.'); window.location.href = 'Login';
			</script>";
		} 
		else 
		{
			echo "<script> 
				alert('Clinica Já cadastrado.'); window.location.href = 'Cadastro';
			</script>";
		}
	}
}
