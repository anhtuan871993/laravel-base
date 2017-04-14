<?php

Route::group(['middleware' => 'api-auth', 'prefix' => 'api', 'namespace' => 'Modules\Api\Http\Controllers'], function()
{
    Route::get('/user', 'ApiController@getUser');
    Route::get('/refresh_token', 'ApiController@refreshToken');
});
