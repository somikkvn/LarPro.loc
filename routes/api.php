<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('post', API\PostController::class);


Route::apiResource('apipost', API\ApipostController::class);


//Route::post('axios_test', function (){
//    return 'Hello';
//});
//Route::group([
//
//    'middleware' => 'api',
//    'namespace' => 'App\Http\Controllers',
//    'prefix' => 'auth'
//
//], function ($router) {
//
//    Route::post('login', 'AuthController@login');
//    Route::post('logout', 'AuthController@logout');
//    Route::post('refresh', 'AuthController@refresh');
//    Route::post('me', 'AuthController@me');
//
//});


