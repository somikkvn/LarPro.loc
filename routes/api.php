<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('post', API\PostController::class);

//Route::post('axios_test', function (){
//    return 'Hello';
//});
