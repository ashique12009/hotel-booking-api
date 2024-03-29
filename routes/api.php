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

Route::get('hotels', 'HotelController@getHotels');
Route::get('hotel/{id}', 'HotelController@getHotelById');
Route::post('hotel', 'HotelController@hotelSave');
Route::put('hotel/{id}', 'HotelController@hotelUpdate');
Route::delete('hotel/{id}', 'HotelController@hotelDelete');