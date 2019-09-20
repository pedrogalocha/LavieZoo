<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Login_Model','permissao');
    $this->load->model('Veterinario_Model','vetModel');
    $this->load->model('Usuario_Model','usuModel');
  }

	public function index()
	{
		$this->load->view('pages/sobre');
  }
  
  public function editar($id)
  {
    $login = $this->session->userdata('USUARIO_EMAIL');
    $dados['usu'] = $this->usuModel->getInfoTotalUsu($id);
    $dados['pemissao'] = $this->permissao->getPermissao($login);
    if($dados['pemissao'] == "CLI_FREE"  || $dados['pemissao'] == "CLI_PRO" || $dados['pemissao'] == "VET_FREE" || $dados['pemissao'] == "VET_PRO" ){
      $dados  =   array(
        'tela'      =>  'configUsu',
        'permissao' =>  $dados['pemissao'],
        'userInfo' =>  $dados['usu'],
        'sessao' => $this->session->userdata('USUARIO_NIVEL_ACESSO')
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
