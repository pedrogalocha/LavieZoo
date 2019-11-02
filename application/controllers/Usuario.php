<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_Model', 'permissao');
        $this->load->model('Veterinario_Model', 'vetModel');
        $this->load->model('Usuario_Model', 'usuModel');
    }

    public function index()
    {
        $this->load->view('pages/sobre');
    }

    public function editar($id)
    {
        $rotabaseDash = base_url('Dash');
        $login = $this->session->userdata('USUARIO_EMAIL');
        $id_sessao = $this->session->userdata('USUARIO_ID');
        $conta = $this->session->userdata('TIPO_CONTA');
        $dados['permissao'] = $this->session->userdata('USUARIO_NIVEL_ACESSO');
        if ($id_sessao == $id || $conta == "ADMIN") {
            $dados['usu'] = $this->usuModel->getInfoTotalUsu($id);
            $dados = array(
                'tela' => 'configUsu',
                'permissao' => $conta,
                'userInfo' => $dados['usu'],
                'sessao' => $this->session->userdata('USUARIO_NIVEL_ACESSO'),
            );
            $this->load->view('sub_views/area_nav', $dados);
            //$this->load->view('sub_views/pages/dashboard');
        } else {

        print_r($id);
        }
    }
    public function alterar_plano($id){

        $pl = $this->usuModel->getUsuPlano($id); 

        $route = base_url('admin');
            echo "<script>alert('Erro ao alterar o plano do veterinario!') window.location.href = '$route';</script>";
        
        if(in_array("VET_PRO", $pl)){
            $plano = 'VET_FREE';
        }
        else if(in_array("VET_FREE", $pl)){
            $plano = 'VET_PRO';
        }

        $qUser = "UPDATE tb_usuario SET USUARIO_NIVEL_ACESSO = '$plano' WHERE ID_USUARIO = $id";
        $this->db->trans_start();
        $this->db->query($qUser);
        
        if ($this->db->trans_status() === false) {
            $route = base_url('admin');
            echo "<script>alert('Erro ao alterar o plano do veterinario!') window.location.href = '$route';</script>";
            $this->db->trans_rollback();
        } else {
            $route = base_url('admin');
            echo "<script>alert('Plano atualizado!') window.location.href = '$route';</script>";
            $this->db->trans_commit();
        }
    }
    public function alterar_plano_cli($id){
        $pl = $this->usuModel->getUsuPlano($id); 

    
        
        if(in_array("CLI_PRO", $pl)){
            $plano = 'CLI_FREE';
        }
        else if(in_array("CLI_FREE", $pl)){
            $plano = 'CLI_PRO';
        }

        $qUser = "UPDATE tb_usuario SET USUARIO_NIVEL_ACESSO = '$plano' WHERE ID_USUARIO = $id";
        $this->db->trans_start();
        $this->db->query($qUser);
        
        if ($this->db->trans_status() === false) {
            $route = base_url('admin');
            echo "<script>alert('Erro ao alterar o plano do veterinario!') window.location.href = '$route';</script>";
            $this->db->trans_rollback();
        } else {
            $route = base_url('admin');
            echo "<script>alert('Plano atualizado!') window.location.href = '$route';</script>";
            $this->db->trans_commit();
        }
    }
}