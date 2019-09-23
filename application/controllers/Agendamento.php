<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agendamento extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Login_Model','permissao');
    $this->load->model('Veterinario_Model','vetModel');
    $this->load->model('Agendamento_Model','agendamento');
    $this->load->model('Usuario_Model', 'usuario');
  }

	public function index()
	{
    $login = $this->session->userdata('USUARIO_EMAIL');
    $dados['pemissao'] = $this->permissao->getPermissao($login);
    $dados['usu'] = $this->usuario->getUsuId($login);
    $sessao = $this->session->userdata('USUARIO_NIVEL_ACESSO');
    $tipoAgendamento = $this->agendamento->getTipoAgendamento();
    if($sessao == 1){
      $dados  =   array(
        'tela'      =>  'agendamento',
        'permissao' =>  $dados['pemissao'],
        'sessao'    => $sessao,
        'tipoAgendamento' => $tipoAgendamento,
        'idUsuario' => $dados['usu']
      );
      $this->load->view('sub_views/area_nav',$dados);
      //$this->load->view('sub_views/pages/dashboard');
    }else{
    echo "<script> 
            alert('Você não tem permissão para acessar esta area'); window.location.href = 'login';
          </script>";
    }
  }

  public function agendamento(){
    $data_form = $this->input->post('data_selecionada');
    print_r($data_form);
    $dados['faixaHorario'] = $this->agendamento->getFaixaHorario($data_form);
  }

  public function cadastrarAgendamento(){
    $dados_form = $this->input->post();

    echo "<script>alert(cheguei)</script>";

    $dados_insert['inputNomeAnimal'] = $dados_form['inputNomeAnimal'];
		$dados_insert['inputIdadeAnimal'] = $dados_form['inputIdadeAnimal'];
		$dados_insert['inlineRadioOptions'] = $dados_form['inlineRadioOptions'];
		$dados_insert['inputRaça'] = $dados_form['inputRaça'];
		$dados_insert['inputNomeProprietario'] = $dados_form['inputNomeProprietario'];
		$dados_insert['inlineRadioOptions2'] = $dados_form['inlineRadioOptions2'];
		$dados_insert['inputOutrosExames'] = $dados_form['inputOutrosExames'] == null ? "" : $dados_form['inputOutrosExames'];
		$dados_insert['inlineRadioOptions3'] = $dados_form['inlineRadioOptions3'];
    $dados_insert['inputColeta'] = $dados_form['inputColeta'] == null ? "" : $dados_form['inputColeta'] ;
    $dados_insert['inputFaixaHorario'] = $dados_form['inputFaixaHorario'] == null ? "" : $dados_form['inputFaixaHorario']  ;
		$dados_insert['inputEndereco'] = $dados_form['inputEndereco'] == null ? "" : $dados_form['inputEndereco']  ;
		$dados_insert['inputComplemento'] = $dados_form['inputComplemento'] == null ? "" : $dados_form['inputComplemento'] ;
		$dados_insert['inputBairro'] = $dados_form['inputBairro'] == null ? "" : $dados_form['inputBairro']  ;
		$dados_insert['inputCidade'] = $dados_form['inputCidade'] == null ? "" : $dados_form['inputCidade'];
		$dados_insert['inputEstado'] = $dados_form['inputEstado'] == null ? "" : $dados_form['inputEstado'];
    $dados_insert['inputCep'] = $dados_form['inputCep'] == null ? "" : $dados_form['inputCep'];
    $dados_insert['inputCelular'] = $dados_form['inputCelular'] == null ? "" : $dados_form['inputCelular'];
    $dados_insert['idUsu'] = $dados_form['idUsu'];

    $insere_dados = $this->agendamento->cadastro_vet($dados_insert);

    print_r($dados_insert);
  }
}
