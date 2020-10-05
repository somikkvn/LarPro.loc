<?php

Route::get('/', function () {
    return view('index');
});
Route::get('/task', function () {
    return view('task');
});
Route::get('/home', function () {
dd(auth()->check());
});
Route::post('/guestbook/comment','MainController@guestbook_comment');
Route::get('/guestbook','MainController@guest')->name('guestbook');
Route::get('logout','Auth\LoginController@logout');
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/apiposts', function () {
    return view('apiposts');
});

Route::get('/test','AxiosController@test');
//Route::post('/contact','ContactController@contact');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/seed','SeedController@select');
//Route::get('/seed','SeedController@run');
//Route::get('/seed','SeedController@index');


