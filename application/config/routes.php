<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['admin'] = 'admin/dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['gioi-thieu'] 			= "introduce";


$route['english/(:any)'] 		= "speaking_english/index/$1";
$route['lien-he'] 				= "contact";
$route['tin-tuc/(:num)-(:any)'] = "news/detail/$1";
$route['tin-tuc'] 				= "news/index";
$route['thu-vien-hinh-anh'] 	= "images/index";
$route['tim-kiem'] 				= "search/index";

$route['member/index'] 			= "member/profile";