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

$route['default_controller'] = "home";
$route['404_override'] = '';


//$route['main/([a-z]+)'] = "main/$1"; 
//$route['main/([a-z]+)/([a-z]+)'] = "main/$1/$2"; 
//$route['main/([a-z]+)/([a-z]+)/([a-z]+)'] = "main/$1/$2/$3"; 
//$route['main/([a-z]+)/([a-z]+)/([a-z]+)/([a-z]+)'] = "main/$1/$2/$3/$4"; 
//$route['main/([a-z]+)/([a-z]+)/([a-z]+)/([a-z]+)/([a-z]+)'] = "main/$1/$2/$3/$4/$5";
//$route['main/:any'] = "main/index"; 
 
 
 
$route['images/web2icons'] = "images/web2icons";


$route['home/login'] = "home/login";
$route['home/logout'] = "home/logout";
$route['home/register'] = "home/register";
$route['home/create_table'] = "home/create_table";

$route['themes/test'] = "themes/test";
$route['themes/iframe_youtube'] = "themes/iframe_youtube";
$route['themes/view_resume_top_to_bottom'] = "themes/view_resume_top_to_bottom";
$route['themes/view_resume_side_to_side'] = "themes/view_resume_side_to_side";
$route['themes/insert_comment'] = "themes/insert_comment";

$route['main/:any'] = "main/index";  //  http://localhost/scenecredit/index.php/main/index/*
$route['main/update_wysiwyg'] = "main/update_wysiwyg";
$route['main/update_reels'] = "main/update_reels";
$route['main/remove_reel'] = "main/remove_reel";
$route['main/upload_picture_form'] = "main/upload_picture_form";
$route['main/iframe_jcrop_form_for_picture'] = "main/iframe_jcrop_form_for_picture";
$route['main/remove_picture'] = "main/remove_picture";
$route['main/crop_picture'] = "main/crop_picture";
$route['main/upload_photo_form'] = "main/upload_photo_form";
$route['main/upload_photo'] = "main/upload_photo";
$route['main/upload_picture'] = "main/upload_picture";
$route['main/iframe_jcrop_form_for_photo'] = "main/iframe_jcrop_form_for_photo";
$route['main/remove_photo'] = "main/remove_photo";
$route['main/crop_photo'] = "main/crop_photo";
$route['main/update_resume'] = "main/update_resume";
$route['main/view_resume_top_to_bottom'] = "main/view_resume_top_to_bottom";
$route['main/view_resume_side_to_side'] = "main/view_resume_side_to_side";
$route['main/update_template'] = "main/update_template";
$route['main/check_available_profile_link'] = "main/check_available_profile_link";
$route['main/update_profile_link'] = "main/update_profile_link";
$route['main/update_aboutme'] = "main/update_aboutme";
$route['main/update_password'] = "main/update_password";
$route['main/update_social_network'] = "main/update_social_network";
$route['main/update_database'] = "main/update_database";
$route['main/test'] = "main/test";

$route[':any/([a-z]+)'] = "themes/$1";  // TEMPLATES LINK ie http://localhost/scenecredit/index.php/themes/bluejean
$route[':any'] = "themes"; // http://localhost/scenecredit/index.php/james


/* End of file routes.php */
/* Location: ./application/config/routes.php */