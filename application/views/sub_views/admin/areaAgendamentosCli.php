<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="col-sm-12">
  <table class="table table-bordered" id="dataTableAgend" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>Animal</th>
        <th>Perfil Exame</th>
        <th>Tipo de Busca</th>
        <th>Data Coleta</th>
        <th>Faixa de Horario</th>
        <th>Solicitante</th>
        <th>Laudo</th>
        <th>-</th>
        <th>-</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>Animal</th>
        <th>Perfil Exame</th>
        <th>Tipo de Busca</th>
        <th>Data Coleta</th>
        <th>Faixa de Horario</th>
        <th>Solicitante</th>
        <th>Laudo</th>
        <th>-</th>
        <th>-</th>
      </tr>
    </tfoot>
    <tbody>
      <?php foreach($agendamentos as $ag){ ?>
      <tr>

        <td id="ag_<?php print_r($ag->AGENDAMENTO_ID) ?>"><?php print_r($ag->AGENDAMENTO_ID) ?></td>
        <td><?php print_r($ag->ANIMAL_NOME) ?></td>
        <td><?php print_r($ag->ANIMAL_ESPECIE) ?></td>
        <td><?php print_r($ag->DS_PERFIL_EXAME) ?></td>
        <td><?php print_r($ag->TIPO_BUSCA) ?></td>
        <td><?php print_r($ag->DATA_COLETA) ?></td>
        <td><?php print_r($ag->CLINICA_NOME_FANTASIA) ?></td>
        <td>
          <form action="salvarLaudo" method="POST" enctype="multipart/form-data">
            <input type="text" name="agId" style="display:none;" value="<?php print_r($ag->AGENDAMENTO_ID) ?>">
            <input type="file" name="agendamento">
            <input type="submit" value="Salvar" style="margin-top:5px;">
          </form>
        </td>
        <td><button class=" btn btn-danger">Remover</button>
        </td>
        <td><button class="btn btn-primary" data-toggle="tooltip" data-placement="top"
            title="Mais Inforamações">+</button></td>
        
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>