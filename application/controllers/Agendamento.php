<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agendamento extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Login_Model', 'permissao');
    $this->load->model('Veterinario_Model', 'vetModel');
    $this->load->model('Agendamento_Model', 'agendamento');
    $this->load->model('Usuario_Model', 'usuario');
  }

  public function index()
  {
    $login = $this->session->userdata('USUARIO_EMAIL');
    $dados['pemissao'] = $this->permissao->getPermissao($login);
    $dados['usu'] = $this->usuario->getUsuId($login);
    $usuario = implode("", $dados['usu']);
    $sessao = $this->session->userdata('USUARIO_NIVEL_ACESSO');
    $tipoAgendamento = $this->agendamento->getTipoAgendamento();
    $exame_usuario = $this->agendamento->getExameUsuario($usuario);


    if ($sessao == 'PRO' || $sessao == 'ADMIN' || $sessao == 'FREE') {
      $dados  =   array(
        'tela'      =>  'agendamento',
        'permissao' =>  $dados['pemissao'],
        'sessao'    => $sessao,
        'tipoAgendamento' => $tipoAgendamento,
        'exameUsuario' => $exame_usuario,
        'idUsuario' => $dados['usu']
      );
      $this->load->view('sub_views/area_nav', $dados);
      //$this->load->view('sub_views/pages/dashboard');
    } else {
      echo "<script> 
            // console.log('$sessao');
            alert('Você não tem permissão para acessar esta area'); window.location.href = 'login';
          </script>";
    }
  }

  public function requesicao()
  {

    require_once 'vendor/autoload.php';

    // instantiate and use the dompdf class
    $dompdf = new Dompdf\Dompdf();

    // $html = file_get_contents('exemplo.html');

    // $dompdf->loadHtml($html);

    // coloque nessa variável o código HTML que você quer que seja inserido no PDF
    $codigo_html = "<title>PDF LAVIEZOO</title>
    <style type=text/css>
    
    @page {
      margin: 2cm;
    }
    
    body {
      font-family: sans-serif;
      margin: 0.5cm 0;
      text-align: justify;
    }
    
    #header,
    #footer {
      position: fixed;
      left: 0;
      right: 0;
      color: #aaa;
      font-size: 0.9em;
    }
    
    #header {
      top: 0;
      border-bottom: 0.1pt solid #aaa;
    }
    
    #footer {
      bottom: 0;
      border-top: 0.1pt solid #aaa;
    }
    
    #header table,
    #footer table {
      width: 100%;
      border-collapse: collapse;
      border: none;
    }
    
    #header td,
    #footer td {
      padding: 0;
      width: 50%;
    }
    
    .page-number {
      text-align: center;
    }
    
    .page-number:before {
      content: 'Page ' counter(page);
    }
    
    hr {
      page-break-after: always;
      border: 0;
    }
    
    </style>
      
    </head>
    
    <body>
    
    <div id=header>
      <table>
        <tr>
          <td>Example document</td>
          <td style=text-align: right;>Author</td>
        </tr>
      </table>
    </div>
    
    <div id=footer>
      <div class=page-number></div>
    </div>
    
    <h2>Section 1</h2>
    
    <p>
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed non
    risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec,
    ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula
    massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci
    nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit
    amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat
    in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero
    pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo
    in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue
    blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus
    et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed
    pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales
    hendrerit.</p>
    
    <hr/>
    
    <h2>Section 2</h2>
    
    <p>
      Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut
    orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius,
    ligula non tempus aliquam, nunc turpis ullamcorper nibh, in tempus
    sapien eros vitae ligula. Pellentesque rhoncus nunc et augue. Integer
    id felis. Curabitur aliquet pellentesque diam. Integer quis metus vitae
    elit lobortis egestas. Lorem ipsum dolor sit amet, consectetuer
    adipiscing elit. Morbi vel erat non mauris convallis vehicula. Nulla et
    sapien. Integer tortor tellus, aliquam faucibus, convallis id, congue
    eu, quam. Mauris ullamcorper felis vitae erat. Proin feugiat, augue non
    elementum posuere, metus purus iaculis lectus, et tristique ligula
    justo vitae magna. Morbi vel erat non mauris convallis vehicula. Nulla et
    sapien. Integer tortor tellus, aliquam faucibus, convallis id, congue
    eu, quam. Mauris ullamcorper felis vitae erat. Proin feugiat, augue non
    elementum posuere, metus purus iaculis lectus, et tristique ligula
    justo vitae magna.</p>
    
    <hr/>
    
    <h2>Section 3</h2>
    
    <!-- yeah, we'll have to do better for inline floating elements -->
    <p><span style=float: left; font-size: 4em; width: 0.7em; height: 0.9em; line-height: 1;>A</span>liquam convallis sollicitudin purus. Praesent aliquam, enim at
    fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu
    lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod
    libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean
    suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla
    tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus,
    felis magna fermentum augue, et ultricies lacus lorem varius purus.
    Curabitur eu amet.</p>
    
    <p>Aliquam convallis sollicitudin purus. Praesent aliquam, enim at
    fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu
    lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod
    libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean
    suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla
    tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus,
    felis magna fermentum augue, et ultricies lacus lorem varius purus.
    Curabitur eu amet.</p>
    
    <p>Aliquam convallis sollicitudin purus. Praesent aliquam, enim at
    fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu
    lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod
    libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean
    suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla
    tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus,
    felis magna fermentum augue, et ultricies lacus lorem varius purus.
    Curabitur eu amet.</p>
    
    <p>Aliquam convallis sollicitudin purus. Praesent aliquam, enim at
    fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu
    lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod
    libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean
    suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla
    tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus,
    felis magna fermentum augue, et ultricies lacus lorem varius purus.
    Curabitur eu amet.</p>
    
    <p>Aliquam convallis sollicitudin purus. Praesent aliquam, enim at
    fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu
    lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod
    libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean
    suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla
    tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus,
    felis magna fermentum augue, et ultricies lacus lorem varius purus.
    Curabitur eu amet.</p>
    
    <p>Aliquam convallis sollicitudin purus. Praesent aliquam, enim at
    fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu
    lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod
    libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean
    suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla
    tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus,
    felis magna fermentum augue, et ultricies lacus lorem varius purus.
    Curabitur eu amet.</p>
    
    <p>Aliquam convallis sollicitudin purus. Praesent aliquam, enim at
    fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu
    lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod
    libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean
    suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla
    tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus,
    felis magna fermentum augue, et ultricies lacus lorem varius purus.
    Curabitur eu amet.</p>
    
    <p>Aliquam convallis sollicitudin purus. Praesent aliquam, enim at
    fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu
    lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod
    libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean
    suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla
    tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus,
    felis magna fermentum augue, et ultricies lacus lorem varius purus.
    Curabitur eu amet.</p>
    
    <p>Aliquam convallis sollicitudin purus. Praesent aliquam, enim at
    fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu
    lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod
    libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean
    suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla
    tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus,
    felis magna fermentum augue, et ultricies lacus lorem varius purus.
    Curabitur eu amet.</p>
    
    <p>Aliquam convallis sollicitudin purus. Praesent aliquam, enim at
    fermentum mollis, ligula massa adipiscing nisl, ac euismod nibh nisl eu
    lectus. Fusce vulputate sem at sapien. Vivamus leo. Aliquam euismod
    libero eu enim. Nulla nec felis sed leo placerat imperdiet. Aenean
    suscipit nulla in justo. Suspendisse cursus rutrum augue. Nulla
    tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus,
    felis magna fermentum augue, et ultricies lacus lorem varius purus.
    Curabitur eu amet.</p>
    
    </body></html>";
    // carregamos o código HTML no nosso arquivo PDF
    $dompdf->loadHtml($codigo_html);


    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Get the generated PDF file contents
    $pdf = $dompdf->output();

    // Output the generated PDF to Browser
    $dompdf->stream();
  }

  public function ver_agendamento($id)
  {

    $rotabaseDash = base_url('Dash');
    $login = $this->session->userdata('USUARIO_EMAIL');
    $id_sessao = $this->session->userdata('USUARIO_ID');
    $conta = $this->session->userdata('TIPO_CONTA');
    $tipoAgendamento = $this->agendamento->getTipoAgendamento();
    $id_usu_exame['ID'] = $this->usuario->getUsuAgendamentos($id);
    $id_exame = implode("", $id_usu_exame['ID']);
    $exame_usuario = $this->agendamento->getExameUsuario($id_exame);
    $dados['permissao'] = $this->session->userdata('USUARIO_NIVEL_ACESSO');
    if ($id_sessao == $id || $conta == "ADMIN") {
      $dados['aciona'] = $this->agendamento->getInfoTotalAciona($id);
      $dados = array(
        'tela' =>  'dados_agendamento',
        'permissao' => $conta,
        'tipoAgendamento' => $tipoAgendamento,
        'exameUsuario' => $exame_usuario,
        'acionaInfo' => $dados['aciona'],
        'sessao' => $this->session->userdata('USUARIO_NIVEL_ACESSO')
      );
      $this->load->view('sub_views/area_nav', $dados);
    }
  }
  public function del_agendamento($id)
  {
    $this->db->where('AGENDAMENTO_ID', $id);
    $this->db->delete('tb_agendamento');


    echo "<script> 
			window.location.href = '../Admin';
			</script>";
  }

  public function agendamento()
  {
    $data_form = $this->input->post('data_selecionada');
    $dados['faixaHorario'] = $this->agendamento->getFaixaHorario($data_form);
  }

  public function cadastrarAgendamento()
  {
    $dados_form = $this->input->post();

    // echo "<script>alert(cheguei)</script>";

    $dados_insert['inputNomeAnimal'] = $dados_form['inputNomeAnimal'];
    $dados_insert['inputIdadeAnimal'] = $dados_form['inputIdadeAnimal'];
    $dados_insert['inputMesesAnimal'] = $dados_form['inputMesesAnimal'];
    $dados_insert['inlineRadioOptions'] = $dados_form['inlineRadioOptions'];
    $dados_insert['sexo'] = $dados_form['RadioSexo'];
    $dados_insert['inputHorario'] = $dados_form['inputHorario'];
    $dados_insert['inputRaça'] = $dados_form['inputRaça'];
    $dados_insert['inputNomeProprietario'] = $dados_form['inputNomeProprietario'];
    $dados_insert['inlineRadioOptions2'] = $dados_form['inlineRadioOptions2'];
    $dados_insert['inputOutrosExames'] = $dados_form['inputOutrosExames'] == null ? null : $dados_form['inputOutrosExames'];
    $dados_insert['inlineRadioOptions3'] = $dados_form['inlineRadioOptions3'];
    $dados_insert['inputBusca'] = $dados_form['inputBusca'] == null ? null : $dados_form['inputBusca'];
    $dados_insert['inputColeta'] = $dados_form['inputColeta'] == null ? null : $dados_form['inputColeta'];
    $dados_insert['inputFaixaHorario'] = $dados_form['inputFaixaHorario'] == null ? 0 : $dados_form['inputFaixaHorario'];
    $dados_insert['inputEndereco'] = $dados_form['inputEndereco'] == null ? null : $dados_form['inputEndereco'];
    $dados_insert['inputComplemento'] = $dados_form['inputComplemento'] == null ? null : $dados_form['inputComplemento'];
    $dados_insert['inputBairro'] = $dados_form['inputBairro'] == null ? null : $dados_form['inputBairro'];
    $dados_insert['inputCidade'] = $dados_form['inputCidade'] == null ? null : $dados_form['inputCidade'];
    $dados_insert['inputEstado'] = $dados_form['inputEstado'] == null ? null : $dados_form['inputEstado'];
    $dados_insert['inputCep'] = $dados_form['inputCep'] == null ? null : $dados_form['inputCep'];
    $dados_insert['inputCelular'] = $dados_form['inputCelular'] == null ? null : $dados_form['inputCelular'];
    $dados_insert['idUsu'] = $dados_form['idUsu'];

    $insere_dados = $this->agendamento->cadastraAgendamento($dados_insert);


    if ($insere_dados = true) {

      echo "<script> 
			window.location.href = 'Dash';
			</script>";
    } else {
      echo "<script> 
				window.location.href = 'cadastrarAgendamento';
			</script>";
    }
  }

  public function update_agendamento()
  {
    $dados_post = $this->input->post();
    $dadosAt['inputNomeAnimal'] = $dados_post['inputNomeAnimal'];
    $dadosAt['inputIdadeAnimal'] = $dados_post['inputIdadeAnimal'];
    $dadosAt['inputMesesAnimal'] = $dados_post['inputMesesAnimal'];
    $dadosAt['radioRaca'] = $dados_post['radioRaca'];
    $dadosAt['radioSexo'] = $dados_post['radioSexo'];
    $dadosAt['inputEspecie'] = $dados_post['inputEspecie'];
    $dadosAt['inputNomeProprietario'] = $dados_post['inputNomeProprietario'];
    $dadosAt['radioExame'] = $dados_post['radioExame'];
    // $dadosAt['radioBusca'] = $dados_post['radioBusca'];
    // $dadosAt['inputBusca'] = $dados_post['inputBusca'];
    // $dadosAt['DataColeta'] = $dados_post['DataColeta2'];
    // $dadosAt['inputColeta'] = $dados_post['inputColeta'];
    $dadosAt['selectStatus'] = $dados_post['selectStatus'];
    // $dadosAt['inputFaixaHorario'] = $dados_post['inputFaixaHorario'];
    // $dadosAt['inputBusca'] = $dados_post['inputBusca'] == null ? null : $dados_post['inputBusca'] ;
    // $dadosAt['inputColeta'] = $dados_post['inputColeta'] == null ? null : $dados_post['inputColeta'] ;
    // $dadosAt['inputFaixaHorario'] = $dados_post['inputFaixaHorario'] == null ? 0 : $dados_post['inputFaixaHorario']  ;
    // $dadosAt['inputEndereco'] = $dados_post['inputEndereco'] == null ? null : $dados_post['inputEndereco']  ;
    // $dadosAt['inputComplemento'] = $dados_post['inputComplemento'] == null ? null : $dados_post['inputComplemento'] ;
    // $dadosAt['inputBairro'] = $dados_post['inputBairro'] == null ? null : $dados_post['inputBairro']  ;
    // $dadosAt['inputCidade'] = $dados_post['inputCidade'] == null ? null : $dados_post['inputCidade'];
    // $dadosAt['inputEstado'] = $dados_post['inputEstado'] == null ? null : $dados_post['inputEstado'];
    // $dadosAt['inputCep'] = $dados_post['inputCep'] == null ? null : $dados_post['inputCep'];
    // $dadosAt['inputCelular'] = $dados_post['inputCelular'] == null ? null : $dados_post['inputCelular'];
    $dadosAt['inputDesc'] = $dados_post['inputDesc'];
    $dadosAt['idUsu'] = $dados_post['idUsu'];

    $atualiza_dados = $this->agendamento->atualizarAgendamento($dadosAt);


    if ($atualiza_dados = true) {

      echo "<script> 
			window.location.href = 'Dash';
			</script>";
    } else {
      echo "<script> 
				window.location.href = 'cadastrarAgendamento';
			</script>";
    }
  }


  // public function agendamentoEfetuado($nomeAnimal , $tipoAgendamento, $idUsu) {
  // 	$this->load->config('email');
  // 	$this->load->library('email');

  // 	$from = $this->config->item('smtp_user');
  // 	$to = $email;
  // 	$subject = "contato@laviezoo.com.br";
  // 	$message = "Efetuado Agendamento para $nomeAnimal ";

  // 	$this->email->set_newline("\r\n");
  // 	$this->email->from($from);
  // 	$this->email->to($to);
  // 	$this->email->subject($subject);
  // 	$this->email->message($message);

  // 	if ($this->email->send()) {
  // 			echo "<script> 
  // 			alert('Obrigado por se cadastrar $nome.');
  // 			</script>";
  // 	} else {
  // 			show_error($this->email->print_debugger());
  // 	}
  // }

  public function SubirLaudo()
  {
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
    if (!$this->upload->do_upload('agendamento')) {
      $error = array('error' => $this->upload->display_errors());
      echo "<script>alert('Não foi possivel Anexar o arquivo.')</script>";
    } else {
      $data = array('upload_data' => $this->upload->data());
      $this->agendamento->atualizaLaudo(base_url() . "uploads/" . $_FILES['agendamento']['name'], $agendamentoID);
      echo "<script>alert('Arquivo Enviado com sucesso')</script>";
    }

    echo "<script> 
			window.location.href = 'Admin';
			</script>";
  }
}
