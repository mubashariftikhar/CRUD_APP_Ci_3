<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['users'] = 'users/index';
$route['users/create'] = 'users/create';
$route['users/store'] = 'users/store';
$route['users/edit/(:num)'] = 'users/edit/$1';
$route['users/update/(:num)'] = 'users/update/$1';
$route['users/delete/(:num)'] = 'users/delete/$1';
