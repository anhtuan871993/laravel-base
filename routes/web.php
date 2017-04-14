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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name("home");

//    Route::get('admin/login', '\Modules\Admin\Http\Controllers\AdminController@login')->name('admin-login-get');
//    Route::post('admin/login', '\Modules\Admin\Http\Controllers\AdminController@login')->name('admin-login-post');
});

//Route::group(['middleware' => ['admin']], function () {
//    Route::get('admin/index', '\Modules\Admin\Http\Controllers\AdminController@index')->name('admin-index');
//    Route::get('admin/logout', '\Modules\Admin\Http\Controllers\AdminController@logout')->name('admin-logout');
//});

Auth::routes();

Route::get('/home', 'HomeController@index');
