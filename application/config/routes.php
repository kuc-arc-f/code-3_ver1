<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$route['default_controller'] = 'welcome';
$route['default_controller'] = 'hello';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//
$route['news/edit/(:any)'] = 'news/edit/$1';
$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
//
$route['tasks/edit/(:any)'] = 'tasks/edit/$1';
$route['tasks/show/(:any)'] = 'tasks/view/$1';
$route['tasks/create'] = 'tasks/create';
$route['tasks/(:any)'] = 'tasks/view/$1';
$route['tasks'] = 'tasks';
$route['api/tasks/create'] = 'tasks/api_create';
$route['api/tasks'] = 'tasks/api_index';
$route['api/tasks/show/(:any)'] = 'tasks/api_view/$1';

//

