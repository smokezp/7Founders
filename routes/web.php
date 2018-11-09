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

use App\Http\Middleware\CheckExistProfile;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/profile/{id}', 'ProfileController@index')->name('profile')->middleware(CheckExistProfile::class);

Route::group(['middleware' => 'auth'], function () {
    Route::post('/user/info', 'UserInfoController@store');
    Route::post('/profile/education', 'ProfileController@education');
    Route::post('/profile/recommendation', 'ProfileController@recommendation');
});
