<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'ProductController::Kweng11');
$routes->get('/product/(:any)', 'ProductController::product/$1/$2');
$routes->post('/save', 'ProductController::save');