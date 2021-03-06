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
    return view('auth.login');
});

Route::get('/home',['middleware' => 'auth','uses' => 'HomeController@getHome', 'as' => 'home']);
Route::get('/auth/login',['uses' => 'HomeController@getLogin', 'as' => 'login']);
Route::post('/auth/login',['uses' => 'HomeController@postLogin', 'as' => 'logar']);
Route::get('/auth/logout',['uses' => 'HomeController@getLogout', 'as' => 'logar']);

