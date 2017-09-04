<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['admin'] = 'admin/dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['luyen-noi-tieng-anh-nhom-4-5-nguoi'] 	= "Speaking_English/english_45_member";
$route['luyen-noi-tieng-anh-nhom-8-nguoi'] 		= "Speaking_English/english_8_member";
$route['luyen-thi-tieng-anh-speaking-writing']  = "Speaking_English/ielts_speaking_writting";
$route['luyen-thi-tieng-anh-speaking-writing']  = "Speaking_English/ielts_speaking_writting";
$route['luyen-thi-tieng-anh-reading-listening'] = "Speaking_English/ielts_reading_listening";
$route['luyen-thi-tieng-anh-4-ki-nang-ielts'] 	= "Speaking_English/ielts_4_skills";
$route['luyen-noi-tieng-anh-tai-cong-ty'] 		= "Speaking_English/speaking_company";
$route['thi-thu-ielts'] 		                = "Speaking_English/ielts_testing";