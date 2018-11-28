<?php

Route::middleware('jwt.auth')->get('users', function () {
    return auth('api')->user();
});

Route::group([

   
    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
