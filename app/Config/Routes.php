<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'About::index');
$routes->get('contact', 'Contact::index');
$routes->get('skills', 'Skills::index');
$routes->get('projects', 'Project::index');
$routes->get('/admin', 'Dashboard::index');
$routes->get('/admin/branding', 'Branding_AM::index');
$routes->get('/admin/hero', 'Hero_AM::index');
$routes->get('/admin/experience', 'Experience_AM::index');
$routes->get('/admin/skill', 'Skills_AM::index');
$routes->get('/admin/project', 'Project_AM::index');
$routes->get('/admin/contact', 'Contact_AM::index');
$routes->get('/admin/client', 'Client_AM::index');
$routes->get('/admin/add_project', 'ProjectFrm::index');
$routes->get('/admin/add_Experience', 'ExperienceFrm::index');
$routes->get('/admin/save_logo', 'Save_logo::index');
