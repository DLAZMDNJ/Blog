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
Route::get('/qm/category/index','Hotel\Admin\CategoryController@index');
Route::get('/qm/home/index','Hotel\Admin\HomeController@index');
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