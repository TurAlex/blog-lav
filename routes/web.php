<?php
//Home page
Route::get('/','HomeController@index');
Route::get('/post/{slag}','HomeController@show')->name('post.show');
Route::get('/tags/{slag}','HomeController@tag')->name('tag.show');
Route::get('/category/{slag}','HomeController@category')->name('category.show');
Route::get('/{slag}','HomeController@slug');

Route::post('/sendmail','SendmailsController@contactMail');


Route::group(['middleware' => 'auth'], function (){
	Route::get('/logout', 'AuthController@logout');
	Route::get('/profile', 'ProfileController@index');
	Route::post('/profile', 'ProfileController@store');
	Route::post('/users-comments','CommentsController@store');
});

Route::group(['middleware' => 'guest'], function (){
	Route::get('/register', 'AuthController@registerForm');
	Route::post('/register', 'AuthController@register');
	Route::get('/login', 'AuthController@loginForm')->name('login');
	Route::post('/login', 'AuthController@login');
});

//////////////////////// ADMIN ///////////////////

Route::group([
	'prefix'      => 'admin',
	'namespace'   => 'Admin' ,
	'middleware'  => 'admin'
],function (){
	Route::get('/', 'DashboardController@index');
	Route::resource('/categories', 'CategoriesController');
	Route::resource('/tags', 'TagsController');
	Route::resource('/users', 'UsersController');
	Route::resource('/posts', 'PostsController');
	Route::resource('/comments', 'CommentsController');
	Route::resource('/pages', 'PagesController');
	Route::get('/comments/toggle/{id}', 'CommentsController@toggle');
	Route::get('/posts/toggle/{id}', 'PostsController@toggle');
	Route::get('/categories/toggle/{id}', 'CategoriesController@toggle');
	Route::get('/tags/toggle/{id}', 'TagsController@toggle');
	Route::get('/pages/toggle/{id}', 'PagesController@toggle');
});






