<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Genel :
$route['default_controller'] = 'home';
$route['admin'] = 'admin';
$route['admin/(:any)'] = 'admin/$1';
$route['admin/(:any)/(:any)'] = 'admin/$1/$2';

// Sistemsel :
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Dil ayrımı için :
# $route['(:any)'] = $route['default_controller'];
# $route['(:any)/(:any)'] = '$2';
# $route['(:any)/(:any)/(:any)'] = '$2/goster/$3';

// Standart kullanım :
# $route['bot'] = 'bot';
# $route['(:any)'] = 'bot/goster/$1';