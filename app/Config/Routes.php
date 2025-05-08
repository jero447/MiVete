<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/seleccionAlta', 'Alta::seleccionAlta');
$routes->get('/pantallaAmoAlta', 'Alta::pantallaAmoAlta');
$routes->get('/pantallaMascota', 'Alta::pantallaMascotaAlta');
$routes->get('/pantallaVeterinario', 'Alta::pantallaVeterinarioAlta');

$routes->post('/insertarAmo', 'Alta::insertarAmo');
$routes->post('/insertarMascota', 'Alta::insertarMascota');
$routes->post('/insertarVeterinario', 'Alta::insertarVeterinario');
