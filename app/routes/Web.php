<?php
$router= new AltoRouter();

//User//User
$router->map('GET','/small/back-end/index','App\Controllers\HomeController@index','index');
$router->map('GET','/small/back-end/add-users','App\Controllers\HomeController@create','createUser');
$router->map('POST','/small/back-end/add-users/store','App\Controllers\HomeController@store','storeUser');
$router->map('GET','/small/back-end/delete-users/[i:id]','App\Controllers\HomeController@delete','deleteUser');
$router->map('GET','/small/back-end/edit-users/[i:id]','App\Controllers\HomeController@edit','editUser');
$router->map('POST','/small/back-end/update-users/[i:id]','App\Controllers\HomeController@update','updateUser');

$router->map('GET','/small/back-end/register','App\Controllers\RegisterController@index','register');
$router->map('POST','/small/back-end/registerCheck','App\Controllers\RegisterController@store');


$router->map('GET','/small/back-end/login', 'App\Controllers\LoginController@index','login' );
$router->map('POST','/small/back-end/loginCheck','App\Controllers\LoginController@store');
$router->map('GET','/small/back-end/logout','App\Controllers\LoginController@logout','logout');


$router->map('GET', '/small/back-end/dashboard','App\Controllers\DashboardController@index','dashboard');


// News
$router->map('GET','/small/back-end/news','App\Controllers\NewsController@index','news');
$router->map('GET','/small/back-end/add-news','App\Controllers\NewsController@create','createNews');
$router->map('POST','/small/back-end/add-news/store','App\Controllers\NewsController@store');
$router->map('GET','/small/back-end/news/edit-news/[i:id]','App\Controllers\NewsController@edit','editNews');
$router->map('POST','/small/back-end/news/update/[i:id]','App\Controllers\NewsController@update','updateNews');
$router->map('GET','/small/back-end/news/delete-news/[i:id]','\App\controllers\NewsController@delete','deleteNews');

// Tags
$router->map('GET', '/small/back-end/tags','App\Controllers\NewsTagsController@index','tags');
$router->map('GET', '/small/back-end/add-tags','App\Controllers\NewsTagsController@create','createTags');
$router->map('POST','/small/back-end/add-tags','App\Controllers\NewsTagsController@store');
$router->map('GET','/small/back-end/delete-tags/[i:id]','App\Controllers\NewsTagsController@delete','deleteTags');
$router->map('GET','/small/back-end/edit-tags/[i:id]','App\Controllers\NewsTagsController@edit','editTags');
$router->map('POST','/small/back-end/update-tags/[i:id]','App\Controllers\NewsTagsController@update','updateTags');

// Categories
$router->map('GET','/small/back-end/categories-news','App\Controllers\NewsCategoriesController@index','categories');
$router->map('GET','/small/back-end/add-categories','App\Controllers\NewsCategoriesController@create','createCategories');
$router->map('POST', '/small/back-end/add-categories','App\Controllers\NewsCategoriesController@store');
$router->map('GET','/small/back-end/delete-categories/[i:id]','App\Controllers\NewsCategoriesController@delete','deleteCategories');
$router->map('GET','/small/back-end/edit-categories/[i:id]','App\Controllers\NewsCategoriesController@edit','editCategories');
$router->map('POST','/small/back-end/update-categories/[i:id]','App\Controllers\NewsCategoriesController@update','updateCategories');

//Roles
$router->map('GET','/small/back-end/privilege','App\Controllers\PrivilegeController@index','privilege');
$router->map('GET', '/small/back-end/edit-privilege/[i:id]','App\Controllers\PrivilegeController@edit','editPrivilege');
$router->map('POST','/small/back-end/update-privilege/[i:id]','App\Controllers\PrivilegeController@update','updatePrivilege');



