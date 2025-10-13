<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('contact', 'Home::contact');
$routes->get('admin', 'Home::admin');
$routes->post('contact', 'Home::send');
$routes->get('about', 'Home::about');
$routes->get('privacy', 'Home::privacy');
$routes->get('terms', 'Home::terms');
$routes->get('categories', 'Home::categories');
$routes->get('projects', 'Home::projects');
$routes->get('pr/(:num)', 'Home::project/$1');
$routes->get('pr-content/(:num)', 'Home::content/$1');

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
 * Project Routings
 * --------------------------------------------------------------------
 */
$routes->group('project', function ($routes) {
    $routes->get('/', 'ProjectController::index');
});

/*
 * --------------------------------------------------------------------
 * Duroos Routings
 * --------------------------------------------------------------------
 */
$routes->group('duroos', function ($routes) {
    $routes->get('/', 'DuroosController::index');
    $routes->get('page', 'DuroosController::page', ['filter' => 'auth']);
    $routes->get('show/(:num)', 'DuroosController::show/$1');
    $routes->get('view/(:num)', 'DuroosController::view/$1');
    $routes->get('type/(:segment)', 'DuroosController::type/$1');
    $routes->get('edit/(:num)', 'DuroosController::edit/$1');
});

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
 * Project Routings
 * --------------------------------------------------------------------
 */
$routes->group('project', function ($routes) {
    $routes->get('/', 'ProjectController::index');
    $routes->get('add', 'ProjectController::add', ['filter' => 'auth']);
    $routes->post('create', 'ProjectController::create', ['filter' => 'auth']);
    $routes->get('show/(:num)', 'ProjectController::show/$1');
    $routes->post('edit/(:num)', 'ProjectController::edit/$1', ['filter' => 'auth']);
    $routes->get('delete/(:num)', 'ProjectController::delete/$1', ['filter' => 'auth']);
});
