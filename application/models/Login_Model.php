<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_Model extends CI_Model
{
    public function __construct()
    {
      parent::__construct();
    }
    
    public function getPermissao($login){
      $this->db->where('USUARIO_EMAIL', $login);
      $query = $this->db->get('tb_usuario', 1);
      if($query->num_rows() == 1){
        $row = $query->row();
        return $query->row_array();
      }
    }

    public function verifica($login = '', $senha = ''){
      if( !$login && !$senha){
        return false;
      } else {
        $this->db->where(array('USUARIO_EMAIL'=>$login, 'USUARIO_SENHA'=>$senha));
        $res = $this->db->get('tb_usuario');
        if ($res-> num_rows() == 1){
          return true;
        }else{
          return false;
        }
      }
    }
}