<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/event/(:num)', 'Event::detail/$1');
$routes->post('/event/(:num)', 'Event::detail_post/$1');
$routes->get('/event/checkout/(:num)', 'Event::checkout/$1');

//AUTH

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

    $routes->get('pembeli', 'Dashboard\Pembeli::index');
    $routes->get('pembeli/tiket', 'Dashboard\Pembeli::tiket');
    $routes->get('pembeli/tiket/(:any)', 'Dashboard\Pembeli::tiket_invoice/$1');
    $routes->get('pembeli/profile', 'Dashboard\Pembeli::profile');

    $routes->get('admin', 'Dashboard\Admin::index');
    $routes->get('admin/event', 'Dashboard\Admin::event');
    $routes->get('admin/setstatus/(:any)/(:num)', 'Dashboard\Admin::setstatus/$1/$2');
    $routes->get('admin/delete/(:any)/(:num)', 'Dashboard\Admin::delete/$1/$2');
    $routes->get('admin/user', 'Dashboard\Admin::user');
    $routes->get('admin/setuser/(:any)/(:num)', 'Dashboard\Admin::setuser/$1/$2');
    $routes->get('admin/profile', 'Dashboard\Admin::profile');
});

//DEV
$routes->get('/checkemail/(:any)', 'Dev::email/$1');
