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

Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/projects', 'PageController@projects');
Route::get('/projects/club-app', 'PageController@clubApp');
Route::get('/projects/wheresmyspaceship', 'PageController@wheresmyspaceship');

Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/dashboard', 'PageController@dashboard');

Route::get('/contact', 'MessageController@contact');
Route::post('/contact', 'MessageController@postContact');