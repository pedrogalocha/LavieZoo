<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Agendamento_Model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getTipoAgendamento(){
    $qAgendamento = "SELECT PERFIL_EXAME_ID,DS_PERFIL_EXAME, TIPO_PERFIL_EXAME FROM tb_perfil_exame";
    $eAgendamento = $this->db->query($qAgendamento);
    $aAgendamento = $eAgendamento->result();
    if($eAgendamento->num_rows() > 0){
      return $aAgendamento;
    } else {
      return 0;
    }
  }
}