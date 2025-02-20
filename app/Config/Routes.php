<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'cHome::index');
$routes->get('/about', 'cAbout::index');
