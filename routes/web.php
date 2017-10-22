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
    return view('welcome');
});


//注册
Route::get('/register', 'RegisterController@index');
Route::post('register', 'RegisterController@register');
//登陆
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');