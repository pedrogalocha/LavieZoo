<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Veterinario_Model','vet_model');
		$this->load->model('Usuario_Model','usu_model');
	}

	public function index()
	{
    $dados  =   array(
			'tela'      =>  'principal',
		);
		$this->load->view('cadastros/cadastro_principal',$dados);
  }
  
  public function cadastro_vet()
	{
    $dados  =   array(
			'tela'      =>  'vet'
		);
		$this->load->view('cadastros/cadastro_principal',$dados);
  }

  public function cadastro_clinica()
	{
    $dados  =   array(
			'tela'      =>  'clinica'
		);
		$this->load->view('cadastros/cadastro_principal',$dados);
	}
	

	public function tela_login()
	{
    $dados  =   array(
			'tela'      =>  'login'
		);
		$this->load->view('cadastros/cadastro_principal',$dados);
	}
	public function insert_vet(){

		$dados_form = $this->input->post();

		$dados_insert['inputNomeCompleto'] = $dados_form['inputNomeCompleto'];
		$dados_insert['inputCRMV'] = $dados_form['inputCRMV'];
		$dados_insert['inputDataDeNascimento'] = $dados_form['inputDataDeNascimento'];
		$dados_insert['inputEspecialidade'] = $dados_form['inputEspecialidade'];
		$dados_insert['inlineRadioOptions'] = $dados_form['inlineRadioOptions'];
		$dados_insert['inputCPF'] = $dados_form['inputCPF'];
		$dados_insert['inputConveniado'] = $dados_form['inputConveniado'];
		$dados_insert['inputEmail'] = $dados_form['inputEmail'];
		$dados_insert['inputSenha'] = $dados_form['inputSenha'];

		$clinica_id = 0;

		$valida_cpf = $this->vet_model->validar_cpf($dados_insert['inputCPF']);

		if($valida_cpf == "LIBERADO"){
			//cadastra Veterinario
			$insere_dados = $this->vet_model->cadastro_vet($dados_insert);

			//Seleciona ID vet
			$veterinario_id = $this->vet_model->pegar_id_vet($dados_insert['inputCPF']);

			//Cadastra Usuario
			$cadastro_usuario = $this->usu_model->cadastro_usu($dados_insert['inputEmail'], $dados_insert['inputSenha'], $veterinario_id, $clinica_id);

			echo "<script> 
				alert('Veterinario Cadastrado com sucesso.'); window.location.href = 'Cadastro';
			</script>";
		} 
		else 
		{
			echo "<script> 
				alert('CPF Já cadastrado.'); window.location.href = 'Cadastro';
			</script>";
		}
		
		
	}
  
}
