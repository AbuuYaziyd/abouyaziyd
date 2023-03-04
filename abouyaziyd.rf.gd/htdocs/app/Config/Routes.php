<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
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
$routes->get('/', 'Home::index');
$routes->post('contact', 'Home::contact');

/*
 * --------------------------------------------------------------------
 * Auth Routings
 * --------------------------------------------------------------------
 */
// $routes->get('register', 'AuthController::register');
// $routes->post('register', 'AuthController::secure');
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::auth');
// $routes->get('recover', 'AuthController::recover');
// $routes->post('recover', 'AuthController::password');
// $routes->get('change/password', 'AuthController::pass', ['filter' => 'auth']);
// $routes->post('change/password/(:num)', 'AuthController::change/$1', ['filter' => 'auth']);
// $routes->get('tasjil','AuthController::reg', ['filter' => 'auth']);
// $routes->post('tasjil', 'AuthController::regNew', ['filter' => 'auth']);
$routes->get('logout', 'AuthController::logout');

/*
 * --------------------------------------------------------------------
 * User Routings
 * --------------------------------------------------------------------
 */
$routes->group('user', function ($routes) {
    $routes->get('/', 'UserController::index', ['filter' => 'auth']);
    // $routes->get('profile', 'UserController::profile', ['filter' => 'auth']);
});


/*
 * --------------------------------------------------------------------
 * Settings Routings
 * --------------------------------------------------------------------
 */
$routes->group('set', function ($routes) {
    $routes->get('/', 'SettingController::index', ['filter' => 'auth']);
    $routes->post('corousel/(:num)', 'SettingController::corousel/$1', ['filter' => 'auth']);
    $routes->post('service/(:num)', 'SettingController::service/$1', ['filter' => 'auth']);
    $routes->post('partner/(:num)', 'SettingController::partner/$1', ['filter' => 'auth']);
    $routes->post('infos/(:num)', 'SettingController::infos/$1', ['filter' => 'auth']);
    $routes->post('soci/(:num)', 'SettingController::soci/$1', ['filter' => 'auth']);
});

/*
 * --------------------------------------------------------------------
 * Category Routings
 * --------------------------------------------------------------------
 */
$routes->group('cat', function ($routes) {
    $routes->get('/', 'CategoryController::index', ['filter' => 'auth']);
    $routes->get('add', 'CategoryController::add', ['filter' => 'auth']);
    $routes->post('create', 'CategoryController::create', ['filter' => 'auth']);
    $routes->get('show/(:num)', 'CategoryController::show/$1', ['filter' => 'auth']);
    $routes->post('edit/(:num)', 'CategoryController::edit/$1', ['filter' => 'auth']);
    $routes->get('delete/(:num)', 'CategoryController::delete/$1', ['filter' => 'auth']);
});

/*
 * --------------------------------------------------------------------
 * Blog Routings
 * --------------------------------------------------------------------
 */
// $routes->group('blog', function ($routes) {
//     $routes->get('/', 'BlogController::index');
//     $routes->get('single/(:num)', 'BlogController::single/$1');
//     $routes->get('first', 'BlogController::first', ['filter' => 'auth']);
//     $routes->get('add', 'BlogController::add', ['filter' => 'auth']);
//     $routes->post('create', 'BlogController::create', ['filter' => 'auth']);
//     $routes->get('show/(:num)', 'BlogController::show/$1', ['filter' => 'auth']);
//     $routes->post('edit/(:num)', 'BlogController::edit/$1', ['filter' => 'auth']);
//     $routes->get('delete/(:num)', 'BlogController::delete/$1', ['filter' => 'auth']);
// });

/*
 * --------------------------------------------------------------------
 * Product Routings
 * --------------------------------------------------------------------
 */
$routes->group('product', function ($routes) {
    $routes->get('/', 'ProductController::index', ['filter' => 'auth']);
    $routes->get('add', 'ProductController::add', ['filter' => 'auth']);
    $routes->post('create', 'ProductController::create', ['filter' => 'auth']);
    $routes->get('show/(:num)', 'ProductController::show/$1', ['filter' => 'auth']);
    $routes->post('edit/(:num)', 'ProductController::edit/$1', ['filter' => 'auth']);
    $routes->get('delete/(:num)', 'ProductController::delete/$1', ['filter' => 'auth']);
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
