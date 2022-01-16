<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD

$route['default_controller'] = 'home';
=======
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
>>>>>>> acfb4e978c66ee03a948fe2b10ae5f989d18699d
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
