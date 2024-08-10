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


$routes->post('/adduser', 'HomeUser::addUser');
