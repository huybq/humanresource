<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
Guideline
1. Clone project
2. Copy file .env.example -> change file name to .env
3. Config database connection information
4. Run command 
    composer update
5. Run command 
    php artisan key:generate 
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/login', 'Api\UsersController@login');

Route::group(['middleware' => 'jwt.auth'], function () {
    // User
    Route::get('users/search', 'Api\UsersController@search');
    Route::resource('users', 'Api\UsersController');

    Route::resource('address', 'Api\MstAddressController');

    Route::resource('business', 'Api\MstBusinessController');

    Route::resource('career', 'Api\MstCareerController');

    Route::resource('company', 'Api\MstCompanyController');

    Route::resource('employment', 'Api\MstEmploymentController');
    
    Route::resource('level', 'Api\MstLevelController');
});


