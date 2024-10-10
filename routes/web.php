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
Route::get('/', 'HomeController@index');
Route::get('/close', 'ReserveController@close');


Route::get('/rapports/{filters?}', 'RapportController@show_rapports');
Route::get('/add_rapport', 'RapportController@add_rapport');
Route::get('/add_rapport_2/{id}', 'RapportController@add_rapport_2');
Route::get('/add_outils/{id}', 'RapportController@add_outils');

Route::post('/insert_rapport', 'RapportController@insert_rapport');
Route::post('/insert_activity', 'RapportController@insert_activity');
Route::post('/insert_outils', 'RapportController@insert_outils');
Route::post('/insert_chemicals', 'RapportController@insert_chemicals');

/** USER ROUTES **/
Route::get('/users', 'UsersController@users');
Route::post('/add_user', 'UsersController@add_user');
Route::get('/modify_user/{id}', 'UsersController@modify_user');
Route::post('/update_user', 'UsersController@update_user');
Route::post('/delete_user', 'UsersController@delete_user');
Route::post('/chnage_profile_photo','UsersController@chnage_profile_photo');

/** RESERVES ROUTES */
Route::get('/add_reserve/{rapport}/{outil}/{state}', 'ReserveController@add_reserve');
Route::get('/reserve/{id_reserve}', 'ReserveController@reserve');

Route::post('/insert_reserve', 'ReserveController@insert_reserve');
Route::post('/update_reserve', 'ReserveController@update_reserve');

Route::get('/reserve_before/{rapport}/{outil}/{state}', 'ReserveController@reserve_before');
Route::get('/reserve_after/{rapport}/{outil}/{state}', 'ReserveController@reserve_after');
Route::get('/demande_access/{id?}', 'ReserveController@demande_access');
Route::get('/engagement/{id?}', 'ReserveController@engagement');
Route::get('/visite/{id?}', 'ReserveController@visite');
Route::get('/prise/{id?}', 'ReserveController@prise');
Route::get('/after_prise/{id?}', 'ReserveController@after_prise');



/** TOOLS ROUTES **/

Route::get('/tools/{type}', 'ToolsController@tools');
Route::get('/edit_tool/{id}/{type}', 'ToolsController@edit_tool');
Route::get('/add_tool/{type}', 'ToolsController@add_tool');
Route::get('/delete_tool/{id}/{type}', 'ToolsController@delete_tool');

Route::post('/insert_tool', 'ToolsController@insert_tool');
Route::post('/update_tool', 'ToolsController@update_tool');

/** CHEMICALS ROUTES **/

Route::get('/chemicals/', 'ToolsController@chemicals');
Route::get('/edit_chemical/{id}', 'ToolsController@edit_chemical');
Route::get('/add_chemical/', 'ToolsController@add_chemical');
Route::get('/delete_chemical/{id}', 'ToolsController@delete_chemical');

Route::post('/insert_chemical', 'ToolsController@insert_chemical');
Route::post('/update_chemical', 'ToolsController@update_chemical');

/** LABOS ROUTES **/

Route::get('/labos/', 'ModuleController@labos');
Route::get('/edit_labo/{id}', 'ModuleController@edit_labo');
Route::get('/add_labo/', 'ModuleController@add_labo');
Route::get('/delete_labo/{id}', 'ModuleController@delete_labo');

Route::post('/insert_labo', 'ModuleController@insert_labo');
Route::post('/update_labo', 'ModuleController@update_labo');


/** NIVEAUX ROUTES **/

Route::get('/niveaux/', 'ModuleController@niveaux');
Route::get('/edit_niveau/{id}', 'ModuleController@edit_niveau');
Route::get('/add_niveau/', 'ModuleController@add_niveau');
Route::get('/delete_niveau/{id}', 'ModuleController@delete_niveau');

Route::post('/insert_niveau', 'ModuleController@insert_niveau');
Route::post('/update_niveau', 'ModuleController@update_niveau');

/** MODULES ROUTES **/

Route::get('/modules/', 'ModuleController@modules');
Route::get('/edit_module/{id}', 'ModuleController@edit_module');
Route::get('/add_module/', 'ModuleController@add_module');
Route::get('/delete_module/{id}', 'ModuleController@delete_module');

Route::post('/insert_module', 'ModuleController@insert_module');
Route::post('/update_module', 'ModuleController@update_module');


/** TEACHERS ROUTES **/

Route::get('/teachers/', 'TeachersController@teachers');
Route::get('/edit_teacher/{id}', 'TeachersController@edit_teacher');
Route::get('/add_teacher/', 'TeachersController@add_teacher');
Route::get('/delete_teacher/{id}', 'TeachersController@delete_teacher');

Route::post('/insert_teacher', 'TeachersController@insert_teacher');
Route::post('/update_teacher', 'TeachersController@update_teacher');

/** AUTH ROUTES **/
Auth::routes();
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');


Auth::routes();


