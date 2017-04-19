<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Home\HomeController@index');
//中间键控制到登录页面
Route::group(['middleware' => 'admin.login'],function(){
	//后台首页
	Route::get('/root', 'Admin\AdminController@index');
	//用户管理
	Route::get('/admin/user/index', 'Admin\UserController@index');
	Route::get('/admin/user/add', 'Admin\UserController@add');
	Route::post('/admin/user/doAdd', 'Admin\UserController@doAdd');
	Route::get('/admin/user/edit/{id}','Admin\UserController@edit');
	Route::post('/admin/user/doEdit','Admin\UserController@doEdit');
	Route::get('/admin/user/delete/{id}','Admin\UserController@delete');
	//兴趣管理
	Route::get('/admin/message/index', 'Admin\MessageController@index');
	Route::get('/admin/message/add','Admin\MessageController@add');
	Route::post('/admin/message/doAdd','Admin\MessageController@doAdd');
	Route::get('/admin/message/edit/{id}','Admin\MessageController@edit');
	Route::post('/admin/message/doEdit','Admin\MessageController@doEdit');
	Route::get('/admin/message/delete/{id}','Admin\MessageController@delete');
	//旅游管理
	Route::get('/admin/tour/index', 'Admin\TourController@index');
	Route::get('/admin/tour/add','Admin\TourController@add');
	Route::post('/admin/tour/doAdd','Admin\TourController@doAdd');
	Route::get('/admin/tour/edit/{id}','Admin\TourController@edit');
	Route::post('/admin/tour/doEdit','Admin\TourController@doEdit');
	Route::get('/admin/tour/delete/{id}','Admin\TourController@delete');
	//时间轴管理
	Route::get('/admin/time/index', 'Admin\TimeController@index');
	Route::get('/admin/time/add','Admin\TimeController@add');
	Route::post('/admin/time/doAdd','Admin\TimeController@doAdd');
	Route::get('/admin/time/edit/{id}','Admin\TimeController@edit');
	Route::post('/admin/time/doEdit','Admin\TimeController@doEdit');
	Route::get('/admin/time/delete/{id}','Admin\TimeController@delete');
	//朋友管理
	Route::get('/admin/friends/index', 'Admin\FriendsController@index');
	Route::get('/admin/friends/add','Admin\FriendsController@add');
	Route::post('/admin/friends/doAdd','Admin\FriendsController@doAdd');
	Route::get('/admin/friends/edit/{id}','Admin\FriendsController@edit');
	Route::post('/admin/friends/doEdit','Admin\FriendsController@doEdit');
	Route::get('/admin/friends/delete/{id}','Admin\FriendsController@delete');
	//网站配置
	Route::get('/admin/webConfig/index', 'Admin\WebConfigController@index');
	//数据字典
	Route::get('/admin/dict/index', 'Admin\DictController@index');
	//操作日志
	Route::get('/admin/log/index', 'Admin\LogController@index');
	
	
});
Route::get('/login','Admin\LoginController@index');
Route::post('/doLogin','Admin\LoginController@doLogin');
//

