<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/menuPrincipal', 'Home::pantallaMenuPrincipal');
$routes->get('/seleccionAlta', 'Alta::seleccionAlta');
$routes->get('/pantallaAmoAlta', 'Alta::pantallaAmoAlta');
$routes->get('/pantallaMascota', 'Alta::pantallaMascotaAlta');
$routes->get('/pantallaVeterinario', 'Alta::pantallaVeterinarioAlta');
$routes->get('/pantallaParAmoMascota', 'Alta::pantallaParAmoMascotaAlta');
$routes->get('/pantallaEleccionMostrar', 'Mostrar::pantallaMostrar');
$routes->get('/pantallaAmosDeUnaMascotaMostrar', 'Mostrar::pantallaAmoDeUnaMascota');
$routes->get('/pantallaMascotaDeUnAmoMostrar', 'Mostrar::pantallaMascotasDeUnAmo');
$routes->get('/seleccionBaja', 'Baja::seleccionBaja');
$routes->get('/pantallaParAmoMascotaBaja', 'Baja::pantallaParAmoMascotaBaja');
$routes->get('buscarAmoActual/(:num)', 'Baja::obtenerAmoActualDeMascota/$1');
$routes->get('/pantallaVeterinarioBaja', 'Baja::pantallaVeterinarioBaja');
$routes->get('/amosMostrar', 'Mostrar::mostrarAmos');
$routes->get('/mascotasMostrar', 'Mostrar::mostrarMascotas');
$routes->get('/veterinariosMostrar', 'Mostrar::mostrarVeterinarios');
$routes->get('/pantallaEleccionModificar', 'Modificar::pantallaEleccionModificar');
$routes->get('/pantallaEleccionAmoModificar', 'Modificar::pantallaSeleccionAmoModificar');
$routes->post('/pantallaModificarAmo', 'Modificar::pantallaModificarAmo');
$routes->get('/pantallaEleccionMascotasModificar', 'Modificar::pantallaSeleccionMascotaModificar');
$routes->post('/pantallaMascotasModificar', 'Modificar::pantallaModificarMascota');
$routes->get('/pantallaEleccionVeterinarioModificar', 'Modificar::pantallaSeleccionVeterinarioModificar');
$routes->post('/pantallaVeterinarioModificar', 'Modificar::pantallaModificarVeterinario');



$routes->post('/insertarAmo', 'Alta::insertarAmo');
$routes->post('/insertarMascota', 'Alta::insertarMascota');
$routes->post('/insertarVeterinario', 'Alta::insertarVeterinario');
$routes->post('/insertarParAmoMascota', 'Alta::insertarParAmoMascota');
$routes->post('/buscarMascotas', 'Mostrar::buscarMascota');
$routes->post('/buscarAmos', 'Mostrar::buscarAmo');
$routes->post('/darDeBajaRelacionAmoMascota', 'Baja::eliminarParAmoMascota');
$routes->post('/darDeBajaVeterinario', 'Baja::darDeBajaVeterinario');
$routes->post('/modificarAmo', 'Modificar::modificarAmo');
$routes->post('/modificarMascota', 'Modificar::modificarMascota');
$routes->post('/modificarVeterinario', 'Modificar::modificarVeterinario');
