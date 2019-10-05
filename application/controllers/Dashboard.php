<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_Model', 'permissao');
        $this->load->model('Veterinario_Model', 'vetModel');
        $this->load->model('Clinica_Model', 'cliModel');
        $this->load->model('Agendamento_Model', 'agenModel');
        $rotabaseLogin = base_url('Login');
        $rotabaseAdmin = base_url('Admin');
        $rotabaseDash = base_url('Dash');
        $this->load->library('upload');
    }

    public function index()
    {
        $login = $this->session->userdata('USUARIO_EMAIL');
        $id = $this->session->userdata('ID_USUARIO');
        $conta = $this->session->userdata('TIPO_CONTA');
        $dados['permissao'] = $this->session->userdata('USUARIO_NIVEL_ACESSO');

        if ($dados['permissao'] != null) {
            $dados['usu'] = $this->vetModel->getInfoUsu($login);
            $agendamentos = $this->agenModel->getAgendamentos($dados['usu']['ID_USUARIO']);
            $vet_associados = false;
            if ($dados['permissao'] == "CLI_PRO") {
                $vet_associados = $this->vetModel->getVetsCli($dados['usu']['CLINICA_ID']);
            }

            $dados = array(
                'tela' => 'dashboard',
                'permissao' => $conta,
                'userInfo' => $dados['usu'],
                'sessao' => $this->session->userdata('USUARIO_NIVEL_ACESSO'),
                'agendamentos' => $agendamentos,
                'vetAssociados' => $vet_associados,
            );
            $this->load->view('sub_views/area_nav', $dados);
            //$this->load->view('sub_views/pages/dashboard');
        } else {
            echo "<script>
            alert('Você não tem permissão para acessar esta area'); window.location.href = '$rotabaseLogin';
          </script>";
        }
    }

    public function admin()
    {
        $login = $this->session->userdata('USUARIO_EMAIL');
        $dados['permissao'] = $this->session->userdata('USUARIO_NIVEL_ACESSO');

        if ($dados['permissao'] == "ADMIN") {

            $dados = array(
                'tela' => 'areaPrincipal',
                'permissao' => $dados['permissao'],
                'sessao' => $this->session->userdata('USUARIO_NIVEL_ACESSO'),
            );
            $this->load->view('sub_views/admin/dashAdmin', $dados);
            //$this->load->view('sub_views/pages/dashboard');
        } else {
            echo "<script>
            alert('Você não tem permissão para acessar esta area'); window.location.href = '$rotabaseLogin';
          </script>";
        }
    }

    public function exibeVets(){
        $login = $this->session->userdata('USUARIO_EMAIL');
        $dados['permissao'] = $this->session->userdata('USUARIO_NIVEL_ACESSO');

        if ($dados['permissao'] == "ADMIN") {
            $dados['vets'] = $this->vetModel->getVets();

            $dados = array(
                'tela' => 'areaVeterinarios',
                'permissao' => $dados['permissao'],
                'sessao' => $this->session->userdata('USUARIO_NIVEL_ACESSO'),
                'vets' => $dados['vets']
            );
            $this->load->view('sub_views/admin/dashAdmin', $dados);
            //$this->load->view('sub_views/pages/dashboard');
        } else {
            echo "<script>
            alert('Você não tem permissão para acessar esta area'); window.location.href = '$rotabaseLogin';
          </script>";
        }
    }

    public function exibeCli(){
        $login = $this->session->userdata('USUARIO_EMAIL');
        $dados['permissao'] = $this->session->userdata('USUARIO_NIVEL_ACESSO');

        if ($dados['permissao'] == "ADMIN") {
            $dados['clinicas'] = $this->cliModel->getClinicas();

            $dados = array(
                'tela' => 'areaClinica',
                'permissao' => $dados['permissao'],
                'sessao' => $this->session->userdata('USUARIO_NIVEL_ACESSO'),
                'clinicas' => $dados['clinicas']
            );
            $this->load->view('sub_views/admin/dashAdmin', $dados);
            //$this->load->view('sub_views/pages/dashboard');
        } else {
            echo "<script>
            alert('Você não tem permissão para acessar esta area'); window.location.href = '$rotabaseLogin';
          </script>";
        }
    }

    public function exibeAgendamentosCli(){
        $login = $this->session->userdata('USUARIO_EMAIL');
        $dados['permissao'] = $this->session->userdata('USUARIO_NIVEL_ACESSO');

        if ($dados['permissao'] == "ADMIN") {
            $dados['agendamentos'] = $this->agenModel->getAgendamentosCli();

            $dados = array(
                'tela' => 'agendamentoCli',
                'permissao' => $dados['permissao'],
                'sessao' => $this->session->userdata('USUARIO_NIVEL_ACESSO'),
                'agendamentos' => $dados['agendamentos']
            );
            $this->load->view('sub_views/admin/dashAdmin', $dados);
            //$this->load->view('sub_views/pages/dashboard');
        } else {
            echo "<script>
            alert('Você não tem permissão para acessar esta area'); window.location.href = '$rotabaseLogin';
          </script>";
        }
    }

    public function exibeAgendamentosVet(){
        $login = $this->session->userdata('USUARIO_EMAIL');
        $dados['permissao'] = $this->session->userdata('USUARIO_NIVEL_ACESSO');

        if ($dados['permissao'] == "ADMIN") {
            $dados['agendamentos'] = $this->agenModel->getAgendamentosVet();

            $dados = array(
                'tela' => 'areaAgendamentoVet',
                'permissao' => $dados['permissao'],
                'sessao' => $this->session->userdata('USUARIO_NIVEL_ACESSO'),
                'agendamentos' => $dados['agendamentos']
            );
            $this->load->view('sub_views/admin/dashAdmin', $dados);
            //$this->load->view('sub_views/pages/dashboard');
        } else {
            echo "<script>
            alert('Você não tem permissão para acessar esta area'); window.location.href = '$rotabaseLogin';
          </script>";
        }
    }
}