<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['translate_uri_dashes'] = TRUE;
$route['default_controller'] = "home";
$controller_exceptions = array();
$route['404_override'] = 'home/page_missing';


$route['sitemap.xml'] = 'Home/sitemap';
$route['robots.txt'] = 'Home/robots';
$route['test'] = 'Home/test';
$route['test/(.*)'] = 'home/test/$1';

$route["index"] = 'Home/index';
$route["lead-management"] = 'Home/lead_management';
$route["project-management"] = 'Home/project_management';
$route["about-us"] = 'Home/about_us';
$route["terms"] = 'Home/terms';
$route["policy"] = 'Home/policy';
$route["contact-us"] = 'Home/contact';
$route['contact-us/(.*)'] = 'Home/contact/$1';
$route["post-contact-form"] = 'Home/post_contact_form';
$route["faqs"] = 'Home/faqs';
$route["blog"] = 'Home/blog';
$route['post/(.*)'] = 'Home/post/$1';


/* End of file routes.php */
/* Location: ./application/config/routes.php */