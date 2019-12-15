<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="col-sm-12">
  <table class="table table-bordered" id="dataTableAgend" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>Animal</th>
        <th>Especie</th>
        <th>Raça</th>
        <th>Perfil Exame</th>
        <th>Horario Solicitação</th>
        <th>Tipo de Busca</th>
        <th>Solicitante</th>
        <th>Status</th>
        <th>Laudo</th>
        <th>-</th>
        <th>-</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>Animal</th>
        <th>Raça</th>
        <th>Especie</th>
        <th>Perfil Exame</th>
        <th>Horario Solicitação</th>
        <th>Tipo de Busca</th>
        <th>Solicitante</th>
        <th>Status</th>
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
        <td><?php print_r($ag->ANIMAL_RACA) ?></td>
        <td><?php print_r($ag->ANIMAL_ESPECIE) ?></td>
        <td><?php print_r($ag->DS_PERFIL_EXAME) ?></td>
        <td><?php print_r($ag->HORARIO_SOLICITACAO) ?></td>
        <td><?php print_r($ag->TIPO_BUSCA) ?></td>
        <td><?php 
        if($ag->VETERINARIO_NOME != null)
        {
          print_r($ag->VETERINARIO_NOME);
        }
        else if($ag->CLINICA_NOME_FANTASIA != null){
          print_r($ag->CLINICA_NOME_FANTASIA);
        }
          ?></td>
        <td><?php print_r($ag->STATUS) ?></td>
        <td>
          <form action="salvarLaudo" method="POST" enctype="multipart/form-data">
            <input type="text" name="agId" style="display:none;" value="<?php print_r($ag->AGENDAMENTO_ID) ?>">
            <input type="file" name="agendamento">
            <input type="submit" value="Salvar" style="margin-top:5px;">
          </form>
        </td>
        <td>
        <a href="#" onclick="window.open('<?= base_url('ver_agendamento/' . $ag->AGENDAMENTO_ID)  ?>', 'Atualizar', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=NO, TOP=10, LEFT=10, WIDTH=1200, HEIGHT=800');"><button type='button' class='btn btn-primary'>+</button></a> 
        </td>
        <td>
        <a href="<?= base_url('del_agendamento/' . $ag->AGENDAMENTO_ID) ?>"> <button type='button' class='btn btn-danger'>Remover</button></a> 
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>