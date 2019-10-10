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

/* <--------------------------------- FrontEnd Routes ---------------------------------------> */

Route::get('/', 'HomeController@index')->name('index');

Route::get('/post/{slug}', 'HomeController@getPost')->name('get.post');

Route::get('/tag/{id}', 'HomeController@getTag')->name('get.tag');

Route::get('/category/{slug?}/{id}', 'HomeController@getCategory')->name('get.category');

Route::get('/search', 'HomeController@searchQuery')->name('search');

Route::get('/temp', 'TempController@index')->name('temp');


/* <--------------------------------- BackEnd Routes ---------------------------------------> */

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

	/*		<--------------------------- Home Controller ----------------------------->		*/

	Route::get('/dashboard', 'AdminController@index')->name('dashboard');

	/*		<-------------------------- Post Controller ------------------------------>		*/

	Route::get('/post', 'PostController@index')->name('post');
	
	Route::get('/post/create', 'PostController@create')->name('post.create');	

	Route::get('/post/drafts', 'PostController@drafts')->name('post.drafts');

	Route::post('/post/store', 'PostController@store')->name('post.store');

	Route::get('/post/edit/{id}', 'PostController@edit')->name('post.edit');

	Route::post('/post/update/{id}', 'PostController@update')->name('post.update');

	Route::get('/post/destroy/{id}', 'PostController@destroy')->name('post.destroy');

	Route::get('/post/recycle', 'PostController@recycle')->name('post.recycle');

	Route::get('/post/recycle/restore/{id}', 'PostController@restore')->name('post.restore');

	Route::get('/post/recycle/remove/{id}', 'PostController@remove')->name('post.remove');

	Route::get('/post/recycle/clean', 'PostController@clean')->name('post.clean');


	/*		<-------------------------- Category Controller -------------------------->		*/

	Route::get('/category', 'CategoryController@index')->name('category');

	Route::get('/category/create', 'CategoryController@create')->name('category.create');

	Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');

	Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');

	Route::post('/category/store', 'CategoryController@store')->name('category.store');

	Route::get('/category/destroy/{id}', 'CategoryController@destroy')->name('category.destroy');


	/*		<-------------------------- Tag Controller -------------------------->		*/

	Route::get('/tags', 'TagController@index')->name('tags');

	Route::get('/tag/create', 'TagController@create')->name('tag.create');

	Route::post('/tag/store', 'TagController@store')->name('tag.store');

	Route::get('/tag/edit/{id}', 'TagController@edit')->name('tag.edit');

	Route::post('/tag/update/{id}', 'TagController@update')->name('tag.update');

	Route::get('/tag/destroy/{id}', 'TagController@destroy')->name('tag.destroy');

	
	/*		<-------------------------- User Controller -------------------------->		*/	

	Route::get('/users', 'UserController@index')->name('users');

	Route::get('/user/create', 'UserController@create')->name('user.create');

	Route::post('/user/store', 'UserController@store')->name('user.store');

	Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');

	Route::post('/user/update/{id}', 'UserController@update')->name('user.update');

	Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete');

	Route::get('/user/create/admin/{id}', 'UserController@create_admin')->name('create.admin');

	Route::get('/user/remove/admin/{id}', 'UserController@remove_admin')->name('remove.admin');



	/*		<-------------------------- Profile Controller -------------------------->		*/

	Route::get('/profile', 'ProfileController@index')->name('profile');

	Route::get('/profile/edit', 'ProfileController@create')->name('profile.create');

	Route::post('/profile/store', 'ProfileController@store')->name('profile.store');

	Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');

	Route::post('/profile/update', 'ProfileController@update')->name('profile.update');


	/*		<-------------------------- Preferences Controller -------------------------->		*/

	Route::get('/preferences', "PreferenceController@index")->name('preferences');

	Route::get('/preference/edit', "PreferenceController@edit")->name('preference.edit');

	Route::post('/preference/update', "PreferenceController@update")->name('preference.update');
	
});
