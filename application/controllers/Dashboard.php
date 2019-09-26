<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Login_Model','permissao');
    $this->load->model('Veterinario_Model','vetModel');
    $this->load->model('Agendamento_Model', 'agenModel');
    $rotabaseLogin = base_url('Login');
  }

	public function index()
	{
    $login = $this->session->userdata('USUARIO_EMAIL');
    $dados['permissao'] = $this->permissao->getPermissao($login);
    
    if($dados['permissao'] == "CLI_FREE"  || $dados['permissao'] == "CLI_PRO" || $dados['permissao'] == "VET_FREE" || $dados['permissao'] == "VET_PRO" ){
      $dados['usu'] = $this->vetModel->getInfoUsu($login);
      $agendamentos = $this->agenModel->getAgendamentos($dados['usu']['ID_USUARIO']);
      $vet_associados = false;
      if($dados['permissao'] == "CLI_PRO" ){
        $vet_associados = $this->vetModel->getVetsCli($dados['usu']['CLINICA_ID']);
      }
      
      $dados  =   array(
        'tela'      =>  'dashboard',
        'permissao' =>  $dados['permissao'],
        'userInfo' =>  $dados['usu'],
        'sessao' => $this->session->userdata('USUARIO_NIVEL_ACESSO'),
        'agendamentos' => $agendamentos,
        'vetAssociados' => $vet_associados
      );
      $this->load->view('sub_views/area_nav',$dados);
      //$this->load->view('sub_views/pages/dashboard');
    }else{
    echo "<script> 
            alert('Você não tem permissão para acessar esta area'); window.location.href = '$rotabaseLogin';
          </script>";
    }
  }
}
