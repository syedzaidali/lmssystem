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
Route::post('student/register', 'Api\UserController@studentRegister');
Route::post('student/login', 'Api\UserController@studentLogin');
Route::get('courses', 'Api\CoursesController@courses');
Route::get('course/{id}','Api\CoursesController@courseDetails');
Route::post('add-to-cart','Api\CartController@addToCart');
Route::get('cart','Api\CartController@cart');
Route::post('checkout','Api\OrderController@checkout');
Route::get('my-orders/{id}','Api\OrderController@myOrders');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
