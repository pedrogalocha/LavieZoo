<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

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
  
}
