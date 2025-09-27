<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Portfolio::index');
$routes->get('/about', 'Portfolio::about');
$routes->get('/projects', 'Portfolio::projects');
$routes->get('/contact', 'Portfolio::contact');
// Optional: untuk handle form submission (jika diperlukan nanti)
// $routes->post('/contact/send', 'Portfolio::sendMessage');