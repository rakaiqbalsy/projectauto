<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//User Route
Route::group(['namespace' => 'User'], function(){
	//halaman awal user
	Route::get('/','HomeController@index');

	//Halaman dari event
	Route::get('user/event','UieventController@index');

	//Halaman dari catalog
	Route::get('user/catalog','UicatalogController@index');

	//get Detail dari post berita
	Route::get('detail/{news}','BeritaController@post')->name('detail');

	//get Detail dari event
	Route::get('detail-event{event}','EventController@post')->name('detail-event');

	//get Detail dari catalog
	Route::get('detail-catalog{car}','CatalogController@post')->name('detail-catalog');
});



//Admin Route
Route::group(['namespace'=> 'Admin'], function(){

	Route::get('admin/home', 'HomeController@index')->name('admin.home');

	Route::resource('admin/user','UserController');

	Route::resource('admin/berita','BeritaController');

	Route::resource('admin/catalog','CatalogController');

	Route::resource('admin/event','EventController');

	Route::resource('admin/category', 'CategoryController');

	Route::resource('admin/tag', 'TagController');

	Route::resource('admin/nilai', 'ReviewController');

	Route::resource('admin/testdrive', 'DriveController');
	
	//admin auth routes
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');

	Route::post('admin-login', 'Auth\LoginController@login');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
