<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('artikel1', 'Home::artikel1');
$routes->get('kontak', 'Home::kontak');
$routes->get('produk', 'Home::produk');
$routes->get('produk1', 'Home::produk1');
$routes->get('tentang', 'Home::tentang');
$routes->get('aktivitas', 'Home::aktivitas');
$routes->get('aktivitas1', 'Home::aktivitas1');
