<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/sign-in', 'Auth::sign_in');
$routes->post('/sign-in', 'Auth::sign_in_post');

$routes->get('/sign-up', 'Auth::sign_up');
$routes->post('/sign-up', 'Auth::sign_up_post');

$routes->get('/logout', 'Auth::logout');

$routes->get('/forgot-password', 'Auth::forgot_password');
$routes->get('/forgot-password-form/(:any)', 'Auth::forgot_password_form/$1');
$routes->post('/forgot-password', 'Auth::forgot_password_post');
$routes->post('/forgot-password-form/(:any)', 'Auth::forgot_password_form_post/$1');

//DASHBOARD

$routes->group('dashboard', static function ($routes) {
    $routes->get('/', 'Dashboard\Dashboard::index');
    $routes->get('eo', 'Dashboard\Eo::index');
    $routes->get('eo/report', 'Dashboard\Eo::report');
    $routes->get('eo/profile', 'Dashboard\Eo::profile');

    $routes->get('eo/event', 'Dashboard\Eo::event');
    $routes->get('eo/event/add', 'Dashboard\Eo::event_add');
    $routes->post('eo/event/add', 'Dashboard\Eo::event_add_post');
    $routes->get('eo/event/edit/(:num)', 'Dashboard\Eo::event_edit/$1');
    $routes->post('eo/event/edit/(:num)', 'Dashboard\Eo::event_edit_post/$1');
    $routes->get('eo/event/delete/(:num)', 'Dashboard\Eo::event_delete/$1');

    $routes->get('eo/event/tiket/(:num)', 'Dashboard\Eo::event_tiket/$1');
    $routes->get('eo/event/tiket/add/(:num)', 'Dashboard\Eo::event_tiket_add/$1');
    $routes->post('eo/event/tiket/add/(:num)', 'Dashboard\Eo::event_tiket_add_post/$1');

    $routes->get('eo/event/tiket/(:num)/edit/(:num)', 'Dashboard\Eo::event_tiket_edit/$1/$2');
    $routes->post('eo/event/tiket/(:num)/edit/(:num)', 'Dashboard\Eo::event_tiket_edit_post/$1/$2');

    $routes->get('eo/event/tiket/(:num)/delete/(:num)', 'Dashboard\Eo::event_tiket_delete/$1/$2');
});

//DEV
$routes->get('/checkemail/(:any)', 'Dev::email/$1');
