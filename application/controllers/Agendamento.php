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
    

    if($sessao == 'PRO' || $sessao == 'ADMIN'){
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
            // console.log('$sessao');
            alert('Você não tem permissão para acessar esta batata'); window.location.href = 'login';
          </script>";
    }
  }

  public function agendamento(){
    $data_form = $this->input->post('data_selecionada');
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
		$dados_insert['inputOutrosExames'] = $dados_form['inputOutrosExames'] == null ? null : $dados_form['inputOutrosExames'];
		$dados_insert['inlineRadioOptions3'] = $dados_form['inlineRadioOptions3'];
    $dados_insert['inputColeta'] = $dados_form['inputColeta'] == null ? null : $dados_form['inputColeta'] ;
    $dados_insert['inputFaixaHorario'] = $dados_form['inputFaixaHorario'] == null ? 0 : $dados_form['inputFaixaHorario']  ;
		$dados_insert['inputEndereco'] = $dados_form['inputEndereco'] == null ? null : $dados_form['inputEndereco']  ;
		$dados_insert['inputComplemento'] = $dados_form['inputComplemento'] == null ? null : $dados_form['inputComplemento'] ;
		$dados_insert['inputBairro'] = $dados_form['inputBairro'] == null ? null : $dados_form['inputBairro']  ;
		$dados_insert['inputCidade'] = $dados_form['inputCidade'] == null ? null : $dados_form['inputCidade'];
		$dados_insert['inputEstado'] = $dados_form['inputEstado'] == null ? null : $dados_form['inputEstado'];
    $dados_insert['inputCep'] = $dados_form['inputCep'] == null ? null : $dados_form['inputCep'];
    $dados_insert['inputCelular'] = $dados_form['inputCelular'] == null ? null : $dados_form['inputCelular'];
    $dados_insert['idUsu'] = $dados_form['idUsu'];

    $insere_dados = $this->agendamento->cadastraAgendamento($dados_insert);
    

    if($insere_dados = true) {
      
      echo "<script> 
			window.location.href = 'Dash';
			</script>";
		} 
		else 
		{
			echo "<script> 
				window.location.href = 'cadastrarAgendamento';
			</script>";
		}
  }

  public function agendamentoEfetuado($nomeAnimal , $tipoAgendamento, $idUsu) {
		$this->load->config('email');
		$this->load->library('email');
		
		$from = $this->config->item('smtp_user');
		$to = $email;
		$subject = "contato@laviezoo.com.br";
		$message = "Efetuado Agendamento para $nomeAnimal ";

		$this->email->set_newline("\r\n");
		$this->email->from($from);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);

		if ($this->email->send()) {
				echo "<script> 
				alert('Obrigado por se cadastrar $nome.');
				</script>";
		} else {
				show_error($this->email->print_debugger());
		}
  }
  
  public function SubirLaudo(){
      $agendamento = $_FILES['agendamento'];
      $agendamentoID = $_POST['agId'];
      $configuracao = array(
        'upload_path'   => './uploads/',
        'allowed_types' => 'gif|jpg|png|pdf',
        'max_size'      => '5000',
        'max_width'     => 2024,
        'max_height'    => 1768
        );    

        
        
      $this->load->library('upload');
      $this->upload->initialize($configuracao);    
      if ( ! $this->upload->do_upload('agendamento')) {
         $error = array('error' => $this->upload->display_errors());
         echo "<script>alert('Não foi possivel Anexar o arquivo.')</script>";
      }
   
      else { 
         $data = array('upload_data' => $this->upload->data()); 
         $this->agendamento->atualizaLaudo(base_url()."uploads/".$_FILES['agendamento']['name'], $agendamentoID);
         echo "<script>alert('Arquivo Enviado com sucesso')</script>";
      } 

      echo "<script> 
			window.location.href = 'Admin';
			</script>";
   
  }
}