//钱敏
Route::get('/qm', 'Hotel\Home\HomeController@index');
Route::get('/qm/admin', 'Hotel\Admin\AdminController@index');
Route::get('/qm/hotel', 'Hotel\Home\HotelController@index');
Route::get('/qm/services', 'Hotel\Home\ServicesController@index');
Route::get('/qm/reply', 'Hotel\Home\ReplyController@index');
Route::get('/qm/contact','Hotel\Home\ContactController@index');
Route::get('/qm/woker/index','Hotel\Admin\WokerController@index');
Route::get('/qm/woker/add','Hotel\Admin\WokerController@add');
Route::post('/qm/woker/doAdd','Hotel\Admin\WokerController@doAdd');
Route::get('/qm/woker/edit/{id}','Hotel\Admin\WokerController@edit');
Route::post('/qm/woker/doEdit','Hotel\Admin\WokerController@doEdit');
Route::get('/qm/woker/show/{id}','Hotel\Admin\WokerController@show');
Route::get('/qm/woker/delete/{id}','Hotel\Admin\WokerController@delete');
Route::get('/qm/user/index','Hotel\Admin\UserController@index');
Route::get('/qm/user/add', 'Hotel\Admin\UserController@add');
Route::post('/qm/user/doAdd', 'Hotel\Admin\UserController@doAdd');
Route::get('/qm/user/edit/{id}','Hotel\Admin\UserController@edit');
Route::get('/qm/user/delete/{id}','Hotel\Admin\UserController@delete');
Route::get('/qm/user/show/{id}','Hotel\Admin\UserController@show');
Route::get('/qm/home/index','Hotel\Admin\HomeController@index');
Route::get('/qm/category/index','Hotel\Admin\CategoryController@index');
Route::get('/qm/category/add','Hotel\Admin\CategoryController@add');
Route::post('/qm/category/doAdd','Hotel\Admin\CategoryController@doAdd');
Route::get('/qm/category/delete/{id}','Hotel\Admin\CategoryController@delete');
Route::get('/qm/category/edit/{id}','Hotel\Admin\CategoryController@edit');
Route::post('/qm/category/doEdit','Hotel\Admin\CategoryController@doEdit');
Route::get('/qm/home/add','Hotel\Admin\HomeController@add');
Route::post('/qm/home/doAdd','Hotel\Admin\HomeController@doAdd');
Route::get('/qm/home/delete/{id}','Hotel\Admin\HomeController@delete');
Route::get('/qm/home/edit/{id}','Hotel\Admin\HomeController@edit');
Route::post('/qm/home/doEdit','Hotel\Admin\HomeController@doEdit');
Route::get('/qm/home/show/{id}','Hotel\Admin\HomeController@show');
Route::get('/qm/foodcategory/index','Hotel\Admin\FoodCategoryController@index');
Route::get('/qm/foodcategory/add','Hotel\Admin\FoodCategoryController@add');
Route::post('/qm/foodcategory/doAdd','Hotel\Admin\FoodCategoryController@doAdd');
Route::get('/qm/foodcategory/delete/{id}','Hotel\Admin\FoodCategoryController@delete');
Route::get('/qm/foodcategory/edit/{id}','Hotel\Admin\FoodCategoryController@edit');
Route::post('/qm/foodcategory/doEdit','Hotel\Admin\FoodCategoryController@doEdit');
Route::get('/qm/food/index','Hotel\Admin\FoodController@index');
Route::get('/qm/food/add','Hotel\Admin\FoodController@add');
Route::post('/qm/food/doAdd','Hotel\Admin\FoodController@doAdd');
Route::get('/qm/food/delete/{id}','Hotel\Admin\FoodController@delete');
Route::get('/qm/food/edit/{id}','Hotel\Admin\FoodController@edit');
Route::post('/qm/food/doEdit','Hotel\Admin\FoodController@doEdit');
Route::get('/qm/food/show/{id}','Hotel\Admin\FoodController@show');
Route::get('/qm/server/index','Hotel\Admin\ServerController@index');
Route::get('/qm/server/add','Hotel\Admin\ServerController@add');
Route::post('/qm/server/doAdd','Hotel\Admin\ServerController@doAdd');
Route::get('/qm/server/delete/{id}','Hotel\Admin\ServerController@delete');
Route::get('/qm/server/edit/{id}','Hotel\Admin\ServerController@edit');
Route::post('/qm/server/doEdit','Hotel\Admin\ServerController@doEdit');
Route::get('/qm/server/show/{id}','Hotel\Admin\ServerController@show');
Route::get('/qm/order/index','Hotel\Admin\OrderController@index');
Route::get('/qm/order/add','Hotel\Admin\OrderController@add');
Route::post('/qm/order/doAdd','Hotel\Admin\OrderController@doAdd');
Route::get('/qm/order/delete/{id}','Hotel\Admin\OrderController@delete');
Route::get('/qm/order/edit/{id}','Hotel\Admin\OrderController@edit');
Route::post('/qm/order/doEdit','Hotel\Admin\OrderController@doEdit');
Route::get('/qm/order/show/{id}','Hotel\Admin\OrderController@show');
Route::get('/qm/close/index','Hotel\Admin\CloseController@index');
Route::get('/qm/close/add','Hotel\Admin\CloseController@add');
Route::post('/qm/close/doAdd','Hotel\Admin\CloseController@doAdd');
Route::get('/qm/close/delete/{id}','Hotel\Admin\CloseController@delete');
Route::get('/qm/close/edit/{id}','Hotel\Admin\CloseController@edit');
Route::post('/qm/close/doEdit','Hotel\Admin\CloseController@doEdit');
Route::get('/qm/close/show/{id}','Hotel\Admin\CloseController@show');
Route::get('/qm/clean/index','Hotel\Admin\CleanController@index');
Route::get('/qm/clean/add','Hotel\Admin\CleanController@add');
Route::post('/qm/clean/doAdd','Hotel\Admin\CleanController@doAdd');
Route::get('/qm/clean/delete/{id}','Hotel\Admin\CleanController@delete');
Route::get('/qm/clean/edit/{id}','Hotel\Admin\CleanController@edit');
Route::post('/qm/clean/doEdit','Hotel\Admin\CleanController@doEdit');
Route::get('/qm/clean/show/{id}','Hotel\Admin\CleanController@show');
Route::get('/qm/configure/index','Hotel\Admin\ConfigureController@index');
Route::get('/qm/configure/add','Hotel\Admin\ConfigureController@add');
Route::post('/qm/configure/doAdd','Hotel\Admin\ConfigureController@doAdd');
Route::get('/qm/configure/delete/{id}','Hotel\Admin\ConfigureController@delete');
Route::get('/qm/configure/edit/{id}','Hotel\Admin\ConfigureController@edit');
Route::post('/qm/configure/doEdit','Hotel\Admin\ConfigureController@doEdit');
Route::get('/qm/configure/show/{id}','Hotel\Admin\ConfigureController@show');