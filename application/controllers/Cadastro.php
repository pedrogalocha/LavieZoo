<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Veterinario_Model','cadastro_insert');
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

		$valida_cpf = $this->cadastro_insert->valdiar_cpf($dados_insert['inputCPF']);

		if($valida_cpf == "LIBERADO"){
			//cadastra Veterinario
			$insere_dados = $this->cadastro_insert->cadastro_vet($dados_insert);
			echo "<script> 
				alert('Veterinario Cadastrado com sucesso.'); window.location.href = '#';
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
