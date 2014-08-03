<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/seminars', 'HomeController@seminars');
Route::get('/seminar', 'HomeController@seminar');
Route::get('/feedback', 'HomeController@feedback');
Route::get('/lektors', 'HomeController@lektors');
Route::get('/contacts', 'HomeController@contacts');
