<?php

Route::get('/json', function () {
    return view('json');
});


Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/search', 'SearchController@index')->name('result');
