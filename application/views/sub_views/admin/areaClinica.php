<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="col-sm-12">
  <table class="table table-bordered" id="dataTableCli" cellspacing="0" style="width=100% !important">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome Fantasia</th>
        <th>CNPJ</th>
        <th>Responsável</th>
        <th>Acesso</th>
        <th>-</th>
        <th>-</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>Nome Fantasia</th>
        <th>CNPJ</th>
        <th>Responsável</th>
        <th>Acesso</th>
        <th>-</th>
        <th>-</th>
      </tr>
    </tfoot>
    <tbody>
      <?php foreach($clinicas as $cli){ ?>
      <tr>
        <td id="cliID"><?php print_r($cli->ID_USUARIO) ?></td>
        <td><?php print_r($cli->CLINICA_NOME_FANTASIA) ?></td>
        <td><?php print_r($cli->CLINICA_CNPJ) ?></td>
        <td><?php print_r($cli->CLINICA_RESPONSAVEL_NOME) ?></td>
        <td> <select value="<?php print_r($cli->USUARIO_NIVEL_ACESSO) ?>" onchange="atualizaPlanoCli()"
            class="custom-select" id="planoCli">
            <option selected><?php print_r($cli->USUARIO_NIVEL_ACESSO) ?></option>
            <?php if($cli->USUARIO_NIVEL_ACESSO != "CLI_FREE"){ ?>
            <option value="CLI_FREE">CLI_FREE</option>
            <?php }else{ ?>
            <option value="CLI_PRO">CLI_PRO</option>
            <?php }?>
          </select></td>
        <td><a target="_blank" href="<?php echo base_url('editar/' . $cli->ID_USUARIO) ?>"><button
              class="btn btn-primary">Editar</button></a></td>
        <td><button class="btn btn-danger">Remover</button></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<script>

</script>