<?php

Route::group(['middleware' => 'web', 'prefix' => 'website'], function()
{
    Route::get('/', 'WebsiteController@index');
});
