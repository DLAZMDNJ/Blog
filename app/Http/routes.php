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
	
	Route::get('/root', 'Admin\AdminController@index');
	Route::get('/admin/message/index', 'Admin\MessageController@index');
	Route::get('/admin/message/add','Admin\MessageController@add');
	Route::post('/admin/message/doAdd','Admin\MessageController@doAdd');
	Route::get('/admin/message/edit/{id}','Admin\MessageController@edit');
	Route::post('/admin/message/doEdit','Admin\MessageController@doEdit');
	Route::get('/admin/message/delete/{id}','Admin\MessageController@delete');
	Route::get('/admin/tour/index', 'Admin\TourController@index');
	Route::get('/admin/tour/add','Admin\TourController@add');
	Route::post('/admin/tour/doAdd','Admin\TourController@doAdd');
	Route::get('/admin/tour/edit/{id}','Admin\TourController@edit');
	Route::post('/admin/tour/doEdit','Admin\TourController@doEdit');
	Route::get('/admin/tour/delete/{id}','Admin\TourController@delete');
	
	
	
});
Route::get('/login','Admin\LoginController@index');
Route::post('/doLogin','Admin\LoginController@doLogin');