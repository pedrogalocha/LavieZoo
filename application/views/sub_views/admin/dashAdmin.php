<?php
defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('sub_views/admin/headerAdmin');
if ($tela != '') {
    $this->load->view('sub_views/admin/' . $tela);
}

$this->load->view('sub_views/admin/footerAdmin');