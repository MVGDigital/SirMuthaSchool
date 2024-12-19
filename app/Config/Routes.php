<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);  // Turned off auto routing for security
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// Set $autoRoutesImproved to true in app/Config/Feature.php and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

//Home page
$routes->get('/', 'Index::index');
$routes->get('/index', 'Index::index');

//AboutUs page
$routes->get('/about', 'About::index');

//Academics page
$routes->get('/academics', 'Academics::index');

//Facilities
$routes->get('/facilities', 'Facilities::index');

//Statutory
$routes->get('/statutory', 'Statutory::index');

//Admission
$routes->get('/admission', 'Admission::index');

//Inclusive Education
$routes->get('/inclusive-education', 'InclusiveEducation::index');

//Beyond Curriculum
$routes->get('/beyond-curriculum', 'BeyondCurriculum::index');

//Gallery
$routes->get('/gallery', 'Gallery::index');

//Contact
$routes->get('/contact', 'Contact::index');


$routes->get('/adm1n/login', 'Auth::index', ['filter' => 'noauth']);
$routes->post('/adm1n/loginCheck', 'Auth::loginCheck');
$routes->get('/adm1n/logout', 'Auth::logout');


// Filter on route group
$routes->group('', ['filter' => 'auth'], function ($routes) {

    // Banner routes
    $routes->get('/adm1n/banner', 'BannerController::index');
    $routes->get('adm1n/banner/create', 'BannerController::add');
    $routes->post('/adm1n/banner/upload', 'BannerController::upload');
    $routes->get('/adm1n/banner/uploads/(:any)', 'BannerController::uploads/$1');
    $routes->get('/adm1n/banner/edit/(:num)', 'BannerController::edit/$1');
    $routes->post('/adm1n/banner/update/(:num)', 'BannerController::update/$1');
    $routes->get('/adm1n/banner/delete/(:num)', 'BannerController::delete/$1');
    $routes->get('/adm1n/banner/toggle-status/(:num)', 'BannerController::toggleStatus/$1');

    // Event routes
    $routes->get('adm1n/event/add', 'EventController::add');
    $routes->post('adm1n/event/save', 'EventController::save');
    $routes->get('/adm1n/event-list', 'EventController::index');
    $routes->get('adm1n/events/edit/(:num)', 'EventController::edit/$1');
    $routes->post('adm1n/events/update/(:num)', 'EventController::update/$1');
    $routes->get('events/view/(:num)', 'EventController::view/$1');
    $routes->delete('adm1n/events/delete/(:num)', 'EventController::delete/$1');
    $routes->get('adm1n/event_users', 'EventUserController::index');
    $routes->get('adm1n/event_user/exportCsv', 'EventUserController::exportCsv');
    $routes->post('adm1n/event_user/fetchData', 'EventUserController::fetchData');

    // Career routes
    $routes->get('/adm1n/career', 'Career::index');
    $routes->get('/adm1n/career/add', 'Career::add');
    $routes->get('adm1n/career/export', 'Career::export');
    $routes->post('/adm1n/career/submit', 'Career::submit');
    $routes->get('adm1n/career/view/(:num)', 'Career::view/$1'); 
    $routes->get('/adm1n/career/edit/(:num)', 'Career::edit/$1');
    $routes->get('/adm1n/career/delete/(:num)', 'Career::delete/$1');
    $routes->get('/adm1n/career/getCareers', 'Career::getCareers');
    $routes->get('/adm1n/job-applications', 'JobApplication::index');
    $routes->get('/adm1n/job-applications/delete/(:num)', 'JobApplication::delete/$1');
    $routes->get('/adm1n/job-applications/export', 'JobApplication::export');

    // Teacher routes
    $routes->get('adm1n/teacher', 'Teacher::index');
    $routes->get('adm1n/teacher/list', 'Teacher::index');
    $routes->get('adm1n/teacher/add', 'Teacher::add');
    $routes->get('adm1n/teacher/edit/(:num)', 'Teacher::edit/$1');
    $routes->post('adm1n/teacher/submit', 'Teacher::submit');
    $routes->post('adm1n/teacher/update/(:num)', 'Teacher::update/$1');
    $routes->get('adm1n/teacher/delete/(:num)', 'Teacher::delete/$1');

    // Document routes
    $routes->get('adm1n/document', 'DocumentController::index');
    $routes->get('adm1n/document/add', 'DocumentController::add');
    $routes->post('adm1n/document/submit', 'DocumentController::submit');
    $routes->get('adm1n/document/edit/(:num)', 'DocumentController::edit/$1');
    $routes->post('adm1n/document/update/(:num)', 'DocumentController::update/$1');
    $routes->get('adm1n/document/delete/(:num)', 'DocumentController::delete/$1');

    // FAQ routes
    $routes->get('adm1n/faq', 'Faq::index');
    $routes->get('adm1n/faq/create', 'Faq::add');
    $routes->post('adm1n/faq/submit', 'Faq::submit');
    $routes->get('adm1n/faq/edit/(:num)', 'Faq::edit/$1');
    $routes->post('adm1n/faq/update/(:num)', 'Faq::update/$1');
    $routes->get('adm1n/faq/delete/(:num)', 'Faq::delete/$1');

    // Contact routes
    $routes->get('adm1n/contact', 'Contact::index');
    $routes->get('adm1n/contact/create', 'Contact::create');
    $routes->post('adm1n/contact/submit', 'Contact::submit');
    $routes->get('adm1n/contact/export/(:num)', 'Contact::export/$1');

    // Student routes
    $routes->get('/adm1n/students', 'Student::index');
    $routes->get('/adm1n/students/create', 'Student::create');
    $routes->post('students/submit', 'Student::submit');
    $routes->get('/adm1n/students/export/(:num)', 'Student::export/$1');

    // Kindergarten routes
    $routes->get('/adm1n/kindergarten', 'Kindergarten::index');
    $routes->get('/kindergarten/create', 'Kindergarten::create');
    $routes->post('kindergarten/submit', 'Kindergarten::submit');
    $routes->get('/adm1n/kindergarten/delete/(:num)', 'Kindergarten::delete/$1');
    $routes->get('/adm1n/kindergarten/export/(:num)', 'Kindergarten::export/$1');

    $routes->get('adm1n/videobanner', 'VideoBannerController::index');
    $routes->get('adm1n/videobanner/create', 'VideoBannerController::add');
    $routes->post('adm1n/save-banner', 'VideoBannerController::saveBanner');
    $routes->get('adm1n/videobanner/edit/(:num)', 'VideoBannerController::edit/$1');
    $routes->post('adm1n/videobanner/update/(:num)', 'VideoBannerController::updateBanner/$1');
    $routes->get('adm1n/videobanner/delete/(:num)', 'VideoBannerController::delete/$1');
    $routes->post('video-banner/toggle-publish', 'VideoBannerController::togglePublishStatus');

    $routes->get('adm1n/testimonial', 'TestimonialController::index');
    $routes->get('adm1n/testimonial/add', 'TestimonialController::add');
    $routes->get('adm1n/testimonial/edit/(:num)', 'TestimonialController::edit/$1');
    $routes->post('adm1n/testimonial/submit', 'TestimonialController::submit');
    $routes->post('adm1n/testimonial/update/(:num)', 'TestimonialController::update/$1');
    $routes->get('adm1n/testimonial/delete/(:num)', 'TestimonialController::delete/$1');

    //Blog routes
    $routes->get('adm1n/blog', 'Blog::index');
    log_message('debug', 'Blog::index method called');
    $routes->get('adm1n/blog/add', 'Blog::add');
    $routes->post('adm1n/blog/submit', 'Blog::submit');
    $routes->get('adm1n/blog/edit/(:num)', 'Blog::edit/$1');
    $routes->post('adm1n/blog/update/(:num)', 'Blog::update/$1');
    $routes->get('adm1n/blog/delete/(:num)', 'Blog::delete/$1');
    $routes->get('adm1n/blog/toggle-status/(:num)', 'Blog::toggleStatus/$1');

    //Gallery routes
    $routes->get('/adm1n/gallery', 'GalleryController::index');
    $routes->get('adm1n/gallery/create', 'GalleryController::add');
    $routes->post('adm1n/gallery/upload', 'GalleryController::upload');
    $routes->get('adm1n/gallery/edit/(:num)', 'GalleryController::edit/$1');
    $routes->post('adm1n/gallery/update/(:num)', 'GalleryController::update/$1');
    $routes->get('adm1n/gallery/delete/(:num)', 'GalleryController::delete/$1');
    $routes->get('adm1n/gallery/toggle-status/(:num)', 'GalleryController::toggleStatus/$1');

    // Brochure and Policies
    $routes->get('adm1n/brochure_policies', 'BrochurePoliciesController::index', ['as' => 'brochure_policies_list']);
    $routes->get('adm1n/brochure_policies/add', 'BrochurePoliciesController::add', ['as' => 'brochure_policies_add']);
    $routes->post('adm1n/brochure_policies/save', 'BrochurePoliciesController::save', ['as' => 'brochure_policies_save']);
    $routes->post('adm1n/brochure_policies/save/(:num)', 'BrochurePoliciesController::save/$1', ['as' => 'brochure_policies_update']);
    $routes->get('adm1n/brochure_policies/edit/(:num)', 'BrochurePoliciesController::edit/$1', ['as' => 'brochure_policies_edit']);
    $routes->get('adm1n/brochure_policies/delete/(:num)', 'BrochurePoliciesController::delete/$1', ['as' => 'brochure_policies_delete']);

    // Home routes
    $routes->get('/adm1n', 'Home::index');
    $routes->get('/(:any)', 'Home::root/$1');

    // Video Banner routes
    // $routes->get('adm1n/videoBanners', 'VideoBannerController::index');
    // $routes->get('adm1n/videobanner/create', 'VideoBannerController::add');
    // $routes->post('/adm1n/save-banner', 'VideoBannerController::saveBanner');

});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}