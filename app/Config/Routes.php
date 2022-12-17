<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/lang/{locale}', 'Language::index');


// Students
$routes->get('student-profile', 'Students::profile');
$routes->get('students-list', 'Students::list');
$routes->get('students-reports', 'Reports::list');


// Teachers
$routes->get('teacher-profile', 'Teachers::profile');
$routes->get('teachers-list', 'Teachers::list');

// Companies
$routes->get('company-profile', 'Companies::profile');
$routes->get('companies-list', 'Companies::list');

// Chat
$routes->get('chat', 'Chat::show_chat');


// Auth routing
$routes->get('auth-login', 'PageController::auth_login');
$routes->get('auth-logout', 'PageController::auth_logout');
$routes->get('auth-register', 'PageController::auth_register');
$routes->get('auth-recoverpw', 'PageController::auth_recoverpw');
$routes->get('auth-lock-screen', 'PageController::auth_lock_screen');



/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}