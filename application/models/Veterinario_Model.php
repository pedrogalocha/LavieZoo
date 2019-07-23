<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class VETERINARIO_MODEL extends CI_Model
{
    public function __construct()
    {
      parent::__construct();
      
    }
    
    public function cadastro_vet($dados)
    {
      $vet_nome = $dados['inputNomeCompleto'];
      $vet_crmv = $dados['inputCRMV'];
      $vet_data_nasc = $dados['inputDataDeNascimento'];
      $vet_especialidade = $dados['inputEspecialidade'];
      $vet_sexo = $dados['inlineRadioOptions'];
      $vet_cpf = $dados['inputCPF'];
      $vet_conveniado = $dados['inputConveniado'];

      $insertVet = "Insert into tb_veterinario values (null,'$vet_nome','$vet_crmv', '$vet_data_nasc', '$vet_sexo','$vet_especialidade' , '$vet_cpf', '$vet_conveniado', null, '11964924233');";

      $this->db->trans_start();
      $this->db->query($insertVet);
      $this->db->trans_complete();
      if ($this->db->trans_status() === FALSE) {
        return "Query Failed";
      } else {
        return "Query Success.";
      }
    }

    public function pegar_id_vet($CPF)
    {
      $queryPegaID = "Select VETERINARIO_ID from tb_veterinario where VETERINARIO_CPF = '$CPF';";
      $executaPegaID = $this->db->query($queryPegaID);
      $Vetereniario_Array = $executaPegaID->row_array();
      $ID_VET = implode(",", $Vetereniario_Array);
      if($executaPegaID->num_rows() > 0){
        return $ID_VET;
      } else {
        return 0;
      }
    }

    public function validar_cpf($cpf)
    {
      $queryBuscaCPF = "Select VETERINARIO_CPF from tb_veterinario where VETERINARIO_CPF = '$cpf';";
      $executaBuscaCPF = $this->db->query($queryBuscaCPF);
      $validaCPF = $executaBuscaCPF->num_rows();
      if($validaCPF > 0 ){
        return "CADASTRADO";
      } else { 
        return "LIBERADO";
      }
    }
}