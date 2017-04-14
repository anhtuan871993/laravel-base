<?php
Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => ['web']], function () {
        Route::get('/login', 'AdminController@login')->name('admin-login-get');
        Route::post('/login', 'AdminController@login')->name('admin-login-post');
    });

    Route::group(['middleware' => ['admin']], function () {
        Route::get('/index', 'AdminController@index')->name('admin-index');
        Route::get('/logout', 'AdminController@logout')->name('admin-logout');
    });
});