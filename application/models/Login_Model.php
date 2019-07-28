<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_Model extends CI_Model
{
    public function __construct()
    {
      parent::__construct();
    }
    
    public function getPermissao($login){
      print_r($login);
      $this->db->where('USUARIO_EMAIL', $login);
      $query = $this->db->get('tb_usuario', 1);
      if($query->num_rows() == 1){
        $row = $query->row();
        return $row->USUARIO_NIVEL_ACESSO;
      }
    }

    public function verifica($login = '', $senha = ''){
      if( !$login && !$senha){
        return false;
      } else {
        $this->db->where(array('USUARIO_EMAIL'=>$login, 'USUARIO_SENHA'=>$senha));
        $res = $this->db->get('tb_usuario');
        print_r($res->num_rows());
        if ($res-> num_rows() == 1){
          return true;
        }else{
          return false;
        }
      }
    }
}