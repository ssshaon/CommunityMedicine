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
    return view('welcome');
});

Route::get('/admin', 'UserController@hologin');


Route::get('/admin/center/medicine', 'UserController@medicine');
Route::get('/admin/center/doctor', 'UserController@doctor');
Route::get('/admin/center/patient', 'UserController@patient');
Route::get('/admin/user/create', 'UserController@create');
Route::post('/admin/user/store','UserController@store');
Auth::routes();

Route::get('/home', 'HomeController@index');
