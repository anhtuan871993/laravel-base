<?php

Route::group(['middleware' => 'web', 'prefix' => 'common', 'namespace' => 'Modules\Common\Http\Controllers'], function()
{
    Route::get('/', 'CommonController@index');
});
