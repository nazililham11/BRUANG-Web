<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('login', 'Api\AuthController@login');

Route::group(['middleware' => 'auth:api'], function(){
   	Route::post('logout', 'Api\AuthController@logout')->name('api.logout');
   	Route::post('details', 'Api\AuthController@details')->name('api.details');

	Route::post('rooms', 'Api\RoomController@index')->name('api.getRooms');
	Route::post('bookings', 'Api\BookingController@index')->name('api.getBookings');
	Route::post('createbookin', 'Api\BookingController@store')->name('api.create.booking');
});