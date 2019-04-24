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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', 'PagesController@index');
Route::get('/division', 'DivisionController@index');
Route::get('/district', 'DivisionController@district');
Route::get('/upozilla', 'DivisionController@upozilla');
Route::get('/union', 'DivisionController@union');
Route::get('/blogs', 'PagesController@blogs');
Route::get('/contact_us', 'PagesController@contact_us');
Route::get('/services', 'PagesController@services');
Route::get('/login', 'RegistrationController@login');
//Route::get('/sign_up', 'RegistrationController@create');
//Route::get('/services', 'PagesController@services');


Route::post('/division', 'DivisionController@store');
//Route::get('/services', 'PagesController@services');


Route::resource('/registrar', 'RegistrationController');
Route::resource('/create', 'RegistrationController');
Route::resource('posts', 'PostsController');
