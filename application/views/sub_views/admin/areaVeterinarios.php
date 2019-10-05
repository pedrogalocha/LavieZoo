<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="col-sm-12">
  <table class="table table-bordered" id="dataTable" cellspacing="0" style="width=100% !important">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CRMV</th>
        <th>Especialidade</th>
        <th>ACESSO</th>
        <th>-</th>
        <th>-</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CRMV</th>
        <th>Especialidade</th>
        <th>Conveniado</th>
        <th>-</th>
        <th>-</th>
      </tr>
    </tfoot>
    <tbody>
      <?php foreach($vets as $vet){ ?>
      <tr id="vet_<?php print_r($vet->ID_USUARIO) ?>">
        <td id="vetID"><?php print_r($vet->VETERINARIO_ID) ?></td>
        <td><?php print_r($vet->VETERINARIO_NOME) ?></td>
        <td><?php print_r($vet->VETERINARIO_CRMV) ?></td>
        <td><?php print_r($vet->VETERINARIO_ESPECIALIDADE) ?></td>
        <td> <select value="<?php print_r($vet->VETERINARIO_ID) ?>" onchange="atualizaPlano()" class="custom-select"
            id="planoVet">
            <option selected><?php print_r($vet->USUARIO_NIVEL_ACESSO) ?></option>
            <?php if($vet->USUARIO_NIVEL_ACESSO != "VET_FREE"){ ?>
            <option value="VET_FREE">VET_FREE</option>
            <?php }else{ ?>
            <option value="VET_PRO">VET_PRO</option>
            <?php }?>
          </select></td>
        <td><a target="_blank" href="<?php echo base_url('editar/' . $vet->ID_USUARIO) ?>"><button
              class="btn btn-primary">Editar</button></a></td>
        <td><button class="btn btn-danger">Remover</button></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<script>

</script>