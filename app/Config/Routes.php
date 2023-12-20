<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Checkout', 'Checkout::index');
$routes->get('/checkout', 'Checkout::index');
$routes->get('/Dashboard', 'Dashboard::index');
$routes->get('/dashboard', 'Dashboard::index');
