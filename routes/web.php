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

Route::get('/', function () {
    return view('welcome', ['body_class' => 'body_welcome_logged_out']);
});


Route::get('/profile/{name}', 'UserController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/** user **/
Route::post('/profile/{name}/profilepic','UserController@save_profile')->middleware('auth');


/** projects **/
Route::get('/profile/{name}/projects', 'ProjectController@index');
Route::get('/project','ProjectController@add');
Route::post('/project','ProjectController@create');
Route::get('/project/{project}','ProjectController@edit');
Route::post('/project/{project}','ProjectController@update');

/** threads **/
Route::get('/profile/{name}/threads', 'ThreadController@index')->middleware('auth');
Route::post('/thread/update','ThreadController@update')->middleware('auth');

/** web dev blog **/
Route::get('/behind-the-scenes', 'DevBlogController@index');
Route::get('/behind-the-scenes/{slug}', 'DevBlogController@post');

/** Admin area **/
Route::get('/superadmin', 'SuperAdminController@index')->middleware(['auth', 'superadmin']);
Route::get('/superadmin/users', 'SuperAdminController@users')->middleware(['auth', 'superadmin']);
Route::post('/superadmin/users/delete', 'SuperAdminController@deleteUser')->middleware(['auth', 'superadmin']);
Route::post('/superadmin/users/update', 'SuperAdminController@updateUser')->middleware(['auth', 'superadmin']);
Route::get('/superadmin/news', 'SuperAdminController@news')->middleware(['auth', 'superadmin']);
Route::post('/superadmin/news/publish','SuperAdminController@publishNews')->middleware(['auth', 'superadmin']);
Route::post('/superadmin/news/delete','SuperAdminController@deleteNews')->middleware(['auth', 'superadmin']);
Route::get('/superadmin/news/new','SuperAdminController@addNews')->middleware(['auth', 'superadmin']);
Route::get('/superadmin/news/{id}/edit','SuperAdminController@editNews')->middleware(['auth', 'superadmin']);
Route::post('/superadmin/news/save','SuperAdminController@createNews')->middleware(['auth', 'superadmin']);
Route::post('/superadmin/news/{id}/update','SuperAdminController@updateNews')->middleware(['auth', 'superadmin']);
