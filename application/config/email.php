<?php defined('BASEPATH') or exit('No direct script access allowed');

$config = array(
    
    
    // 'protocol' => 'smtp',
    // 'smtp_host' => 'smtp.sendgrid.net',
    // 'smtp_user' => 'Qep8rFGNT_ixVSnLATzoGA',
    // 'smtp_pass' => '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',
    // 'crlf' => "\r\n",
    // 'newline' => "\r\n",
    // 'smtp_port' => 587,
    // 'smtp_timeout'=> 15
    'protocol' =>'sendmail',
    'smtp_host' => 'localhost',
    'smtp_user' => 'contato@laviezoo.com.br',
    'smtp_pass' => '631542aW1',
    'smtp_port' => 25,
    

);

    

// $config = array(
//     'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
//     'smtp_host' => 'smtp.example.com', 
//     'smtp_port' => 465,
//     'smtp_user' => 'no-reply@example.com
// 	',
//     'smtp_pass' => '12345!',
//     'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
//     'mailtype' => 'text', //plaintext 'text' mails or 'html'
//     'smtp_timeout' => '4', //in seconds
//     'charset' => 'iso-8859-1',
//     'wordwrap' => TRUE
// );