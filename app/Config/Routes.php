<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/ecourse/(:num)/payment', 'user\Users::payment/$1');
$routes->get('/ecourse/(:any)/materi', 'user\Users::materi/$1');
$routes->get('/listecourse', 'user\Users::listecourse');
// $routes->get('/ecours/(:any)', 'Pages::ecourse/$1');
$routes->get('/ecourse/(:any)', 'user\Users::ecourse/$1');
$routes->get('/login', 'Login::index');
$routes->post('/login/authenticate', 'Login::authenticate');
