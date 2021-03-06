<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//ADMIN: CRUD students controller
$route['admin']                         = 'crud_students_controller/index';
$route['admin/add-student']             = 'crud_students_controller/create';
$route['admin/update-student/(:num)']   = 'crud_students_controller/update/$1';
$route['admin/delete-student/(:num)']   = 'crud_students_controller/delete/$1';

//TODO: CRUD subjects controller
$route['admin/subject']                 = 'crud_subjects_controller/index';
$route['admin/add-subject']             = 'crud_subjects_controller/create';
$route['admin/update-subject/(:num)']   = 'crud_subjects_controller/update/$1';
$route['admin/delete-subject/(:num)']   = 'crud_subjects_controller/delete/$1';

//TODO: import student list
$route['admin/import-student-list']             = 'import_students_info_controller/index';
$route['admin/import-student-list/proceed']     = 'import_students_info_controller/import_excel';

//TODO: import ineligible
$route['admin/import-eligibilities']            = 'import_ineligible_students_controller/index';
$route['admin/import-eligibilities/proceed']    = 'import_ineligible_students_controller/import_excel';
//TODO: export shits
//TODO: create exam period

// using multiple controller
$route['default_controller'] = 'CRUD_Students_Controller';
$route['crud_subjects_controller'] = 'CRUD_Subjects_Controller';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
