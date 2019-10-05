<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="col-sm-12">
  <table class="table table-bordered" id="dataTable" cellspacing="0">
    <thead>
      <tr>
        <th>Nome</th>
        <th>CRMV</th>
        <th>Especialidade</th>
        <th>Conveniado</th>
        <th>Celular</th>
        <th>-</th>
        <th>-</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>Nome</th>
        <th>CRMV</th>
        <th>Especialidade</th>
        <th>Conveniado</th>
        <th>Celular</th>
        <th>-</th>
        <th>-</th>
      </tr>
    </tfoot>
    <tbody>
      <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td> <select class="custom-select" id="inputGroupSelect01">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select></td>
        <td>2011/04/25</td>
        <td><button class="btn btn-primary">Salvar</button></td>
        <td><button class="btn btn-danger">Remover</button></td>
      </tr>
    </tbody>
  </table>
</div>