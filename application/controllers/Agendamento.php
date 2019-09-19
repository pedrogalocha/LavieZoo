<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agendamento extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Login_Model','permissao');
    $this->load->model('Veterinario_Model','vetModel');
  }

	public function index()
	{
    $login = $this->session->userdata('USUARIO_EMAIL');
    $dados['pemissao'] = $this->permissao->getPermissao($login);
    $dados['usu'] = $this->vetModel->getInfoUsu($login);
    $sessao = $this->session->userdata('USUARIO_NIVEL_ACESSO');
    if($sessao == 1){
      $dados  =   array(
        'tela'      =>  'agendamento',
        'permissao' =>  $dados['pemissao'],
        'sessao'    => $sessao
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
