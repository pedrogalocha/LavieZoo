<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$this->load->view('cadastros/cadastro_components/header');
if($tela != '') $this->load->view('cadastros/cadastro_pages/'.$tela);
$this->load->view('cadastros/cadastro_components/footer');

?>