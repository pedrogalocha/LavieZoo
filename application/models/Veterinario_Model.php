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
      $vet_conveniado = "Não";
      $vet_cel = $dados['inputCel'];
      $vet_fixo = $dados['inputFixo'];
      $vet_endereco = $dados['inputEndereco'];
      $vet_complemento = $dados['inputComplemento'];
      $vet_bairro = $dados['inputBairro'];
      $vet_cidade = $dados['inputCidade'];
      $vet_estado = $dados['inputEstado'];
      $vet_cep = $dados['inputCep'];

      $insertVet = "Insert into tb_veterinario values (null,'$vet_nome','$vet_crmv', '$vet_data_nasc', '$vet_sexo','$vet_especialidade' , '$vet_cpf', '$vet_conveniado', null, '$vet_cel', '$vet_fixo', 
      '$vet_endereco', '$vet_complemento', '$vet_bairro', '$vet_cidade', '$vet_estado ', '$vet_cep');";
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

    public function getInfoUsu($email){
      $queryBuscaIdVet = "SELECT v.VETERINARIO_NOME, v.VETERINARIO_CRMV, c.CLINICA_NOME_FANTASIA,                                   c.CLINICA_CNPJ, u.VETERINARIO_ID, u.CLINICA_ID, u.USUARIO_NIVEL_ACESSO,                                  u.ID_USUARIO FROM  tb_usuario u 
                          LEFT JOIN tb_veterinario v ON u.VETERINARIO_ID = v.VETERINARIO_ID
                          LEFT JOIN tb_clinica c ON v.VETERINARIO_ID_CLINICA = c.CLINICA_ID 
                          OR u.CLINICA_ID = c.CLINICA_ID 
                          WHERE USUARIO_EMAIL = '$email';";
      $executaBuscaIdVet = $this->db->query($queryBuscaIdVet);
      $pegaID = $executaBuscaIdVet->row_array();
      if($executaBuscaIdVet->num_rows() > 0){
        return $pegaID;
        print_r($pegaID);
      } else {
        return 0;
      }
    }

    public function getInfoVet($idVet){
      $queryNome = "Select VETERINARIO_NOME from tb_veterinario where VETERINARIO_ID = $idVet;";
      $exeNome = $this->db->query($queryNome);
      $pegaNome = $exeNome->row_array();
      $NomeVet = implode(",", $pegaNome);
      if($exeNome->num_rows() > 0){
         return $NomeVet;
      } else {
        return 0;
      }
    }


}