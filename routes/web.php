<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| use /
*/


Route::get('/users','SiteController@users');
Route::get('/users/{user}/cars','SiteController@carsByUser');
Route::get('/','SiteController@home');

Route::group(["prefix" => "/dashboard"], function () {
    Route::resource('users', 'UserController');
    Route::resource('cars', 'CarController');
});



