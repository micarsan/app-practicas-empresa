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
$routes->get('students-profile', 'Students::profile');



//Layout page routing
$routes->get('layouts-horizontal', 'Home::show_layouts_horizontal');
$routes->get('layouts-hori-topbar-dark', 'Home::show_layouts_hori_topbar_dark');
$routes->get('layouts-hori-boxed-width', 'Home::show_layouts_hori_boxed_width');
$routes->get('layouts-hori-preloader', 'Home::show_layouts_hori_preloader');
$routes->get('layouts-vertical', 'Home::show_layouts_vertical');
$routes->get('layouts-dark-sidebar', 'Home::show_layouts_dark_sidebar');
$routes->get('layouts-compact-sidebar', 'Home::show_layouts_compact_sidebar');
$routes->get('layouts-icon-sidebar', 'Home::show_layouts_icon_sidebar');
$routes->get('layouts-boxed', 'Home::show_layouts_boxed');
$routes->get('layouts-preloader', 'Home::show_layouts_preloader');
$routes->get('layouts-colored-sidebar', 'Home::show_layouts_colored_sidebar');

//App page routing
$routes->get('calendar', 'AppController::show_calendar');
$routes->get('chat', 'AppController::show_chat');

$routes->get('ecommerce-products', 'AppController::show_ecommerce_products');
$routes->get('ecommerce-product-detail', 'AppController::show_ecommerce_product_detail');
$routes->get('ecommerce-orders', 'AppController::show_ecommerce_orders');
$routes->get('ecommerce-customers', 'AppController::show_ecommerce_customers');
$routes->get('ecommerce-cart', 'AppController::show_ecommerce_cart');
$routes->get('ecommerce-checkout', 'AppController::show_ecommerce_checkout');
$routes->get('ecommerce-shops', 'AppController::show_ecommerce_shops');
$routes->get('ecommerce-add-product', 'AppController::show_ecommerce_add_product');

$routes->get('email-inbox', 'AppController::show_email_inbox');
$routes->get('email-read', 'AppController::show_email_read');
$routes->get('invoices-list', 'AppController::show_invoices_list');
$routes->get('invoices-detail', 'AppController::show_invoices_detail');
$routes->get('contacts-grid', 'AppController::show_contacts_grid');
$routes->get('contacts-list', 'AppController::show_contacts_list');
$routes->get('contacts-profile', 'AppController::show_contacts_profile');

//Pages section routing
$routes->get('auth-login', 'PageController::show_auth_login');
$routes->get('auth-register', 'PageController::show_auth_register');
$routes->get('auth-recoverpw', 'PageController::show_auth_recoverpw');
$routes->get('auth-lock-screen', 'PageController::show_auth_lock_screen');

$routes->get('pages-starter', 'PageController::show_pages_starter');
$routes->get('pages-maintenance', 'PageController::show_pages_maintenance');
$routes->get('pages-comingsoon', 'PageController::show_pages_comingsoon');
$routes->get('pages-timeline', 'PageController::show_pages_timeline');
$routes->get('pages-faqs', 'PageController::show_pages_faqs');
$routes->get('pages-pricing', 'PageController::show_pages_pricing');
$routes->get('pages-404', 'PageController::show_pages_404');
$routes->get('pages-500', 'PageController::show_pages_500');

//Component section routing
$routes->get('ui-alerts', 'ComponentController::show_ui_alerts');
$routes->get('ui-buttons', 'ComponentController::show_ui_buttons');
$routes->get('ui-cards', 'ComponentController::show_ui_cards');
$routes->get('ui-carousel', 'ComponentController::show_ui_carousel');
$routes->get('ui-dropdowns', 'ComponentController::show_ui_dropdowns');
$routes->get('ui-grid', 'ComponentController::show_ui_grid');
$routes->get('ui-images', 'ComponentController::show_ui_images');
$routes->get('ui-lightbox', 'ComponentController::show_ui_lightbox');
$routes->get('ui-modals', 'ComponentController::show_ui_modals');
$routes->get('ui-rangeslider', 'ComponentController::show_ui_rangeslider');
$routes->get('ui-session-timeout', 'ComponentController::show_ui_session_timeout');
$routes->get('ui-progressbars', 'ComponentController::show_ui_progressbars');
$routes->get('ui-sweet-alert', 'ComponentController::show_ui_sweet_alert');
$routes->get('ui-tabs-accordions', 'ComponentController::show_ui_tabs_accordions');
$routes->get('ui-typography', 'ComponentController::show_ui_typography');
$routes->get('ui-placeholders', 'ComponentController::show_ui_placeholders');
$routes->get('ui-toasts', 'ComponentController::show_ui_toasts');
$routes->get('ui-video', 'ComponentController::show_ui_video');
$routes->get('ui-general', 'ComponentController::show_ui_general');
$routes->get('ui-colors', 'ComponentController::show_ui_colors');
$routes->get('ui-rating', 'ComponentController::show_ui_rating');
$routes->get('ui-notifications', 'ComponentController::show_ui_notifications');
$routes->get('ui-offcanvas', 'ComponentController::show_ui_offcanvas');


$routes->get('form-elements', 'ComponentController::show_form_elements');
$routes->get('form-validation', 'ComponentController::show_form_validation');
$routes->get('form-advanced', 'ComponentController::show_form_advanced');
$routes->get('form-editors', 'ComponentController::show_form_editors');
$routes->get('form-uploads', 'ComponentController::show_form_uploads');
$routes->get('form-xeditable', 'ComponentController::show_form_xeditable');
$routes->get('form-repeater', 'ComponentController::show_form_repeater');
$routes->get('form-wizard', 'ComponentController::show_form_wizard');
$routes->get('form-mask', 'ComponentController::show_form_mask');

$routes->get('tables-basic', 'ComponentController::show_tables_basic');
$routes->get('tables-datatable', 'ComponentController::show_tables_datatable');
$routes->get('tables-responsive', 'ComponentController::show_tables_responsive');
$routes->get('tables-editable', 'ComponentController::show_tables_editable');

$routes->get('charts-apex', 'ComponentController::show_charts_apex');
$routes->get('charts-chartjs', 'ComponentController::show_charts_chartjs');
$routes->get('charts-flot', 'ComponentController::show_charts_flot');
$routes->get('charts-knob', 'ComponentController::show_charts_knob');
$routes->get('charts-sparkline', 'ComponentController::show_charts_sparkline');

$routes->get('icons-unicons', 'ComponentController::show_icons_unicons');
$routes->get('icons-boxicons', 'ComponentController::show_icons_boxicons');
$routes->get('icons-materialdesign', 'ComponentController::show_icons_materialdesign');
$routes->get('icons-dripicons', 'ComponentController::show_icons_dripicons');
$routes->get('icons-fontawesome', 'ComponentController::show_icons_fontawesome');

$routes->get('maps-google', 'ComponentController::show_maps_google');
$routes->get('maps-vector', 'ComponentController::show_maps_vector');
$routes->get('maps-leaflet', 'ComponentController::show_maps_leaflet');


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