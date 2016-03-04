<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "Users";
$route['users'] = "Users/create";
$route['users/pokes'] = "Pokes/show";
$route['pokes/create/(:any)'] = "Pokes/create/$1";
$route['sessions'] = "Sessions/create";
$route['sessions/destroy'] = "Sessions/destroy";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */