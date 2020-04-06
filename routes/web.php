<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();

Auth::routes([
    'register' => false
]);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/adminpanel', 'AdminController@index')->name('home');
    Route::resource('/adminpanel//services', 'ServiceController');
    Route::resource('/adminpanel//orders', 'OrderController');
    Route::resource('/adminpanel//users', 'UserController');
});

Route::get('/service_form/{service}', 'OrderController@service_form')->name('service_form');
Route::get('/', 'PageController@index');
