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
    //echo "its wo4kingj";
    return view('welcome');
});

Route::get('admin', function () {
    //echo "its wo4kingj";
    return view('admin_template');
});

Route::get('test', 'TestController@index');
Route::auth();

Route::get('/home', 'HomeController@index');