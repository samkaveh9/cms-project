<?php

use Illuminate\Support\Facades\Route;

Route::group([], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/products/{product}/show', 'HomeController@show')->name('single');
});
