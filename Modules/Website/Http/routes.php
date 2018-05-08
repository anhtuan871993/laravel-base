<?php

Route::group(['middleware' => 'web', 'prefix' => 'website', 'namespace' => 'Modules\Website\Http\Controllers'], function()
{
    Route::get('/', 'WebsiteController@index');
});
