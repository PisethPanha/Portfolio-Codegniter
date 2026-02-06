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
$routes->get('/admin/about', 'About_AM::index');
$routes->post('/admin/update_about', 'About_AM::update');
$routes->get('/edit_experience/(:num)', 'ExperienceFrm::edit/$1');
$routes->get('/delete_experience/(:num)', 'ExperienceFrm::delete/$1');
$routes->get('/edit_skill/(:num)', 'Skills_AM::edit/$1');
$routes->get('/delete_skill/(:num)', 'Skills_AM::delete/$1');
$routes->get('/delete_client/(:num)', 'Client_AM::delete/$1');
$routes->post('/update_skill', 'Skills_AM::update');
$routes->post('admin/update_experience', 'ExperienceFrm::update');
$routes->post('/admin/save_experience', 'ExperienceFrm::save');
$routes->get('/admin/skill', 'Skills_AM::index');
$routes->get('/admin/project', 'Project_AM::index');
$routes->get('/admin/contact', 'Contact_AM::index');
$routes->get('/admin/client', 'Client_AM::index');
$routes->post('/client', 'Client_AM::save');
$routes->post('/admin/save_skill', 'Skills_AM::save');
$routes->get('/admin/add_skill', 'Skills_AM::addFrm');
$routes->get('/admin/add_project', 'ProjectFrm::index');
$routes->get('/admin/add_Experience', 'ExperienceFrm::index');
$routes->post('/admin/save_logo', 'Save_logo::index');
$routes->post('/admin/update_hero', 'Hero_AM::UpdateHero');
$routes->post('/admin/save_project', 'ProjectFrm::save');
$routes->post('admin/update_project', 'ProjectFrm::update');
$routes->post('admin/update_contact', 'Contact_AM::update');
$routes->get('/edit_project/(:num)', 'ProjectFrm::edit/$1');
$routes->get('/delete_project/(:num)', 'ProjectFrm::delete/$1');
$routes->get('/get_client/(:num)', 'Client_AM::get/$1');
$routes->get('/project-category/(:num)', 'GetProjectCate::index/$1');

