<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Auth::routes();

// Home
Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');

// About

// Events
Route::get('/events', 'PagesController@events');

// Members
Route::get('/members', 'PagesController@members');

// Contact
Route::get('/contact', 'PagesController@contact');

// Adminpanel
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
