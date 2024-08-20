<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeUser::index');
$routes->get('/about', 'AboutUser::index');
$routes->get('/product', 'ProductUser::index');
$routes->get('/product/(:num)', 'Detail::product/$1');
$routes->get('/gallery', 'GalleryUser::index');
$routes->get('/promotion/(:num)', 'Detail::promotion/$1');
$routes->get('/login', 'Auth::index');
$routes->post('/login', 'Auth::login');

$routes->get('/dashboard','PageAdmin::index');
$routes->get('/category','PageAdmin::categoryProduct');
$routes->get('/formCategory','PageAdmin::formCategory');
$routes->get('/formCategory/(:num)','PageAdmin::formCategory/$1');
$routes->get('/logout','Auth::logout');
$routes->post('/addCategory','CategoryProduct::addCategory');
$routes->post('/editCategory','CategoryProduct::editCategory');
$routes->get('/deleteCategory/(:num)','CategoryProduct::deleteCategory/$1');


$routes->post('/adduser', 'HomeUser::addUser');
