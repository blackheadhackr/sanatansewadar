<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = 'home/pageload';
$route['translate_uri_dashes'] = FALSE;
/**
 * admin Route ==================================================================================
 */
$route['dashbord'] = 'admin/index';
$route['update-banner'] = 'admin/loadbanner';
$route['Contact'] = 'admin/loadcontect';
$route['blog'] = 'blog/blog';
$route['blog-details/(:any)'] = 'blog/blogdetails';
$route['login'] = 'Login_admin/log_page';
$route['create-user'] = 'Login_admin/create';
$route['web-contact-data'] = 'Web_contact/get_web_contact_data';
$route['New-Joiner'] = 'joiner/our_joiner';
$route['gallery'] = 'Allimg/gallery';
$route['services'] = 'Services/load_services';


/**
 * web route ==================================================================================
 */


$route['about-sanatan-sewadar'] = 'home/about';
$route['service-sanatan-sewadar'] = 'home/services';
$route['service-details-sanatan-sewadar'] = 'home/service_details';
$route['blog-sanatan-sewadar'] = 'home/blog';
$route['gallery-sanatan-sewadar'] = 'home/gallery';
$route['blog-details-sanatan-sewadar'] = 'home/blog_details';
$route['join-sanatan-sewadar'] = 'home/joinus';
$route['contact-sanatan-sewadar'] = 'home/contact';
$route['collaborate-with-sanatan-sewadar'] = 'home/donate';
$route['contribute'] = 'home/recivedonation';

