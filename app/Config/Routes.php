<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Controladores por defecto
$routes->setDefaultController('Auth');

// Rutas
$routes->get('/', 'Auth::index');
$routes->get('/inicio','Auth::index');
$routes->get('/videojuegos','VideojuegosController::index');
$routes->get('/consolas','ConsolasController::index');
$routes->get('/accesorios','AccesoriosController::index');
$routes->get('/digital','DigitalController::index');

// Rutas para autentificacion
$routes->post('/login', 'Auth::login');
$routes->get('/logout','Auth::logout');
$routes->post('/registrar','Auth::registrar');

// Rutas para el carrito de compra
$routes->group('carrito', ['namespace' => 'App\Controllers'], function ($routes) {
   
    $routes->get('/logout','CarritoController::logout');
    $routes->post('/agregarAlCarrito','CarritoController::agregarAlCarrito');
    $routes->post('/actualizar-totales','CarritoController::actualizarTotales');
    $routes->get('/eliminar-del-carrito','CarritoController::eliminarDelCarrito');
});

$routes->group('videojuegos', ['namespace' =>'App\Controllers'], function ($routes){

    $routes->get('logout','VideojuegosController::logout');
    
    });

// // Rutas para Admin
// $routes->group('admin', ['namespace' => 'Admin'], function ($routes) {
//     $routes->get('/','Admin::index');
//     $routes->get('dashboard','Admin::dashboard');
// });

// Para productos
$routes->get('/tablas','Home::index');
$routes->get('/productos','Productos::index');
$routes->get('/productos/nuevo','Productos::nuevo');
$routes->post('/productos/insertar','Productos::insertar');
$routes->get('/productos/eliminados','Productos::eliminados');
$routes->get('/productos/editar/(:num)','Productos::editar/$1');
$routes->get('/productos/eliminar/(:num)','Productos::eliminar/$1');
$routes->get('/productos/reingresar/(:num)','Productos::reingresar/$1');
$routes->post('/productos/actualizar','Productos::actualizar');

// Para categorías
$routes->get('/categorias','Categorias::index');
$routes->get('/categorias/nuevo','Categorias::nuevo');
$routes->post('/categorias/insertar','Categorias::insertar');
$routes->get('/categorias/eliminados','Categorias::eliminados');
$routes->get('/categorias/editar/(:num)','Categorias::editar/$1');
$routes->get('/categorias/eliminar/(:num)','Categorias::eliminar/$1');
$routes->get('/categorias/reingresar/(:num)','Categorias::reingresar/$1');
$routes->post('/categorias/actualizar','Categorias::actualizar');



