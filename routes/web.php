<?php

Auth::routes(['Verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/',function(){
    return "Welcome this is home page";
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
