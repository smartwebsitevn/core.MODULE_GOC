<?php

/*$route['checkout'] 						= 'checkout';
$route['checkout-confirm'] 				= 'checkout/confirm';
$route['checkout-success'] 				= 'checkout/success';*/

// gocs
$route['my-gocs'] 					    = 'user_goc';
$route['danh-sach-goc/(:any)-c(:num)']   = 'goc_list/category/$2';
$route['danh-sach-goc'] 				= 'goc_list';
$route['goc'] 	= 'goc';    
$route['goc/(:any)-i(:num)'] 	= 'goc/view/$2';

