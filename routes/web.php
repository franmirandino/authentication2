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

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('admin/users', 'UsersController@index')->name('admin.users.index');


Route::post('impersonation', 'ImpersonationsController@store')->name('impersonation.store');
Route::delete('impersonation', 'ImpersonationsController@destroy')->name('impersonation.destoy');

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');