<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('artikel', 'ArtikelController::index');
$routes->get('artikel/(:any)', 'ArtikelController::detail/$1');
$routes->get('artikel1', 'Home::artikel1');
$routes->get('artikel2', 'Home::artikel2');
$routes->get('artikel3', 'Home::artikel3');
$routes->get('artikel4', 'Home::artikel4');
$routes->get('kontak', 'Home::kontak');
$routes->get('produk', 'ProdukController::index');
$routes->get('produk/(:any)', 'ProdukController::detail/$1');
$routes->get('produk1', 'Home::produk1');
$routes->get('produk2', 'Home::produk2');
$routes->get('produk3', 'Home::produk3');
$routes->get('tentang', 'Home::tentang');
$routes->get('aktivitas', 'AktivitasController::index');
$routes->get('aktivitas/(:any)', 'AktivitasController::detail/$1');
$routes->get('aktivitas1', 'Home::aktivitas1');
$routes->get('aktivitas2', 'Home::aktivitas2');
$routes->get('aktivitas3', 'Home::aktivitas3');
$routes->get('aktivitas4', 'Home::aktivitas4');
$routes->get('artikel5', 'Home::artikel5');