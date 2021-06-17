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
|	https://codeigniter.com/user_guide/general/routing.html
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

$route['default_controller'] 		= 'user';
$route['404_override'] 				= '';
$route['translate_uri_dashes'] 		= FALSE;

//Home Section

$route['jobseeker'] 				= 'user/jobseeker';
$route['recruiter'] 				= 'user/recruiter';
$route['v1/api/register_jobSeeker']	= 'v1/api/register_jobSeeker';
$route['v1/api/login']				= 'v1/api/login';

//Jobseeker Section
$route['jobseeker_profile'] 		= 'user/jobseeker_profile';
$route['job_search'] 				= 'user/job_search';
$route['job_applied'] 				= 'user/job_applied';
$route['v1/api/search_job_post'] 	= 'v1/api/search_job_post';
$route['v1/api/apply_job/(:num)'] 	= 'v1/api/apply_job/$1';
$route['v1/api/job_applied'] 		= 'v1/api/job_applied';

//Recruiter Section
$route['recruiter_profile'] 		= 'user/recruiter_profile';
$route['job_post'] 					= 'user/job_post';
$route['applicant_list'] 			= 'user/applicant_list';
$route['v1/api/get_job_post']		= 'v1/api/get_job_post';
$route['v1/api/get_job_post/(:num)']= 'v1/api/get_job_post/$1';
$route['v1/api/job_create']			= 'v1/api/job_create';
$route['v1/api/applied_jobseeker']	= 'v1/api/applied_jobseeker';
$route['v1/api/approve_jobseeker/(:num)/(:num)/(:any)']	= 'v1/api/approve_jobseeker/$1/$2/$3';

//Dropdown Section
$route['v1/api/get_gender']			='v1/api/get_gender';
$route['v1/api/get_category']		= 'v1/api/get_category';
$route['v1/api/get_institute']		= 'v1/api/get_institute';
$route['v1/api/get_qualification']	= 'v1/api/get_qualification';
$route['v1/api/get_document']		= 'v1/api/get_document';
$route['v1/api/get_skills']			= 'v1/api/get_skills';

//LOGOUT
$route['v1/api/logout']				= 'v1/api/logout';