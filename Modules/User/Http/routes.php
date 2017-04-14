<?php

Route::group(['middleware' => 'web', 'prefix' => 'user'], function()
{
    Route::get('/', 'UserController@index');
});
