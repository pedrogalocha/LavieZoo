<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Login_Model','permissao');
    $this->load->model('Veterinario_Model','vetModel');
    $this->load->model('Agendamento_Model', 'agenModel');
  }

	public function index()
	{
    $login = $this->session->userdata('USUARIO_EMAIL');
    $dados['pemissao'] = $this->permissao->getPermissao($login);
    
    if($dados['pemissao'] == "CLI_FREE"  || $dados['pemissao'] == "CLI_PRO" || $dados['pemissao'] == "VET_FREE" || $dados['pemissao'] == "VET_PRO" ){
      $dados['usu'] = $this->vetModel->getInfoUsu($login);
      $agendamentos = $this->agenModel->getAgendamentos($dados['usu']['ID_USUARIO']);

      
      $dados  =   array(
        'tela'      =>  'dashboard',
        'permissao' =>  $dados['pemissao'],
        'userInfo' =>  $dados['usu'],
        'sessao' => $this->session->userdata('USUARIO_NIVEL_ACESSO'),
        'agendamentos' => $agendamentos
      );
      $this->load->view('sub_views/area_nav',$dados);
      //$this->load->view('sub_views/pages/dashboard');
    }else{
    echo "<script> 
            alert('Você não tem permissão para acessar esta area'); window.location.href = 'login';
          </script>";
    }
  }
}
