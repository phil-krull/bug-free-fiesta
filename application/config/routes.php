<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "users";
$route['users'] = "users/create";
$route['users/pokes'] = "pokes/show";
$route['pokes/create/(:any)'] = "pokes/create/$1";
$route['sessions'] = "sessions/create";
$route['sessions/destroy'] = "sessions/destroy";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */