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
Route::get('products', 'productsController@index');
Route::get('products/{id}', 'productsController@show');
Route::post('products', 'productsController@store');
Route::put('products', 'productsController@store');
Route::delete('products/{id}', 'productsController@destroy');


Route::get('users', 'userController@index');
Route::get('users/{id}', 'userController@show');
Route::post('users', 'userController@store');
Route::put('users', 'userController@store');
Route::delete('users/{id}', 'userController@destroy');


Route::get('dealings', 'User\dealingController@index');
Route::get('dealings/{id}', 'dealingController@show');
Route::post('dealings', 'dealingController@store');
Route::put('dealings', 'dealingController@store');
Route::delete('dealings/{id}', 'dealingController@destroy');


Route::get('rdeal', 'routdealController@index');


Route::get('parts', 'partController@index');
Route::get('parts/{id}', 'partController@show');
Route::post('parts', 'partController@store');
Route::put('parts', 'partController@store');
Route::delete('parts/{id}', 'partController@destroy');


Route::get('departs', 'departController@index');
Route::get('departs/{id}', 'departController@show');
Route::post('departs', 'departController@store');
Route::put('departs', 'departController@store');
Route::delete('departs/{id}', 'departController@destroy');
