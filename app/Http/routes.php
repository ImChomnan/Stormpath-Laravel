<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// This route is only accessible by a logged in user 
Route::get('dashboard', ['middleware' => ['stormpath.auth'], function() {
    return view('dashboard');
}]);

// This route is only accessible by a guest
Route::get('guests', ['middleware' => ['stormpath.guest'], function() {
    return 'You are a guest!';
}]);
