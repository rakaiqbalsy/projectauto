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

	//get Detail dari post
	Route::get('detail','BeritaController@index')->name('detail');
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
});