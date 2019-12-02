<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|    example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|    https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|    $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|    $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|    $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:    my-controller/index    -> my_controller/index
|        my-controller/my-method    -> my_controller/my_method
 */
$route['default_controller'] = 'Principal';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
$route['about'] = 'Sobre';

//cadastro
$route['cadastro_clinica'] = 'Cadastro/cadastro_clinica';
$route['cadastro_vet'] = 'Cadastro/cadastro_vet';
$route['cadastro_menu'] = 'Cadastro';
$route['salvarLaudo']  = 'Agendamento/SubirLaudo';

//Editar
$route['editar/(:any)'] = 'Usuario/editar/$1';
$route['alterar_plano/(:any)'] = 'Usuario/alterar_plano/$1';
$route['alterar_plano_cli/(:any)'] = 'Usuario/alterar_plano_cli/$1';

// $route['atualizaPlano'] = 'Usuario/AlterarPlano';

$route['atualizaPlanoCli'] = 'Usuario/AlterarPlanoCli';
//cadastro usuario vet ou clinica
$route['insert_vet'] = 'Cadastro/insert_vet';
$route['insert_clinica'] = 'Cadastro/insert_clinica';
$route['insert_exame'] = 'Cadastro/insert_exame';
$route['insert_vet_cli/(:any)'] = "Cadastro/insert_vet/$1";
//atualiza o veterinario
$route['update_vet'] = 'Cadastro/update_vet';


//Tela Login
$route['login'] = 'Login';
//Iniciar Login
$route['post_login'] = 'Login/logar';

//Dashboard
$route['Dash'] = 'Dashboard';
//DashAdmin
$route['Admin'] = 'Dashboard/admin';
$route['exibeVets'] ='Dashboard/exibeVets';
$route['exibeCli'] = 'Dashboard/exibeCli';
$route['exibeAgendVets'] = 'Dashboard/exibeAgendamentosVet';
$route['exibeAgendCli'] = 'Dashboard/exibeAgendamentosCli';
$route['exibeAgendTipo'] = 'Dashboard/exibeAgendametosTipo';
//CLINICA
$route['cadastroVetCli/(:any)'] = 'Cadastro/cadastro_vet_clinica/$1';
//Agendamento
$route['agendamento_form'] = 'Agendamento';
$route['faixaHorario'] = 'Agendamento/agendamento';
$route['cadastrarAgendamento'] = 'Agendamento/cadastrarAgendamento';
$route['ver_agendamento/(:any)'] = 'Agendamento/ver_agendamento/$1';
$route['del_agendamento/(:any)'] = 'Agendamento/del_agendamento/$1';
$route['update_agendamento'] = 'Agendamento/update_agendamento';


//email
$route['email'] = 'Email/cadastroEmailFeed';

//sair
$route['sair'] = 'Login/logout';