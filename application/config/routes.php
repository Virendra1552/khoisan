<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//login page route
$route['login'] = 'LoginController/index';

//register page route
$route['register'] = 'LoginController/signup';

//registration route
$route['storevalue'] = 'LoginController/regInfo';

//login route
$route['loginvalue'] = 'LoginController/logvalue';

// application/config/routes.php

$route['record'] = 'LoginController/recorddata';

$route['pannel'] = 'LoginController/userpanel';

$route['userprofile'] = 'LoginController/userprofile';


