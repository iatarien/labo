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

Route::get('/home', 'Auth\LoginController@logout');

Route::get('/add_rapport', 'RapportController@add_rapport');


/** USER ROUTES **/
Route::get('/users', 'UsersController@users');
Route::post('/add_user', 'UsersController@add_user');
Route::get('/modify_user/{id}', 'UsersController@modify_user');
Route::post('/update_user', 'UsersController@update_user');
Route::post('/delete_user', 'UsersController@delete_user');
Route::post('/chnage_profile_photo','UsersController@chnage_profile_photo');

/** OPERATIONS ROUTES */
Route::get('/', 'HomeController@index');



/** AUTH ROUTES **/
Auth::routes();
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');


Auth::routes();


