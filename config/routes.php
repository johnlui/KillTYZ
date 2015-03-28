<?php

use TinyLara\TinyRouter\TinyRouter as Route;

Route::get('/', 'HomeController@home');
Route::get('login', 'AuthController@login');

Route::post('storage', 'HomeController@storage');

Route::error(function() {
  throw new Exception("404 Not Found");
});

Route::dispatch('View@process');