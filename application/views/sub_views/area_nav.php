<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$this->load->view('sub_views/sub_views_components/header');
if($tela != '') $this->load->view('sub_views/pages/'.$tela);
$this->load->view('sub_views/sub_views_components/footer');

?>