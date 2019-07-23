<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario_Model extends CI_Model
{
    public function __construct()
    {
      parent::__construct();
    }

    public function cadastro_usu($email, $senha, $idVet, $idClinica){
      $queryCadastroUsuVet = "Insert Into tb_usuario values (null, $idVet, $idClinica, '$email', '$senha', 'VET_FREE');";
      $this->db->trans_start();
      $this->db->query($queryCadastroUsuVet);
      $this->db->trans_complete();
      if ($this->db->trans_status() === FALSE) {
        return "Query Failed";
      } else {
        return "Query Success";
      }
    }
}