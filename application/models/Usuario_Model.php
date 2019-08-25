<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario_Model extends CI_Model
{
    public function __construct()
    {
      parent::__construct();
    }

    public function cadastro_usu($email, $senha, $idVet, $idClinica, $tipo){
      $queryCadastroUsu = "Insert Into tb_usuario values (null, $idVet, $idClinica, '$email', '$senha', '$tipo');";
      $this->db->trans_start();
      $this->db->query($queryCadastroUsu);
      $this->db->trans_complete();
      if ($this->db->trans_status() === FALSE) {
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
      if($validaMail > 0 ){
        return "CADASTRADO";
      } else { 
        return "LIBERADO";
      }
    }
}