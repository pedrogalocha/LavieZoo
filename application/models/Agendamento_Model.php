<?php

use phpbb\cache\driver\redis;

defined('BASEPATH') or exit('No direct script access allowed');
class Agendamento_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Agendamento_Model', 'agendamento');
    }

    public function getTipoAgendamento()
    {
        $qAgendamento = "SELECT PERFIL_EXAME_ID,DS_PERFIL_EXAME, TIPO_PERFIL_EXAME FROM tb_perfil_exame";
        $eAgendamento = $this->db->query($qAgendamento);
        $aAgendamento = $eAgendamento->result();
        if ($eAgendamento->num_rows() > 0) {
            return $aAgendamento;
        } else {
            return 0;
        }
    }

    public function getExameUsuario($id)
    {
        $qExameUsu = "SELECT PERFIL_EXAME_ID, DS_PERFIL_EXAME, ID_EXAME_USU FROM tb_perfil_exame WHERE ID_EXAME_USU = $id";
        $dadosExame = $this->db->query($qExameUsu);
        $exameResul = $dadosExame->result();
        if ($dadosExame->num_rows() > 0) {
            return $exameResul;
        } else {
            return 0;
        }
    }

    public function getFaixaHorario($data)
    {
        $qValida = "SELECT FH.DS_FAIXA_HORARIO FROM tb_agendamento a
    RIGHT JOIN tb_faixa_horario FH ON a.FAIXA_HORARIO_ID = FH.FAIXA_HORARIO_ID
    WHERE a.DATA_COLETA = '$data'";
        $eValida = $this->db->query($qValida);

        if ($eValida->num_rows() > 0) {
            $arValida = $eValida->row_array();
            $horarioFaixa = implode(",", $arValida);
            $qFaixa = "SELECT FAIXA_HORARIO_ID, DS_FAIXA_HORARIO FROM tb_faixa_horario
      WHERE DS_FAIXA_HORARIO <> '$horarioFaixa';";
        } else {
            $qFaixa = "SELECT FAIXA_HORARIO_ID, DS_FAIXA_HORARIO FROM tb_faixa_horario;";
        }
        $eFaixa = $this->db->query($qFaixa);
        $rFaixa = $eFaixa->result();

        if ($eValida->num_rows() > 0) {
            echo json_encode($rFaixa, JSON_UNESCAPED_UNICODE);
        } else {
            echo json_encode($rFaixa, JSON_UNESCAPED_UNICODE);
            return 0;
        }
    }

    public function atualizarAgendamento($dadosAt)
    {
        $inputNomeAnimal = $dadosAt['inputNomeAnimal'];
        $inputIdadeAnimal = $dadosAt['inputIdadeAnimal'];
        $inputMesesAnimal = $dadosAt['inputMesesAnimal'];
        $radioRaca = $dadosAt['radioRaca'];
        $radioSexo = $dadosAt['radioSexo'];
        $inputEspecie = $dadosAt['inputEspecie'];
        $inputNomeProprietario = $dadosAt['inputNomeProprietario'];
        $radioExame = $dadosAt['radioExame'];
        // $radioBusca = $dadosAt['radioBusca'];
        // $inputBusca = $dadosAt['inputBusca'];
        // $DataColeta = $dadosAt['DataColeta'];
        // $inputColeta = $dadosAt['inputColeta'];
        // $inputFaixaHorario = $dadosAt['inputFaixaHorario'];
        // $inputBusca = $dadosAt['inputBusca'];
        // $inputColeta = $dadosAt['inputColeta'];
        // $inputFaixaHorario = $dadosAt['inputFaixaHorario'];
        // $inputEndereco = $dadosAt['inputEndereco'];
        // $inputComplemento = $dadosAt['inputComplemento'];
        // $inputBairro = $dadosAt['inputBairro'];
        // $inputCidade = $dadosAt['inputCidade'];
        // $inputEstado = $dadosAt['inputEstado'];
        // $inputCep = $dadosAt['inputCep'];
        // $inputCelular = $dadosAt['inputCelular'];
        $selectStatus = $dadosAt['selectStatus'];
        $inputDesc = $dadosAt['inputDesc'];
        $idAgen = $dadosAt['idUsu'];


        $qAtualizar = "UPDATE tb_agendamento AS age
    INNER JOIN tb_animal AS ani ON (age.ANIMAL_ID = ani.ANIMAL_ID) 
    SET ani.ANIMAL_NOME = '$inputNomeAnimal'
    , ani.ANIMAL_IDADE = '$inputIdadeAnimal', ani.ANIMAL_MESES = '$inputMesesAnimal', ani.ANIMAL_RACA = '$radioRaca', 
    ani.ANIMAL_SEXO = '$radioSexo', ani.ANIMAL_ESPECIE = '$inputEspecie', ani.ANIMAL_PROPRIETARIO = '$inputNomeProprietario', age.PERFIL_EXAME_ID = '$radioExame', 
    age.STATUS = '$selectStatus', age.DESC_STATUS = '$inputDesc'
    WHERE age.AGENDAMENTO_ID = $idAgen";

        $this->db->trans_start();
        $this->db->query($qAtualizar);
        $this->db->trans_complete();
        if ($this->db->trans_status() === false) {
            // $route = base_url('exibeAgendVets');
            echo "<script>alert('Erro ao atualizar os dados')</script>";
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
            // $route = base_url('exibeAgendVets');
            echo "<script>alert('Dados atualizados com sucesso');
            // </script>";
        }
    }

    public function cadastraAgendamento($dados_insert)
    {

        $inputNomeAnimal = $dados_insert['inputNomeAnimal'];
        $inputIdadeAnimal = $dados_insert['inputIdadeAnimal'];
        $inputMesesAnimal = $dados_insert['inputMesesAnimal'];
        $inlineRadioOptions = $dados_insert['inlineRadioOptions'];
        $inputRaça = $dados_insert['inputRaça'];
        $inputNomeProprietario = $dados_insert['inputNomeProprietario'];
        $inlineRadioOptions2 = $dados_insert['inlineRadioOptions2'];
        $inputOutrosExames = $dados_insert['inputOutrosExames'];
        $inlineRadioOptions3 = $dados_insert['inlineRadioOptions3'];
        $inputColeta = $dados_insert['inputColeta'];
        $inputFaixaHorario = $dados_insert['inputFaixaHorario'];
        $inputEndereco = $dados_insert['inputEndereco'];
        $inputComplemento = $dados_insert['inputComplemento'];
        $inputBairro = $dados_insert['inputBairro'];
        $inputCidade = $dados_insert['inputCidade'];
        $inputEstado = $dados_insert['inputEstado'];
        $inputCep = $dados_insert['inputCep'];
        $inputCelular = $dados_insert['inputCelular'];
        $idUsu = $dados_insert['idUsu'];
        $sexo = $dados_insert['sexo'];
        $inputBusca = $dados_insert['inputBusca'];
        $inputHorario = $dados_insert['inputHorario'];


        $cadAnimal = $this->agendamento->cadastroAnimal($inputNomeAnimal, $inputIdadeAnimal, $inputRaça, $inlineRadioOptions, $inputNomeProprietario, $inputMesesAnimal, $sexo, $inputHorario);
        $this->db->query($cadAnimal);

        $idAnimal = $this->agendamento->getIdAnimal($inputNomeAnimal);
        $idAni = $this->db->query($idAnimal)->row()->ANIMAL_ID;

        $qPrincipal = "INSERT INTO tb_agendamento (ANIMAL_ID,
    PERFIL_EXAME_ID,
    TIPO_BUSCA,
    DATA_COLETA,
    FAIXA_HORARIO_ID,
    USUARIO_ID,
    ENDERECO,
    COMPLEMENTO,
    BAIRRO,
    CIDADE,
    ESTADO,
    CEP,
    CELULAR,
    STATUS,
    DATA_BUSCA_CLINICA,
    HORARIO_SOLICITACAO
    ) values
    ($idAni,
     $inlineRadioOptions2,
    '$inlineRadioOptions3',
    '$inputColeta',
     $inputFaixaHorario,
     $idUsu,
    '$inputEndereco',
    '$inputComplemento',
    '$inputBairro',
    '$inputCidade',
    '$inputEstado',
    '$inputCep',
    '$inputCelular',
    'EM EXECUÇÃO',
    '$inputBusca',
    '$inputHorario'
    )";

        $this->db->trans_start();
        $this->db->query($qPrincipal);
        if ($this->db->trans_status() === false) {
            echo "<script>alert('erro ao cadastrar o agendamento')</script>";
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            echo "<script>alert('Agendamento efetuado com sucesso.')</script>";
            return true;
        }
    }

    public function cadastroAnimal($nome, $idade, $especie, $raca, $proprietario, $meses, $sexoA)
    {
        $qPrincipal = "INSERT INTO tb_animal
    (ANIMAL_NOME,
    ANIMAL_IDADE,
    ANIMAL_RACA,
    ANIMAL_ESPECIE,
    ANIMAL_PROPRIETARIO,
    ANIMAL_MESES,
    ANIMAL_SEXO
    )
    VALUES
    (
    '$nome',
     $idade,
    '$raca',
    '$especie',
    '$proprietario',
    '$meses',
    '$sexoA' 
    );";
        // print_r($qPrincipal);
        return $qPrincipal;
    }

    public function getIdAnimal($nome)
    {
        $qprincipal = "SELECT ANIMAL_ID FROM tb_animal WHERE ANIMAL_NOME = '$nome' order by animal_id desc;";

        return $qprincipal;
    }

    public function getAgendamentos($idUsu)
    {
        $qAgendamento = "SELECT pa.PERFIL_EXAME_ID, pa.DS_PERFIL_EXAME, a.ANIMAL_NOME, ag.STATUS, ag.AGENDAMENTO_OUTROS_EXAMES, a.ANIMAL_PROPRIETARIO, ag.AGENDAMENTO_LAUDO, ag.AGENDAMENTO_ID FROM tb_agendamento  ag
    INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
    INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
    WHERE ag.USUARIO_ID = $idUsu; ";
        $eAgendamento = $this->db->query($qAgendamento);
        $aAgendamento = $eAgendamento->result();
        if ($eAgendamento->num_rows() > 0) {
            return $aAgendamento;
        } else {
            return null;
        }
    }

    public function getAgendamentosVet()
    {
        $qAgendamento = "SELECT ag.AGENDAMENTO_ID ,pa.DS_PERFIL_EXAME, a.ANIMAL_SEXO, a.ANIMAL_NOME, a.ANIMAL_RACA,ag.STATUS, 
        ag.AGENDAMENTO_OUTROS_EXAMES, a.ANIMAL_PROPRIETARIO,ag.CEP, ag.ENDERECO,  a.ANIMAL_ESPECIE, ag.TIPO_BUSCA, ag.DATA_COLETA
        FROM tb_agendamento  ag
        INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
        INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
        INNER JOIN tb_usuario u on ag.USUARIO_ID = u.ID_USUARIO
        ";
        // WHERE ag.STATUS = 'SOLICITADO'";
        $eAgendamento = $this->db->query($qAgendamento);
        $aAgendamento = $eAgendamento->result();
        if ($eAgendamento->num_rows() > 0) {
            return $aAgendamento;
        } else {
            return null;
        }
    }

    public function getBuscaEmClinica()
    {
        $qClinica = "SELECT ag.AGENDAMENTO_ID,v.VETERINARIO_NOME ,pa.DS_PERFIL_EXAME, a.ANIMAL_NOME,a.ANIMAL_RACA, ag.STATUS, ag.HORARIO_SOLICITACAO,
        ag.AGENDAMENTO_OUTROS_EXAMES, a.ANIMAL_PROPRIETARIO, ag.CEP, ag.ENDERECO,c.CLINICA_NOME_FANTASIA, a.ANIMAL_ESPECIE, ag.TIPO_BUSCA, ag.DATA_COLETA
        FROM tb_agendamento  ag
        INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
        INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
        INNER JOIN tb_usuario u on ag.USUARIO_ID = u.ID_USUARIO
        LEFT OUTER JOIN tb_clinica c on u.CLINICA_ID = c.CLINICA_ID
        LEFT OUTER JOIN tb_veterinario v on u.VETERINARIO_ID = v.VETERINARIO_ID
        WHERE ag.TIPO_BUSCA = 'Busca em Clinica'
        AND ag.STATUS = 'EM EXECUÇÃO';";
        $eClinica = $this->db->query($qClinica);
        $aClinica = $eClinica->result();
        if ($eClinica->num_rows() > 0) {
            return $aClinica;
        } else {
            return null;
        }
    }

    public function getColetaEmClinica()
    {
        $qClinica = "SELECT ag.AGENDAMENTO_ID,v.VETERINARIO_NOME ,pa.DS_PERFIL_EXAME, a.ANIMAL_NOME,a.ANIMAL_RACA, ag.STATUS, ag.HORARIO_SOLICITACAO,
        ag.AGENDAMENTO_OUTROS_EXAMES, a.ANIMAL_PROPRIETARIO, ag.CEP, ag.ENDERECO,c.CLINICA_NOME_FANTASIA, a.ANIMAL_ESPECIE, ag.TIPO_BUSCA, ag.DATA_COLETA, f.DS_FAIXA_HORARIO
        FROM tb_agendamento ag
        INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
        INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
        INNER JOIN tb_usuario u on ag.USUARIO_ID = u.ID_USUARIO
        INNER JOIN tb_faixa_horario f on ag.FAIXA_HORARIO_ID = f.FAIXA_HORARIO_ID
        LEFT OUTER JOIN tb_clinica c on u.CLINICA_ID = c.CLINICA_ID
        LEFT OUTER JOIN tb_veterinario v on u.VETERINARIO_ID = v.VETERINARIO_ID    
        WHERE ag.TIPO_BUSCA = 'Coleta em Clinica'
        AND ag.STATUS = 'EM EXECUÇÃO';";
        $eClinica = $this->db->query($qClinica);
        $aClinica = $eClinica->result();
        if ($eClinica->num_rows() > 0) {
            return $aClinica;
        } else {
            return null;
        }
    }

    public function getBuscaDomiciliar()
    {
        $qClinica = "SELECT ag.AGENDAMENTO_ID,v.VETERINARIO_NOME ,a.ANIMAL_RACA,pa.DS_PERFIL_EXAME, a.ANIMAL_NOME, ag.STATUS, ag.HORARIO_SOLICITACAO,
        ag.AGENDAMENTO_OUTROS_EXAMES, a.ANIMAL_PROPRIETARIO, ag.CEP, ag.ENDERECO,c.CLINICA_NOME_FANTASIA, a.ANIMAL_ESPECIE, ag.TIPO_BUSCA,
        ag.DATA_COLETA, ag.CIDADE, ag.ESTADO, ag.BAIRRO
        FROM tb_agendamento  ag
        INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
        INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
        INNER JOIN tb_usuario u on ag.USUARIO_ID = u.ID_USUARIO
        LEFT OUTER JOIN tb_clinica c on u.CLINICA_ID = c.CLINICA_ID
        LEFT OUTER JOIN tb_veterinario v on u.VETERINARIO_ID = v.VETERINARIO_ID
        
        WHERE ag.TIPO_BUSCA = 'Busca Domiciliar'
        AND ag.STATUS = 'EM EXECUÇÃO';";
        $eClinica = $this->db->query($qClinica);
        $aClinica = $eClinica->result();
        if ($eClinica->num_rows() > 0) {
            return $aClinica;
        } else {
            return null;
        }
    }

    public function getAgendamentosCli()
    {
        $qAgendamento = "SELECT ag.AGENDAMENTO_ID ,pa.DS_PERFIL_EXAME, a.ANIMAL_NOME,a.ANIMAL_RACA, ag.STATUS, HORARIO_SOLICITACAO,
        ag.AGENDAMENTO_OUTROS_EXAMES, a.ANIMAL_PROPRIETARIO, ag.CEP, ag.ENDERECO,c.CLINICA_NOME_FANTASIA, a.ANIMAL_ESPECIE, ag.TIPO_BUSCA, ag.DATA_COLETA
        FROM tb_agendamento  ag
        INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
        INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
        INNER JOIN tb_usuario u on ag.USUARIO_ID = u.ID_USUARIO
        INNER JOIN tb_clinica c on u.CLINICA_ID = c.CLINICA_ID 
        -- WHERE ag.STATUS = 'SOLICITADO'";
        $eAgendamento = $this->db->query($qAgendamento);
        $aAgendamento = $eAgendamento->result();
        if ($eAgendamento->num_rows() > 0) {
            return $aAgendamento;
        } else {
            return null;
        }
    }

    public function atualizaLaudo($path, $idAgendamento)
    {
        $qAgendamento = "UPDATE tb_agendamento SET AGENDAMENTO_LAUDO = '$path', STATUS = 'DEMANDADO' WHERE AGENDAMENTO_ID = $idAgendamento";
        $this->db->trans_start();
        $this->db->query($qAgendamento);
        if ($this->db->trans_status() === false) {
            echo "<script>alert('Houve um erro ao associar o laudo.')</script>";
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
    }
    public function getInfoTotalAciona($id)
    {
        $queryBuscaAc = "SELECT ag.AGENDAMENTO_ID,v.VETERINARIO_NOME ,pa.DS_PERFIL_EXAME, a.ANIMAL_NOME, ag.STATUS, a.ANIMAL_IDADE, a.ANIMAL_MESES, a.ANIMAL_RACA, a.ANIMAL_SEXO,
        ag.AGENDAMENTO_OUTROS_EXAMES, a.ANIMAL_PROPRIETARIO, ag.CEP, ag.ENDERECO,c.CLINICA_NOME_FANTASIA, a.ANIMAL_ESPECIE, ag.TIPO_BUSCA, ag.DATA_COLETA, ag.DESC_STATUS
        FROM tb_agendamento  ag
        INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
        INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
        INNER JOIN tb_usuario u on ag.USUARIO_ID = u.ID_USUARIO
        LEFT OUTER JOIN tb_clinica c on u.CLINICA_ID = c.CLINICA_ID
        LEFT OUTER JOIN tb_veterinario v on u.VETERINARIO_ID = v.VETERINARIO_ID
        --  
        WHERE ag.AGENDAMENTO_ID = '$id';";

        // $queryBuscaAc = "SELECT endereco, complemento, bairro, cidade, estado, cep, celular FROM tb_agendamento WHERE AGENDAMENTO_ID = $id;";

        $execBuscaAciona = $this->db->query($queryBuscaAc);
        $dadosAc = $execBuscaAciona->row_array();
        if ($execBuscaAciona->num_rows() > 0) {
            return $dadosAc;
        } else {
            return 0;
        }
    }
    public function getInfoNomeFantasia($cli_id)
    {
        $queryBuscaAc = "SELECT c.CLINICA_NOME_FANTASIA
        FROM tb_agendamento  ag
        INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
        INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
        INNER JOIN tb_usuario u on ag.USUARIO_ID = u.ID_USUARIO
        INNER JOIN tb_clinica c on u.CLINICA_ID = c.CLINICA_ID
        --  
        WHERE c.CLINICA_ID = '$cli_id';";

        // $queryBuscaAc = "SELECT endereco, complemento, bairro, cidade, estado, cep, celular FROM tb_agendamento WHERE AGENDAMENTO_ID = $id;";

        $execBuscaAciona = $this->db->query($queryBuscaAc);
        $dadosAc = $execBuscaAciona->row_array();
        if ($execBuscaAciona->num_rows() > 0) {
            return $dadosAc;
        } else {
            return 0;
        }
    }
    public function getInfoNomeVeterinario($id)
    {
        $queryBuscaAc = "SELECT v.VETERINARIO_NOME
        FROM tb_agendamento  ag
        INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
        INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
        INNER JOIN tb_usuario u on ag.USUARIO_ID = u.ID_USUARIO
        INNER JOIN tb_veterinario v on u.VETERINARIO_ID = v.VETERINARIO_ID
        --  
        WHERE ag.AGENDAMENTO_ID = '$id';";

        // $queryBuscaAc = "SELECT endereco, complemento, bairro, cidade, estado, cep, celular FROM tb_agendamento WHERE AGENDAMENTO_ID = $id;";

        $execBuscaAciona = $this->db->query($queryBuscaAc);
        $dadosAc = $execBuscaAciona->row_array();
        if ($execBuscaAciona->num_rows() > 0) {
            return $dadosAc;
        } else {
            return 0;
        }
    }
    public function getInfoClinicaVeterinario($id)
    {
        $queryBuscaAc = "SELECT u.CLINICA_ID
        FROM tb_agendamento  ag
        INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
        INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
        INNER JOIN tb_usuario u on ag.USUARIO_ID = u.ID_USUARIO
        INNER JOIN tb_veterinario v on u.VETERINARIO_ID = v.VETERINARIO_ID
        --  
        WHERE ag.AGENDAMENTO_ID = '$id';";

        // $queryBuscaAc = "SELECT endereco, complemento, bairro, cidade, estado, cep, celular FROM tb_agendamento WHERE AGENDAMENTO_ID = $id;";

        $execBuscaAciona = $this->db->query($queryBuscaAc);
        $dadosAc = $execBuscaAciona->row_array();
        if ($execBuscaAciona->num_rows() > 0) {
            return $dadosAc;
        } else {
            return 0;
        }
    }


    public function buscaEmClinicaDm()
    {
        $qClinica = "SELECT ag.AGENDAMENTO_ID,v.VETERINARIO_NOME ,pa.DS_PERFIL_EXAME, a.ANIMAL_NOME, ag.STATUS, a.ANIMAL_RACA, ag.HORARIO_SOLICITACAO,
        ag.AGENDAMENTO_OUTROS_EXAMES, a.ANIMAL_PROPRIETARIO, ag.CEP, ag.ENDERECO,c.CLINICA_NOME_FANTASIA, a.ANIMAL_ESPECIE, ag.TIPO_BUSCA, ag.DATA_COLETA
        FROM tb_agendamento  ag
        INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
        INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
        INNER JOIN tb_usuario u on ag.USUARIO_ID = u.ID_USUARIO
        LEFT OUTER JOIN tb_clinica c on u.CLINICA_ID = c.CLINICA_ID
        LEFT OUTER JOIN tb_veterinario v on u.VETERINARIO_ID = v.VETERINARIO_ID
        
        WHERE ag.TIPO_BUSCA = 'Busca em Clinica'
        AND ag.STATUS = 'DEMANDADO';";
        $eClinica = $this->db->query($qClinica);
        $aClinica = $eClinica->result();
        if ($eClinica->num_rows() > 0) {
            return $aClinica;
        } else {
            return null;
        }
    }
    public function coletaEmClinicaDm()
    {
        $qClinica = "SELECT ag.AGENDAMENTO_ID,v.VETERINARIO_NOME ,pa.DS_PERFIL_EXAME, a.ANIMAL_NOME,a.ANIMAL_RACA, ag.STATUS, HORARIO_SOLICITACAO,
        ag.AGENDAMENTO_OUTROS_EXAMES, a.ANIMAL_PROPRIETARIO, ag.CEP, ag.ENDERECO,c.CLINICA_NOME_FANTASIA, a.ANIMAL_ESPECIE, ag.TIPO_BUSCA, ag.DATA_COLETA, f.DS_FAIXA_HORARIO
        FROM tb_agendamento ag
        INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
        INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
        INNER JOIN tb_usuario u on ag.USUARIO_ID = u.ID_USUARIO
        INNER JOIN tb_faixa_horario f on ag.FAIXA_HORARIO_ID = f.FAIXA_HORARIO_ID
        LEFT OUTER JOIN tb_clinica c on u.CLINICA_ID = c.CLINICA_ID
        LEFT OUTER JOIN tb_veterinario v on u.VETERINARIO_ID = v.VETERINARIO_ID    
        WHERE ag.TIPO_BUSCA = 'Coleta em Clinica'
        AND ag.STATUS = 'DEMANDADO';";
        $eClinica = $this->db->query($qClinica);
        $aClinica = $eClinica->result();
        if ($eClinica->num_rows() > 0) {
            return $aClinica;
        } else {
            return null;
        }
    }
    public function coletaDomiciliarDm()
    {
        $qClinica = "SELECT ag.AGENDAMENTO_ID,v.VETERINARIO_NOME ,a.ANIMAL_RACA,pa.DS_PERFIL_EXAME, a.ANIMAL_NOME, ag.STATUS, ag.HORARIO_SOLICITACAO,
        ag.AGENDAMENTO_OUTROS_EXAMES, a.ANIMAL_PROPRIETARIO, ag.CEP, ag.ENDERECO,c.CLINICA_NOME_FANTASIA, a.ANIMAL_ESPECIE, ag.TIPO_BUSCA,
        ag.DATA_COLETA, ag.CIDADE, ag.ESTADO, ag.BAIRRO
        FROM tb_agendamento  ag
        INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
        INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
        INNER JOIN tb_usuario u on ag.USUARIO_ID = u.ID_USUARIO
        LEFT OUTER JOIN tb_clinica c on u.CLINICA_ID = c.CLINICA_ID
        LEFT OUTER JOIN tb_veterinario v on u.VETERINARIO_ID = v.VETERINARIO_ID
        
        WHERE ag.TIPO_BUSCA = 'Busca Domiciliar'
        AND ag.STATUS = 'DEMANDADO';";
        $eClinica = $this->db->query($qClinica);
        $aClinica = $eClinica->result();
        if ($eClinica->num_rows() > 0) {
            return $aClinica;
        } else {
            return null;
        }
    }

    public function buscaEmClinicaCld()
    {
        $qClinica = "SELECT ag.AGENDAMENTO_ID,v.VETERINARIO_NOME ,a.ANIMAL_RACA,pa.DS_PERFIL_EXAME, a.ANIMAL_NOME, ag.STATUS, ag.HORARIO_SOLICITACAO,
        ag.AGENDAMENTO_OUTROS_EXAMES, a.ANIMAL_PROPRIETARIO, ag.CEP, ag.ENDERECO,c.CLINICA_NOME_FANTASIA, a.ANIMAL_ESPECIE, ag.TIPO_BUSCA,
        ag.DATA_COLETA, ag.CIDADE, ag.ESTADO, ag.BAIRRO, ag.DESC_STATUS
        FROM tb_agendamento  ag
        INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
        INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
        INNER JOIN tb_usuario u on ag.USUARIO_ID = u.ID_USUARIO
        LEFT OUTER JOIN tb_clinica c on u.CLINICA_ID = c.CLINICA_ID
        LEFT OUTER JOIN tb_veterinario v on u.VETERINARIO_ID = v.VETERINARIO_ID
        
        WHERE ag.TIPO_BUSCA = 'Busca em Clinica'
        AND ag.STATUS = 'CANCELADO';";
        $eClinica = $this->db->query($qClinica);
        $aClinica = $eClinica->result();
        if ($eClinica->num_rows() > 0) {
            return $aClinica;
        } else {
            return null;
        }
    }
    public function coletaEmClinicaCld()
    {
        $qClinica = "SELECT ag.AGENDAMENTO_ID,v.VETERINARIO_NOME ,a.ANIMAL_RACA,pa.DS_PERFIL_EXAME, a.ANIMAL_NOME, ag.STATUS, ag.HORARIO_SOLICITACAO,
        ag.AGENDAMENTO_OUTROS_EXAMES, a.ANIMAL_PROPRIETARIO, ag.CEP, ag.ENDERECO,c.CLINICA_NOME_FANTASIA, a.ANIMAL_ESPECIE, ag.TIPO_BUSCA,
        ag.DATA_COLETA, ag.CIDADE, ag.ESTADO, ag.BAIRRO, ag.DESC_STATUS
        FROM tb_agendamento  ag
        INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
        INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
        INNER JOIN tb_usuario u on ag.USUARIO_ID = u.ID_USUARIO
        LEFT OUTER JOIN tb_clinica c on u.CLINICA_ID = c.CLINICA_ID
        LEFT OUTER JOIN tb_veterinario v on u.VETERINARIO_ID = v.VETERINARIO_ID
        
        WHERE ag.TIPO_BUSCA = 'Coleta em Clinica'
        AND ag.STATUS = 'CANCELADO';";
        $eClinica = $this->db->query($qClinica);
        $aClinica = $eClinica->result();
        if ($eClinica->num_rows() > 0) {
            return $aClinica;
        } else {
            return null;
        }
    }
    public function coletaDomiciliarCld()
    {
        $qClinica = "SELECT ag.AGENDAMENTO_ID,v.VETERINARIO_NOME ,a.ANIMAL_RACA,pa.DS_PERFIL_EXAME, a.ANIMAL_NOME, ag.STATUS, ag.HORARIO_SOLICITACAO,
        ag.AGENDAMENTO_OUTROS_EXAMES, a.ANIMAL_PROPRIETARIO, ag.CEP, ag.ENDERECO,c.CLINICA_NOME_FANTASIA, a.ANIMAL_ESPECIE, ag.TIPO_BUSCA,
        ag.DATA_COLETA, ag.CIDADE, ag.ESTADO, ag.BAIRRO, ag.DESC_STATUS
        FROM tb_agendamento  ag
        INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
        INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
        INNER JOIN tb_usuario u on ag.USUARIO_ID = u.ID_USUARIO
        LEFT OUTER JOIN tb_clinica c on u.CLINICA_ID = c.CLINICA_ID
        LEFT OUTER JOIN tb_veterinario v on u.VETERINARIO_ID = v.VETERINARIO_ID

        WHERE ag.TIPO_BUSCA = 'Busca Domiciliar'
        AND ag.STATUS = 'CANCELADO';";
        $eClinica = $this->db->query($qClinica);
        $aClinica = $eClinica->result();
        if ($eClinica->num_rows() > 0) {
            return $aClinica;
        } else {
            return null;
        }
    }
    // public function getAgendamentoPdf()
    // {
    //     $query = "SELECT ag.AGENDAMENTO_ID,v.VETERINARIO_NOME ,pa.DS_PERFIL_EXAME, a.ANIMAL_NOME, ag.STATUS, a.ANIMAL_RACA, ag.HORARIO_SOLICITACAO,
    //     ag.AGENDAMENTO_OUTROS_EXAMES, a.ANIMAL_PROPRIETARIO, ag.CEP, ag.ENDERECO,c.CLINICA_NOME_FANTASIA, a.ANIMAL_ESPECIE, ag.TIPO_BUSCA, ag.DATA_COLETA
    //     FROM tb_agendamento  ag
    //     INNER JOIN tb_animal a ON ag.ANIMAL_ID = a.ANIMAL_ID
    //     INNER JOIN tb_perfil_exame pa on ag.PERFIL_EXAME_ID = pa.PERFIL_EXAME_ID
    //     INNER JOIN tb_usuario u on ag.USUARIO_ID = u.ID_USUARIO
    //     LEFT OUTER JOIN tb_clinica c on u.CLINICA_ID = c.CLINICA_ID
    //     LEFT OUTER JOIN tb_veterinario v on u.VETERINARIO_ID = v.VETERINARIO_ID
    //     WHERE ag.AGENDAMENTO_ID = 64;";

    //     $exec = $this->db->query($query);
    //     $array = $exec->result();
    //     if($exec->num_rows() > 0){
    //         return $array;
    //     }
    //     else{
    //         return null;
    //     }
    // }
}
