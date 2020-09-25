<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('axios_test', function (){
//    return 'Hello';
//});
