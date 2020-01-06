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

Auth::routes();

Route::get('/login', 'Auth\LoginController@showAdminLoginForm')->name('admin.login');
Route::post('/login', 'Auth\LoginController@adminLogin')->name('admin.post_login');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
	Route::view('/home', 'home')->name('admin.home');
	Route::post('/booking/{id}', 'BookingController@action')->name('admin.booking.action');
	Route::get('/booking', 'BookingController@index')->name('admin.booking.index');
    Route::get('logout', 'Auth\LoginController@logout')->name('admin.logout');
});