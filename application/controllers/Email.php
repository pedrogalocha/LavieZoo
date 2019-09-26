<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('email/contact');
    }

    public function cadastroEmailFeed() {
        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $to = $this->input->post('email');
        $subject = $this->input->post('pedrogalocha@gmail.com');
        $message = "Obrigado por se inscrever em nosso feed.";

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo "<script> 
            alert('Obrigado por se inscrever em nosso feed.'); window.location.href = '#';
            </script>";
        } else {
            show_error($this->email->print_debugger());
        }
    }

    public function cadastroUsuarioMail($email, $senha, $nome) {
        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $to = $email;
        $subject = "contato@laviezoo.com.br";
        $message = "Obrigado por se cadastrar no LavieZoo, Seu usuário é $email e sua senha é $senha";

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo "<script> 
            alert('Obrigado por se cadastrar $nome.');
            </script>";
        } else {
            show_error($this->email->print_debugger());
        }
    }
}