<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cadastro extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Veterinario_Model', 'vet_model');
        $this->load->model('Clinica_Model', 'cli_model');
        $this->load->model('Usuario_Model', 'usu_model');
        $this->load->library('email');
        $this->load->helper('limpadoc_helper');
        $rotabaseLogin = base_url('Login');
        $rotabaseCadastro = base_url('Cadastro');
    }

    public function index()
    {
        $dados = array(
            'tela' => 'principal',
            'permissao' => 'cadastro',
        );
        $this->load->view('sub_views/area_nav', $dados);
    }

    public function cadastro_vet()
    {
        $dados = array(
            'tela' => 'vet',
            'permissao' => 'cadastro',
            'clinica' => false,
        );
        $this->load->view('sub_views/area_nav', $dados);
    }

    public function cadastro_clinica()
    {

        $dados = array(
            'tela' => 'clinica',
            'permissao' => 'cadastro',
        );

        $this->load->view('sub_views/area_nav', $dados);
    }

    public function cadastro_vet_clinica($idCli)
    {
        $this->load->model('Login_Model', 'permissao');
        $login = $this->session->userdata('USUARIO_EMAIL');
        $conta = $this->session->userdata('TIPO_CONTA');
        $dados['pemissao'] = $this->session->userdata('USUARIO_NIVEL_ACESSO');

        if ($dados['pemissao'] == "PRO" || $conta = "CLI_PRO") {
            $dados = array(
                'tela' => 'vet',
                'permissao' => $conta,
                'idCli' => $idCli,
                'clinica' => true,
            );

            $this->load->view('sub_views/area_nav', $dados);
        }
    }

    public function update_vet($idClinica = 0)
    {


        $dados_form = $this->input->post();

        $nome = $dados_form['inputNomeCompleto'];
        $nomeCli = $dados_form['inputNomeDaInstituicao'];
        if (isset($nome)) {

            $idVet = $dados_form['inputId'];
            $crmv = $dados_form['inputCRMV'];
            $nasc = $dados_form['inputDataDeNascimento'];
            $sexo = $dados_form['inlineRadioOptions'];
            $spec = $dados_form['inputEspecialidade'];
            $cpf = limpaCPF_CNPJ($dados_form['inputCPF']);
            $end = $dados_form['inputEndereco'];
            $comp = $dados_form['inputComplemento'];
            $bairro = $dados_form['inputBairro'];
            $cid = $dados_form['inputCidade'];
            $estd = $dados_form['inputEstado'];
            $cep = limpaCPF_CNPJ($dados_form['inputCep']);
            $senha = base64_encode($dados_form['inputSenha']);
            $email = $dados_form['inputEmail'];
            // $dados_update['idClinica'] = $idClinica;

            //tem que adicioar a atualização do cliente!!!

            $qVet = "UPDATE tb_veterinario SET VETERINARIO_NOME = '$nome', VETERINARIO_CRMV = '$crmv', VETERINARIO_DATA_NASC = '$nasc', VETERINARIO_SEXO = '$sexo', VETERINARIO_ESPECIALIDADE = '$spec',
        VETERINARIO_CPF = '$cpf', VETERINARIO_ENDERECO = '$end', VETERINARIO_COMPLEMENTO = '$comp', VETERINARIO_BAIRRO = '$bairro', VETERINARIO_CIDADE = '$cid', 
        VETERINARIO_ESTADO = '$estd', VETERINARIO_CEP = '$cep' WHERE VETERINARIO_ID = '$idVet'";
            $this->db->trans_start();
            $this->db->query($qVet);
            $this->db->trans_complete();
            if ($this->db->trans_status() === false) {
                $route = base_url('exibeVets');
                echo "<script>alert('Erro ao atualizar os dados') window.location.href = '$route';</script>";
                $this->db->trans_rollback();
            } else {
                $this->db->trans_commit();

                $qSenha = "UPDATE tb_usuario SET USUARIO_SENHA = '$senha', USUARIO_EMAIL = '$email' WHERE ID_USUARIO = '$idVet'";
                $this->db->trans_start();
                $this->db->query($qSenha);
                $this->db->trans_complete();
                $route = base_url('exibeVets');

                if ($this->db->trans_status() === false) {
                    echo "<script>alert('ERRO: EMAIL JÁ CADASTRADO!!!') window.location.href = '$route';</script>";
                    $this->db->trans_rollback();
                } else {
                    $this->db->trans_commit();
                    echo "<script>alert('Dados atualizados com sucesso'); window.location.href = '$route';
            </script>";
                }
            }
        } else if (isset($nomeCli)) {
            $idCli = $dados_form['inputIdCli'];
            $inputNomeDaInstituicao = $dados_form['inputNomeDaInstituicao'];
            $inputCNPJ = $dados_form['inputCNPJ'];
            $inputEmailCli = $dados_form['inputEmailCli'];
            $inputSenhaCli = base64_encode($dados_form['inputSenhaCli']);
            $inputResponsavelCli = $dados_form['inputResponsavelCli'];
            $inputDataDeNascimentoCli = $dados_form['inputDataDeNascimentoCli'];
            $RadioSexo = $dados_form['RadioSexo'];
            $inputCPFCli = $dados_form['inputCPFCli'];
            $inputEnderecoCli = $dados_form['inputEnderecoCli'];
            $inputComplementoCli = $dados_form['inputComplementoCli'];
            $inputBairroCli = $dados_form['inputBairroCli'];
            $inputCidadeCli = $dados_form['inputCidadeCli'];
            $inputEstadoCli = $dados_form['inputEstadoCli'];
            $inputCepCli = $dados_form['inputCepCli'];
            $inputCelularCli = $dados_form['inputCelularCli'];
            $inputIdUsuCli = $dados_form['inputIdUsuCli'];

            # CLINICA_ID, CLINICA_NOME_FANTASIA, CLINICA_CNPJ, CLINICA_RESPONSAVEL_NOME, CLINICA_RESPONSAVEL_DATA_DE_NASCIMENTO, CLINICA_RESPONSAVEL_CPF, CLINICA_RESPONSAVEL_SEXO, CLINICA_CONVENIADO, 
            # CLINICA_ENDEREÇO, CLINICA_COMPLEMENTO, CLINICA_BAIRRO, CLINICA_ESTADO, CLINICA_CIDADE, CLINICA_CEP, CLINICA_CELULAR
            $qCli = "UPDATE tb_clinica SET CLINICA_NOME_FANTASIA = '$inputNomeDaInstituicao', CLINICA_CNPJ = '$inputCNPJ', 
            CLINICA_RESPONSAVEL_NOME = '$inputResponsavelCli', CLINICA_RESPONSAVEL_DATA_DE_NASCIMENTO = '$inputDataDeNascimentoCli',
             CLINICA_RESPONSAVEL_CPF = '$inputCPFCli', CLINICA_RESPONSAVEL_SEXO = '$RadioSexo', CLINICA_ENDEREÇO = '$inputEnderecoCli',
              CLINICA_COMPLEMENTO = '$inputComplementoCli', CLINICA_BAIRRO = '$inputBairroCli',
             CLINICA_CIDADE = 'inputCidadeCli', CLINICA_CEP = '$inputCepCli', CLINICA_CELULAR = '$inputCelularCli' WHERE CLINICA_ID = $idCli";
            $this->db->trans_start();
            $this->db->query($qCli);
            $this->db->trans_complete();
            if ($this->db->trans_status() === false) {
                $route = base_url('exibeCli');
                echo "<script>alert('Erro ao atualizar os dados') window.location.href = '$route';</script>";
                $this->db->trans_rollback();
            } else { 
                $this->db->trans_commit();
                $qSenhaCli = "UPDATE tb_usuario SET USUARIO_SENHA = '$inputSenhaCli', USUARIO_EMAIL = '$inputEmailCli' WHERE ID_USUARIO = '$inputIdUsuCli'";
                $this->db->trans_start();
                $this->db->query($qSenhaCli);
                $this->db->trans_complete();
                $route = base_url('exibeCli');
                    echo "<script>alert('Dados atualizados com sucesso'); window.location.href = '$route';
            </script>";
            }

        }
    }

    //Cadastro Vet
    public function insert_vet($idClinica = 0)
    {

        $dados_form = $this->input->post();

        $dados_insert['inputNomeCompleto'] = $dados_form['inputNomeCompleto'];
        $dados_insert['inputCRMV'] = $dados_form['inputCRMV'];
        $dados_insert['inputDataDeNascimento'] = $dados_form['inputDataDeNascimento'];
        $dados_insert['inputEspecialidade'] = $dados_form['inputEspecialidade'];
        $dados_insert['inlineRadioOptions'] = $dados_form['inlineRadioOptions'];
        $dados_insert['inputCPF'] = limpaCPF_CNPJ($dados_form['inputCPF']);
        $dados_insert['inputFixo'] = $dados_form['inputFixo'];
        $dados_insert['inputCel'] = $dados_form['inputCel'];
        $dados_insert['inputEmail'] = $dados_form['inputEmail'];
        $dados_insert['inputSenha'] = base64_encode($dados_form['inputSenha']);
        $dados_insert['inputEndereco'] = $dados_form['inputEndereco'];
        $dados_insert['inputComplemento'] = $dados_form['inputComplemento'];
        $dados_insert['inputBairro'] = $dados_form['inputBairro'];
        $dados_insert['inputCidade'] = $dados_form['inputCidade'];
        $dados_insert['inputEstado'] = $dados_form['inputEstado'];
        $dados_insert['inputCep'] = limpaCPF_CNPJ($dados_form['inputCep']);
        $dados_insert['idClinica'] = $idClinica;

        // Pega CPF inserido e valida se já existe no banco
        $valida_cpf = $this->vet_model->validar_cpf($dados_insert['inputCPF']);

        //Validar se Email está cadastrado
        $valida_mail = $this->usu_model->validar_email($dados_insert['inputEmail']);

        //Caso esteja liberado, o mesmo retorna uma string informando isso.
        if ($valida_cpf == "LIBERADO" && $valida_mail == "LIBERADO") {
            //cadastra Veterinario
            $insere_dados = $this->vet_model->cadastro_vet($dados_insert);
            //Seleciona ID vet
            $veterinario_id = $this->vet_model->pegar_id_vet($dados_insert['inputCPF']);
            //Cadastra Usuario
            $cadastro_usuario = $this->usu_model->cadastro_usu($dados_insert['inputEmail'], $dados_insert['inputSenha'], $veterinario_id, $dados_insert['idClinica'], $dados_insert['idClinica'] == 0 ? 'VET_FREE' : 'VET_PRO');

            // $this->cadastroUsuarioMail($dados_insert['inputEmail'], $dados_form['inputSenha'], $dados_insert['inputNomeCompleto']);
            //Alerta JS com redirecionamento
            if ($idClinica = 0) {
                $rotabase = $rotabase;
            } else {
                $rotabase = base_url('login');
            }
            echo "<script>
			alert('Veterinario cadastrado com sucesso.'); window.location.href = '$rotabase';
			</script>";
        } else {
            $rotabaseCadastro = base_url('cadastro');
            echo "<script>
				alert('Usuario Já cadastrado.'); window.location.href = '$rotabaseCadastro';
			</script>";
        }
    }

    //Cadastro Clinica
    public function insert_clinica()
    {

        $dados_form = $this->input->post();

        $dados_insert['inputNomeDaInstituicao'] = $dados_form['inputNomeDaInstituicao'];
        $dados_insert['inputCNPJ'] = limpaCPF_CNPJ($dados_form['inputCNPJ']);
        $dados_insert['inputNomeTitular'] = $dados_form['inputNomeTitular'];
        $dados_insert['inputDataDeNascimento'] = $dados_form['inputDataDeNascimento'];
        $dados_insert['inlineRadioOptions'] = $dados_form['inlineRadioOptions'];
        $dados_insert['inputCPF'] = limpaCPF_CNPJ($dados_form['inputCPF']);
        $dados_insert['inputEndereco'] = $dados_form['inputEndereco'];
        $dados_insert['inputComplemento'] = $dados_form['inputComplemento'];
        $dados_insert['inputBairro'] = $dados_form['inputBairro'];
        $dados_insert['inputCidade'] = $dados_form['inputCidade'];
        $dados_insert['inputEstado'] = $dados_form['inputEstado'];
        $dados_insert['inputCep'] = limpaCPF_CNPJ($dados_form['inputCep']);
        $dados_insert['inputCelular'] = $dados_form['inputCelular'];
        $dados_insert['inputEmail'] = $dados_form['inputEmail'];
        $dados_insert['inputSenha'] = base64_encode($dados_form['inputSenha']);

        $id_vet = 0;

        // Pega CPF inserido e valida se já existe no banco
        $valida_cnpj = $this->cli_model->validar_cnpj($dados_insert['inputCNPJ']);

        //Validar se Email está cadastrado
        $valida_mail = $this->usu_model->validar_email($dados_insert['inputEmail']);

        //Caso esteja liberado, o mesmo retorna uma string informando isso.
        if ($valida_cnpj == "LIBERADO" && $valida_mail = "LIBERADO") {
            //cadastra Veterinario
            $insere_dados = $this->cli_model->cadastro_clinica($dados_insert);

            //Seleciona ID vet
            $clinica_id = $this->cli_model->pegar_id_cli($dados_insert['inputCNPJ']);

            //Cadastra Usuario
            $cadastro_usuario = $this->usu_model->cadastro_usu($dados_insert['inputEmail'], $dados_insert['inputSenha'], 0, $clinica_id, 'CLI_FREE');

            // $this->cadastroUsuarioMail($dados_insert['inputEmail'], $dados_form['inputSenha'], $dados_insert['inputNomeDaInstituicao']);

            //Alerta JS com redirecionamento
            $rotabase = base_url('login');
            echo "<script>
				alert('Clinica cadastrada com sucesso.'); window.location.href = '$rotabase';
			</script>";
        } else {
            $rotabaseCadastro = base_url('cadastro');
            echo "<script>
				alert('Clinica Já cadastrado.'); window.location.href = '$rotabaseCadastro';
			</script>";
        }
    }

    public function cadastroUsuarioMail($email, $senha, $nome)
    {

        $this->load->library('email');

        $this->email->from('contato@laviezoo.com.br');
        $this->email->to($email);
        $this->email->subject('contato@laviezoo.com.br');
        $message = "Obrigado por se cadastrar no LavieZoo, Seu usuário é $email e sua senha é $senha";
        $this->email->message($message);
        // $from = $this->config->item('contato@laviezoo.com.br','contato@laviezoo.com.br');
        // $to = "paulo041299@gmail.com";
        // $subject = "contato@laviezoo.com.br";


        // // $this->email->set_newline("\r\n");
        // $this->email->from($from);
        // $this->email->to($to);
        // $this->email->subject($subject);
        // $this->email->message($message);

        if ($this->email->send()) {
            echo "<script>
				alert('Obrigado por se cadastrar $nome.');
				</script>";
        } else {
            show_error($this->email->print_debugger());
        }
    }
}
