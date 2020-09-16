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

Route::apiResources([
    'user' => 'ADMINAPI\UserController',
    'categories' => 'ADMINAPI\CategoryController',
    'products' => 'ADMINAPI\ProductsController',
    '/' => 'ADMINAPI\PagesController',
    /* frontend apis */
    'fetchcategory' => 'FRONTAPI\CategoryContoller'
    /* end of frontend apis */
]);
Route::get('profile','ADMINAPI\UserController@profile');
Route::get('findUser','ADMINAPI\UserController@search');
Route::put('profile','ADMINAPI\UserController@updateProfile');


//fetch orders
Route::get('orders/{type?}','ADMINAPI\OrderController@Orders');
