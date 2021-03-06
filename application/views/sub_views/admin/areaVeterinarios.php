<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="col-sm-12">
  <table class="table table-bordered" id="dataTable" cellspacing="0" style="width=100% !important">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <!-- <th>senha</th> -->
        <th>CRMV</th>
        <th>Especialidade</th>
        <th>ACESSO</th>
        <th>PLANO</th>
        <th>-</th>
        <th>-</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <!-- <th>senha</th> -->
        <th>CRMV</th>
        <th>Especialidade</th>
        <th>ACESSO</th>
        <th>PLANO</th>
        <th>-</th>
        <th>-</th>
      </tr>
    </tfoot>
    <tbody>
      <?php foreach($vets as $vet){ ?>
      <tr id="vet_<?php print_r($vet->ID_USUARIO) ?>">
        <td id="vetID"><?php print_r($vet->VETERINARIO_ID) ?></td>
        <td><?php print_r($vet->VETERINARIO_NOME) ?></td>
        <!-- <td id="vetSenha" ><?php echo base64_decode($vet->USUARIO_SENHA) ?></td> -->
        <td><?php print_r($vet->VETERINARIO_CRMV) ?></td>
        <td><?php print_r($vet->VETERINARIO_ESPECIALIDADE) ?></td>
        <td><?php print_r($vet->USUARIO_NIVEL_ACESSO) ?></td>
        <td><a target="_blank" href="<?php echo base_url('alterar_plano/' . $vet->ID_USUARIO) ?>"><button
              class="btn btn-primary">Alterar o plano</button></a></td>
        <td><a target="_blank" href="<?php echo base_url('editar/' . $vet->ID_USUARIO) ?>"><button type='button'
							class='btn btn-primary' title="Editar">+</button></a></td>
        <td><button type='button' class='btn btn-danger btn-circle' title="Remover">X</button></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<script>

</script>