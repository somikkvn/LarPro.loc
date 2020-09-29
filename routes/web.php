<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/task', function () {
    return view('task');
});

Route::post('/guestbook/comment','MainController@guestbook_comment');

Route::get('/guestbook','MainController@guest')->name('guestbook');

Route::get('logout','Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/apiposts', function () {
    return view('apiposts');
});

Route::get('/axios_login', function () {
    return view('axios_login');
});

Route::get('/axiosRegister', function () {
    return view('axiosRegister');
});
