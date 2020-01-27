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

Route::get('/', function () {
    return view('login');
});

Route::get('/newuser', 'signupController@register')->name('/newuser');

Route::post('/addnewuser','signupController@usersignup')->name('/addnewuser');

Route::post('/enteruser','signupController@login')->name('/enteruser');

Route::get('/logout','signupController@logout')->name('/logout');

Route::get('/showhomepage','signupController@index')->name('/showhomepage')->middleware('test');
