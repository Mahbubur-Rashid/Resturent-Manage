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

$route['logout']			= 'Login/logout';


// for csv file upload
$route['mycsv']			    = 'AdminCsv/index';
$route['csv/importcsv']			    = 'AdminCsv/importcsv';



  // Routing for (Packages Menu) 
$route['packages']			    = 'AdminPackages/packages_list';
$route['packagesAdd']			= 'AdminPackages/packagesAdd';
$route['add']			        = 'AdminPackages/add';
//$route['list']			        = 'AdminPackages/packages_list';

$route['packages/edit/(:any)']  	= 'AdminPackages/edit/$1';
$route['packages/del/(:any)']   	= 'AdminPackages/del/$1';
	
$route['packages/sort']			    = 'AdminPackages/sort';
$route['packages/saveSortingData']  = 'AdminPackages/saveSortingData';


  // Routing for Manage Currency List Menu
$route['order-status']			= 'AdminOrder/order_list';
$route['orderAdd']			    = 'AdminOrder/show';
$route['NewOrderAdd']			= 'AdminOrder/add';

$route['order/edit/(:any)']     = 'AdminOrder/edit/$1';
$route['order/del/(:any)']      = 'AdminOrder/del/$1';


  // Routing for (Manage Currency List) Menu
$route['manage-currency']		= 'AdminCurrency/currency_list';
$route['currencyAdd']			= 'AdminCurrency/show';
$route['NewCurrencyAdd']		= 'AdminCurrency/add';			

$route['currency/edit/(:any)']  = 'AdminCurrency/edit/$1';
$route['currency/del/(:any)']   = 'AdminCurrency/del/$1';

$route['csvImport']			    = 'AdminCurrency/importcsv';






 //Routing for (Manage Cuisine List) Menu
$route['manage-cuisine']			= 'AdminCuisine/cuisine_list';
$route['cuisineAdd']				= 'AdminCuisine/show';
$route['NewCuisineAdd']		    	= 'AdminCuisine/add';			

$route['cuisine/edit/(:any)']   	= 'AdminCuisine/edit/$1';
$route['cuisine/del/(:any)']    	= 'AdminCuisine/del/$1';

$route['cuisine/sort']			  	= 'AdminCuisine/sort';
$route['cuisine/saveSortingData'] 	= 'AdminCuisine/saveSortingData';







//Routing for (Language Setting ) Menu
$route['manage-language']		= 'AdminLanguage/language_list';

//Routing for (Commision Settings ) Menu
$route['commisionsettings']		= 'AdminCommision/show';
$route['commisionSave']		= 'AdminCommision/save';


//Routing for(admin setting  ) Menu
$route['setting']	= 'AdminSetting/view';
$route['setting/do']	= 'AdminSetting/dataAdd';








 //Routing for (Dishes ) Menu
$route['manage-dishes']		= 'AdminDishes/dishes_list';
$route['dishesAdd']			= 'AdminDishes/show';
$route['NewDishesAdd']		= 'AdminDishes/add';			

//$route['cuisine/edit/(:any)'] = 'AdminDishes/edit/$1';
//$route['cuisine/del/(:any)'] = 'AdminDishes/del/$1';
 //for pagination
$route['manage-dishes/(:any)']	= 'AdminDishes/dishes_list/$1';







// Arif  Routes 

//user
$route['merchant-info']	= 'MerchantController/MerchantInfo';
//Admin Merchant List
$route['merchantlist']	= 'AdminMerchantList/AdminMerchantList';
$route['merchantlist/do']	= 'AdminMerchantList/AdminMerchantListDataInput';
$route['merchantlist/do/logininformation']	= 'AdminMerchantList/loginInfo';
$route['merchantlist/do/restaurantinformation']	= 'AdminMerchantList/AdminResInfoDataAdd';
$route['merchantlist/do/member']	= 'AdminMerchantList/memberShip';
$route['merchantlist/do/featured']	= 'AdminMerchantList/featuredAdd';
$route['merchantlist/do/googlemap']	= 'AdminMerchantList/AdminListMapDataAdd';
$route['merchantlist/do/commission']	= 'AdminMerchantList/AdminListComDataAdd';
$route['merchantlist/edit/(:any)']	= 'AdminMerchantList/ListEdit/$1';
$route['merchantlist/delete/(:any)']	= 'AdminMerchantList/listDelete/$1';

////Custom Page
$route['custom-page']	= 'CustomPage/pageView';
$route['custom-page/do']	= 'CustomPage/addPageView';
$route['custom-page/do/Add']	= 'CustomPage/addData';
$route['custom-page/do1']	= 'CustomPage/addPageViews';
$route['custom-page/do1/Add']	= 'CustomPage/addLinkData';
$route['custom-page/delete/(:any)']	= 'CustomPage/deleteData/$1';
$route['custom-page/edit/(:any)']	= 'CustomPage/editData/$1';
$route['custom-page/save']	= 'CustomPage/saveData';


//Admin Dishes
$route['admin-dishes']	= 'AdminDishes/AdminDishes';
$route['dishes/do']	= 'AdminDishes/dataInput';
$route['dishes/do/Add']	= 'AdminDishes/dataAdd';
$route['dishes/edit/(:any)']	= 'AdminDishes/dataEdit/$1';
$route['dishes/delete/(:any)']	= 'AdminDishes/dataDelete/$1';
$route['dishes/save']	= 'AdminDishes/dataSave';






$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
