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

use App\Http\Controllers\CategoryController;

Route::get('/', 'TestController@home');

Route::get('/libre/{nom}', 'TestController@indexparametre')->name('parametre');
Route::get('/libre', 'TestController@index')->name('autre');


Route::get('/adminroute', function () {
    return view('adminfolder.adminpage');
});

Route::get('/form', 'TestController@getform');
Route::post('/submitform', 'TestController@submitform');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('category', 'CategoryController');
/* remplace
Route::get('/category', 'CategoryController@index');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category', 'CategoryController@store');
Route::get('/category/{category}', 'CategoryController@show');
Route::get('/category/{category}/edit', 'CategoryController@edit');
Route::put('/category/{category}', 'CategoryController@update');
Route::delete('/category/{category}', 'CategoryController@destroy');


*/
