<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// main routes
$routes->get('/main/predict', 'MainController::index');
$routes->get('/main/predict', 'MainController::index');

// side routes
$routes->get('/side', 'SideController::index');
$routes->get('/side/count', 'SideController::index');

