<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/ecourse/(:any)/materi', 'user\Users::materi');
// $routes->get('/ecours/(:any)', 'Pages::ecourse/$1');
$routes->get('/ecourse/(:any)', 'user\Users::ecourse/$1');


