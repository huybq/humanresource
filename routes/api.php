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

//Route::post('auth/login', 'Api\UsersController@login');

Route::group(['middleware' => 'jwt.auth'], function () {
    // User
    Route::get('users/search', 'Api\UsersController@search');
    Route::resource('users', 'Api\UsersController');

    // Address
    Route::get('address', 'Api\AddressController@index');
    Route::get('address/search', 'Api\AddressController@search');
});


