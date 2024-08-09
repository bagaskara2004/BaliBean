<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeUser::index');
$routes->get('/about', 'AboutUser::index');
$routes->get('/product', 'ProductUser::index');
$routes->get('/gallery', 'GalleryUser::index');
