<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Guest');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Routes declaration
// Auth
$routes->get('/login', 'Auth::index');
$routes->get('/logout', 'Auth::logout');
$routes->post('/login/auth', 'Auth::login');

// Guest Routes
$routes->get('/', 'Guest::index');
$routes->get('/detail-informasi','Guest::detailInformasi');
$routes->get('/detail-profile','Guest::detailProfile');
$routes->get('/pemesanan','Guest::pemesanan');
$routes->post('/pemesanan/store','Guest::submitPesanan');
$routes->get('/pemesanan/store','Guest::submitPesanan');
$routes->get('/pemesanan-berhasil','Guest::pesanBerhasil');


// forward chaining routes
$routes->post('/check', 'Guest::fChaining');

// Users Routes
$routes->group('user', function($routes) {
    $routes->get('dashboard', 'User::index');
    $routes->get('upgrade', 'User::upgrade');
    $routes->post('upgrade', 'User::getPacketByCode');
    $routes->post('upgrade/store', 'User::upgradeProcess');
    $routes->get('unsubscribe', 'User::unsubscribe');
    $routes->post('unsubscribe', 'User::unsubscribeProcess');
});

// Admin Routes :
$routes->group('admin',['filter' => 'authGuard'] ,function($routes){
    // dashboard
    $routes->get('dashboard', 'Admin::index');
    // pesan
    $routes->get('pesan', 'Pesan::index');
    $routes->get('pesan/list/(:any)', 'Pesan::listPesan/$1');
    $routes->get('pesan/edit/(:any)', 'Pesan::edit/$1');
    $routes->post('pesan/update', 'Pesan::update');
    $routes->post('pesan/delete/(:any)', 'Pesan::delete/$1');
    $routes->post('pesan/konfirmasi', 'Pesan::konfirmasi');
    $routes->post('pesan/konfirmasi/update', 'Pesan::konfirmasiUpdate');
    $routes->post('pesan/konfirmasi/stop', 'Pesan::konfirmasiStop');

    // member
    $routes->get('member', 'Member::index');
    $routes->get('member/test', 'Member::test');
    $routes->get('member/add', 'Member::add');
    $routes->post('member/generate-user', 'Member::generate');
    $routes->post('member/store', 'Member::store');
    $routes->get('member/edit/(:any)', 'Member::edit/$1');
    $routes->post('member/update', 'Member::update');
    $routes->post('member/delete/(:any)', 'Member::delete/$1');
    // premis
    $routes->get('premis', 'Premis::index');
    $routes->get('premis/add', 'Premis::add');
    $routes->post('premis/store', 'Premis::store');
    $routes->get('premis/edit/(:any)', 'Premis::edit/$1');
    $routes->post('premis/update', 'Premis::update');
    $routes->post('premis/delete/(:any)', 'Premis::delete/$1');
    // paket
    $routes->get('packet', 'Packet::index');
    $routes->get('packet/add', 'Packet::add');
    $routes->post('packet/store', 'Packet::store');
    $routes->get('packet/edit/(:any)', 'Packet::edit/$1');
    $routes->post('packet/update', 'Packet::update');
    $routes->post('packet/delete/(:any)', 'Packet::delete/$1');
    // rules
    $routes->get('rules', 'Rules::index');
    $routes->get('rules/add', 'Rules::add');
    $routes->post('rules/store', 'Rules::store');
    $routes->get('rules/edit/(:any)', 'Rules::edit/$1');
    $routes->post('rules/update', 'Rules::update');
    $routes->post('rules/delete/(:any)', 'Rules::delete/$1');
});


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
