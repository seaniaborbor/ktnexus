<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * 
 */
$routes->set404Override('App\Controllers\Custom404Controller::index');

$routes->get('/', 'Home::index');
$routes->get('/about_us', 'Home::about');
$routes->get('/portfolio', 'Home::portfolio');
$routes->get('/portfolio/(:any)', 'Home::portfolio_detail/$1');

$routes->post('send_message', 'Contact::sendMessage');

$routes->get('/auth', 'AuthController::index');
$routes->post('/auth', 'AuthController::index');
$routes->get('/logout', 'AuthController::logout');


// ANY ROUTE BELOW IS ONLY MENT TO BE ACCESS BY ADMIN 

$routes->group("dashboard", ['filter'=>'agentProtector'], function($routes){
	
	$routes->get('/', 'DashboardController::index');
	
	$routes->get('portfolio', 'PortfolioController::manage');
	$routes->get('projects', 'PortfolioController::create');
	$routes->post('projects', 'PortfolioController::create');
	
	$routes->get('portfolio/edit/(:num)', 'PortfolioController::edit/$1');
	$routes->post('portfolio/delete/(:num)', 'PortfolioController::delete/$1');
	$routes->post('portfolio/edit/(:num)', 'PortfolioController::edit/$1'); 
	$routes->post('portfolio/status/(:any)/(:num)', 'PortfolioController::changeStatus/$1/$2'); 
	
	$routes->get('team', 'TeamMemberController::index');
	$routes->post('team', 'TeamMemberController::index');
	$routes->get('team/edit/(:num)', 'TeamMemberController::edit/$1');
	$routes->post('team/edit/(:num)', 'TeamMemberController::edit/$1');
	$routes->post('team/delete/(:num)', 'TeamMemberController::delete/$1');
	
	$routes->get('inbox', 'Contact::index');
	$routes->post('messages/delete/(:num)', 'Contact::delete/$1');
});