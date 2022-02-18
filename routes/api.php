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
Route::group([
    'middleware' => ['cors']
], function ($router) {
    //Add you routes here, for example:
    Route::get('/category', 'Api\CategoryController@index');
    Route::get('/detailcategory/{id}', 'Api\CategoryController@detail');
    Route::get('/deletecategory/{id}', 'Api\CategoryController@deleteCategory');
    Route::post('/addcategory', 'Api\CategoryController@addCategory');
    Route::get('/addcategory', 'Api\CategoryController@index');
});
