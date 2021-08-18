<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['careers'] = 'Page/careers';

$route['service'] = 'Page/service';
$route['apply'] = 'Page/apply';
$route['air'] = 'Page/air';
$route['electrical'] = 'Page/electrical';
$route['contact_us'] = 'Page/contact';
$route['our_team'] = 'Page/team';
$route['blog'] = 'Page/blog';
$route['faq'] = 'Page/faq';
$route['plumbing'] = 'Page/plumbing';
$route['about'] = 'Page/about';
$route['payment'] = 'Page/payment';
$route['default_controller'] = 'Page/index';
$route['404_override'] = 'Page/error';
$route['translate_uri_dashes'] = FALSE;
///Adminisrtator BAckend


$route['admin/bitcoins'] = 'Admin/bitcoins_report';

$route['admin/member'] = 'Admin/add_service';
$route['admin/users_transfer'] = 'Admin/users_transfer';
$route['admin/report'] = 'Admin/contact_report';
$route['admin/request_fund'] = 'Admin/request_fund';
$route['admin/user_account'] = 'Admin/user_account';
$route['admin/dashboard'] = 'Admin/index';
$route['admin/add_marketing'] = 'Admin/add_marketing';
