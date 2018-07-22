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



Route::get('/menu/add/{name}','MenuController@Add');
Route::get('/menu/insert/{name}','MenuController@Insert');
Route::get('/index','MenuController@Index');

Route::prefix('system')->group(function () {

    Route::get('/','admin\LoginController@Index');


    Route::post('/login','admin\LoginController@Login');


    Route::get('/dashboard','admin\DashboardController@Index');
    Route::get('/user','admin\UserController@Index');
    Route::get('/user/create','admin\UserController@Create');

    Route::post('user','admin\UserController@Store');

});







Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
