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

      print_r("NOME: " . $vet_nome);
      print_r("CRMV: " . $vet_crmv);
      print_r("DATA NASCIMENTO: " . $vet_data_nasc);
      print_r("ESPECIALIDADE: " . $vet_especialidade);
      print_r("SEXO: " . $vet_sexo);
      print_r("CPF: " . $vet_cpf);
      print_r("CONVENIADO: " . $vet_conveniado);

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

    public function cadastro_usuario()
    {

    }

    public function valdiar_cpf($cpf)
    {
      $queryBuscaCPF = "Select VETERINARIO_CPF from tb_veterinario where VETERINARIO_CPF = '$cpf';";
      $CPF = $this->db->query($queryBuscaCPF);
      $validaCPF = $CPF->num_rows();

      if($validaCPF > 0 ){
        return "CADASTRADO";
      } else { 
        return "LIBERADO";
      }

    }
}