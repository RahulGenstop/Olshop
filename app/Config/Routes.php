<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('admin/dashboard'   , 'Home::index');
$routes->get('/', 'Home::index');


//  Routes untuk registrasi dan login tanpa filter
$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::storeRegistration');
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::attemptLogin');
$routes->get('logout', 'Auth::logout');

//$routes->get('/', 'User::index');
//});
// Router pengguna
$routes->group('pengguna', static function ($routes) {
    $routes->get('', 'Pengguna::index');
    $routes->get('create', 'Pengguna::create');
    $routes->post('store', 'Pengguna::store');
    $routes->get('ubah/(:num)', 'Pengguna::edit/$1');
    $routes->post('update/(:num)', 'Pengguna::update/$1');
    $routes->get('delete/(:num)', 'Pengguna::delete/$1');
});
$routes->group('pesanan', static function ($routes) {
    $routes->get('', 'Pesanan::index');
    $routes->get('create', 'Pesanan::create');
    $routes->post('store', 'Pesanan::store');
    $routes->get('ubah/(:num)', 'Pesanan::edit/$1');
    $routes->post('update/(:num)', 'Pesanan::update/$1');
    $routes->get('delete/(:num)', 'Pesanan::delete/$1');
});
$routes->group('item_pemesanan', static function ($routes) {
    $routes->get('', 'Item_pesanan::index');
    $routes->get('create', 'Item_pesanan::create');
    $routes->post('store', 'Item_pesanan::store');
    $routes->get('ubah/(:num)', 'Item_pesanan::edit/$1');
    $routes->post('update/(:num)', 'Item_pesanan::update/$1');
    $routes->get('delete/(:num)', 'Item_pesanan::delete/$1');
});
$routes->group('produk', static function ($routes) {
    $routes->get('', 'Produk::index');
    $routes->get('create', 'Produk::create');
    $routes->post('store', 'Produk::store');
    $routes->get('ubah/(:num)', 'Produk::edit/$1');
    $routes->post('update/(:num)', 'Produk::update/$1');
    $routes->get('delete/(:num)', 'Produk::delete/$1');
});
$routes->group('pembayaran', static function ($routes) {
    $routes->get('', 'Pembayaran::index');
    $routes->get('create', 'Pembayaran::create');
    $routes->post('store', 'Pembayaran::store');
    $routes->get('ubah/(:num)', 'Pembayaran::edit/$1');
    $routes->post('update/(:num)', 'Pembayaran::update/$1');
    $routes->get('delete/(:num)', 'Pembayaran::delete/$1');
});
$routes->group('kategori', static function ($routes) {
    $routes->get('', 'kategori::index');
    $routes->get('create', 'kategori::create');
    $routes->post('store', 'kategori::store');
    $routes->get('ubah/(:num)', 'kategori::edit/$1');
    $routes->post('update/(:num)', 'kategori::update/$1');
    $routes->get('delete/(:num)', 'kategori::delete/$1');
});
$routes->group('ulasan', static function ($routes) {
    $routes->get('', 'ulasan::index');
    $routes->get('create', 'ulasan::create');
    $routes->post('store', 'ulasan::store');
    $routes->get('ubah/(:num)', 'ulasan::edit/$1');
    $routes->post('update/(:num)', 'ulasan::update/$1');
    $routes->get('delete/(:num)', 'ulasan::delete/$1');
});
