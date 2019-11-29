<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Usuario_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function cadastro_usu($email, $senha, $idVet, $idClinica, $tipo)
    {
        $queryCadastroUsu = "INSERT INTO tb_usuario VALUES (null, $idVet, $idClinica, '$email', '$senha', '$tipo');";
        $this->db->trans_start();
        $this->db->query($queryCadastroUsu);
        $this->db->trans_complete();
        if ($this->db->trans_status() === false) {
            return "Query Failed";
        } else {
            return "Query Success";
        }
    }
    public function cadastro_exame($desc, $idUser){
        $qExame = "INSERT INTO tb_perfil_exame_usuario VALUES (null, '$desc', $idUser);";
        $this->db->trans_start();
        $this->db->query($qExame);
        $this->db->trans_complete();
        if ($this->db->trans_status() === false) {
            return "Query Failed";
        } else {
            return "Query Success";
        }
    }
    

    public function validar_email($vet_mail)
    {
        $queryBuscaMail = "Select USUARIO_EMAIL from tb_usuario where USUARIO_EMAIL = '$vet_mail';";
        $executaBuscaMail = $this->db->query($queryBuscaMail);
        $validaMail = $executaBuscaMail->num_rows();
        if ($validaMail > 0) {
            return "CADASTRADO";
        } else {
            return "LIBERADO";
        }
    }

    public function getInfoTotalUsu($id)
    {
        $queryBuscaIdVet = "SELECT v.VETERINARIO_NOME, v.VETERINARIO_CRMV, c.CLINICA_NOME_FANTASIA,
                                  c.CLINICA_CNPJ, u.VETERINARIO_ID, u.CLINICA_ID, u.USUARIO_NIVEL_ACESSO,
                                  u.ID_USUARIO, v.VETERINARIO_DATA_NASC, v.VETERINARIO_ESPECIALIDADE, v.VETERINARIO_CPF,
                                  v.VETERINARIO_SEXO, v.VETERINARIO_ENDERECO, v.VETERINARIO_COMPLEMENTO, v.VETERINARIO_BAIRRO, v.VETERINARIO_CIDADE,
                                  v.VETERINARIO_ESTADO, v.VETERINARIO_CEP, v.VETERINARIO_CELULAR, c.CLINICA_RESPONSAVEL_CPF, c.CLINICA_RESPONSAVEL_NOME, c.CLINICA_RESPONSAVEL_DATA_DE_NASCIMENTO,
                                  c.CLINICA_RESPONSAVEL_SEXO, c.CLINICA_ENDEREÇO, c.CLINICA_COMPLEMENTO, c.CLINICA_BAIRRO, c.CLINICA_CIDADE, 
                                  c.CLINICA_ESTADO, c.CLINICA_CEP, c.CLINICA_CELULAR, u.USUARIO_SENHA, u.USUARIO_EMAIL
                                  FROM  tb_usuario u
                                  LEFT JOIN tb_veterinario v ON u.VETERINARIO_ID = v.VETERINARIO_ID
                                  LEFT JOIN tb_clinica c ON v.VETERINARIO_ID_CLINICA = c.CLINICA_ID
                                  OR u.CLINICA_ID = c.CLINICA_ID
                                  WHERE u.ID_USUARIO = $id ;";

        $executaBuscaIdVet = $this->db->query($queryBuscaIdVet);
        $pegaID = $executaBuscaIdVet->row_array();
        if ($executaBuscaIdVet->num_rows() > 0) {
            return $pegaID; 
            print_r($pegaID);
        } else {
            return 0;
        }
    }



    public function getUsuId($email)
    {
        $qIdUsu = " SELECT ID_USUARIO FROM tb_usuario WHERE USUARIO_EMAIL = '$email'";
        $eIdUsu = $this->db->query($qIdUsu);
        $rIdUsu = $eIdUsu->row_array();
        if ($eIdUsu->num_rows() > 0) {
            return $rIdUsu;
        } else {
            return 0;
        }
    }
    public function getUsuPlano($id)
    {
        $qPlanoUsu = " SELECT USUARIO_NIVEL_ACESSO FROM tb_usuario WHERE ID_USUARIO = '$id'";
        $eIdUsu = $this->db->query($qPlanoUsu);
        $plano = $eIdUsu->row_array();
        if ($eIdUsu->num_rows() > 0) {
            return $plano;
        } else {
            return 0;
        }
    }
    

}