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

Route::get('/user', function () {
    echo 'xiaomazi';
});

Route::get('/index', 'IndexController@index');

Route::get('/User', 'User\IndexController@index');

Route::get('/userAdd', 'User\IndexController@userAdd');
Route::get('/userDel', 'User\IndexController@userDel');
Route::get('/userUpdate', 'User\IndexController@userUpdate');
Route::get('/userSelect', 'User\IndexController@userSelect');
Route::get('/userList', 'User\IndexController@userList');