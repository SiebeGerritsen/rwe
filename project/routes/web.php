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

Route::get('/', 'PagesController@home');
Route::get('/puntenInvoer', 'PagesController@puntenInvoer');
Route::get('/leaderbord', 'PagesController@leaderbord');

//projects (database)

Route::get('/projects', 'ProjectsController@index');

Route::get('/projects/create', 'ProjectsController@create', 'ProjectsController@getUserId');

Route::post('/projects', 'ProjectsController@store');

Route::get('/dynamic_dependent', 'DynamicDependent@index');
