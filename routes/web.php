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

Auth::routes();

Route::get('/profile/{id}', 'ProfileController@index')->name('profile');

Route::group(['middleware' => 'auth'], function () {
    Route::post('/user/info', 'UserInfoController@store');
    Route::post('/profile/education', 'ProfileController@education');
});
