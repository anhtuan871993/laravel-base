<?php

Route::group([], function () {
    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('/user', 'LoginController@getUser');
    });
    Route::post('/login', 'LoginController@login');
});
