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

//DEV
$routes->get('/checkemail/(:any)', 'Dev::email/$1');
