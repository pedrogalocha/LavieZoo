<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clinica_Model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function validar_cnpj($cnpj)
  {
    $queryBuscaCNPJ = "Select CLINICA_CNPJ from tb_clinica where CLINICA_CNPJ = '$cnpj';";
    $executaBuscaCNPJ = $this->db->query($queryBuscaCNPJ);
    $validaCNPJ = $executaBuscaCNPJ->num_rows();
    if($validaCNPJ > 0 ){
      return "CADASTRADO";
    } else { 
      return "LIBERADO";
    }
  }

  public function cadastro_clinica($dados)
  {
    $cli_nome_inst = $dados['inputNomeDaInstituicao'];
    $cli_cnpj = $dados['inputCNPJ'];
    $cli_nome_titular = $dados['inputNomeTitular'];
    $cli_titular_dtnasc = $dados['inputDataDeNascimento'];
    $cli_titular_sex = $dados['inlineRadioOptions'];
    $cli_titular_cpf = $dados['inputCPF'];
    $cli_conveniado = $dados['inputConveniado'];

    $cli_endereco = $dados['inputEndereco'];
    $cli_complemento = $dados['inputComplemento'];
    $cli_bairro = $dados['inputBairro'];
    $cli_cidade = $dados['inputCidade'];
    $cli_estado = $dados['inputEstado'];
    $cli_cep = $dados['inputCep'];
    $cli_celular = $dados['inputCelular'];

    $insertCli = "Insert into tb_clinica values (null,'$cli_nome_inst', '$cli_cnpj', '$cli_nome_titular','$cli_titular_dtnasc', '$cli_titular_cpf', '$cli_titular_sex' , '$cli_conveniado', '$cli_endereco', '$cli_complemento', '$cli_bairro','$cli_estado' ,'$cli_cidade', '$cli_cep', '$cli_celular');";
    
    $this->db->trans_start();
    $this->db->query($insertCli);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      return redirect(base_url('cadastro_clinica'));
    } else {
      return "Query Success.";
    }
  }

  public function pegar_id_cli($cnpj)
  {
    $queryPegaID = "Select CLINICA_ID from tb_clinica where CLINICA_ID = '$cnpj';";
    $executaPegaID = $this->db->query($queryPegaID);
    $Clinica_Array = $executaPegaID->row_array();
    $ID_CLI = implode(",", $Clinica_Array);
    if($executaPegaID->num_rows() > 0){
      return $ID_CLI;
    } else {
      return 0;
    }
  }
}