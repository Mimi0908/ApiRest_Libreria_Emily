<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/eliminar/(:any)', 'Home::eliminar/$1');
$routes->get('/obtenerNombre/(:any)', 'Home::obtenerNombre/$1');
$routes->get('/crear', 'Home::crearIndex');
$routes->post('/crearLibro', 'Home::crear');
$routes->post('/actualizar', 'Home::actualizar');
