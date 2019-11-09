<?php defined('BASEPATH') or exit('No direct script access allowed');

$config['useragent'] = 'CodeIgniter';
$config['protocol'] = 'smtp';
//$config['mailpath'] = '/usr/sbin/sendmail';
$config['smtp_host'] = 'ssl://a2plcpnl0842.prod.iad2.secureserver.net';
$config['smtp_user'] = 'contato@laviezoo.com.br';
$config['smtp_pass'] = 'facepr13';
$config['smtp_port'] = 465; 
$config['smtp_timeout'] = 5;
$config['wordwrap'] = TRUE;
$config['wrapchars'] = 76;
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['validate'] = FALSE;
$config['priority'] = 3;
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";
$config['bcc_batch_mode'] = FALSE;
$config['bcc_batch_size'] = 200;
    
    // 'protocol' => 'smtp',
    // 'smtp_host' => 'smtp.sendgrid.net',
    // 'smtp_user' => 'Qep8rFGNT_ixVSnLATzoGA',
    // 'smtp_pass' => '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',
    // 'crlf' => "\r\n",
    // 'newline' => "\r\n",
    // 'smtp_port' => 587,
    // 'smtp_timeout'=> 15
    // 'protocol' =>'smtp',
    // 'smtp_host' => 'mail.laviezoo.com.br',
    // 'smtp_user' => 'contato@laviezoo.com.br',
    // 'smtp_pass' => '631542aW1',
    // 'smtp_port' => 587,
    // 'crlf' => "\r\n",
    // 'newline' => "\r\n"


    

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