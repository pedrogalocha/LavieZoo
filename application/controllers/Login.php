<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	
	public function index()
	{
    $dados  =   array(
			'tela'      =>  'login'
		);
		$this->load->view('sub_views/area_nav',$dados);
	}
	
	public function logar(){
		//Carregar Helps para trabalhar com formularios
		$this ->load->helper('form');
		$this ->load->library('form_validation');
		// Recuperamos os dados digitados pelo usuário no formulário via POST
		$login = $this->input->post('inputEmail');
		$senha = $this->input->post('inputSenha');
		if($login && $senha){
			//Carregar Model do Login
			$this->load->model('Login_Model');
			//Função que verifica a permisão do usuário
			$permissao = $this->Login_Model->getPermissao($login);
      //Função para verificar login e senha existe no BD
      $verifica = $this->Login_Model->verifica($login, $senha);
				// Caso o usuario exista no BD
				if($verifica === true){
					//Faz todo processo de verificação
						if($permissao == "CLI_FREE" || $permissao == "CLI_PRE"){
							$this->session->set_userdata('USUARIO_EMAIL', $login);
							$this->session->set_userdata('USUARIO_NIVEL_ACESSO', 1);
							redirect(base_url('Dash_Free'));
						} else if($permissao == "VET_FREE" || $permissao == "VET_PRE"){
							$this->session->set_userdata('USUARIO_EMAIL', $login);
							$this->session->set_userdata('USUARIO_NIVEL_ACESSO', 1);
							redirect(base_url('Dash_Free'));
						}
				}else{
					print_r($login);
					echo "<script> 
					alert('Você não tem permissão para acessar esta area'); window.location.href = 'login';
					</script>";
				}
		}
	}
	public function logout(){
		$this->session->unset_userdata("USUARIO_NIVEL_ACESSO");
		$this->session->unset_userdata("USUARIO_EMAIL");
			 redirect(base_url('login'));
	}
}