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
    return view('/welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/homepage', 'HomeController@homepage')->name('homepage');

route::resource('computer','ComputerController');
Route::get('/computercust', 'ComputerController@computercust')->name('computercust');

route::resource('iphone','IphoneController');
Route::get('/iphonecust', 'IphoneController@iphonecust')->name('iphonecust');

route::resource('buy','BuyController');
route::get('/buy/buat/{id}','BuyController@buat');
route::get('/buy/buat2/{id}','BuyController@buat2');
Route::get('/custorder', 'BuyController@custorder')->name('custorder');

route::resource('feedback','FeedbackController');
Route::get('/custfeedback', 'FeedbackController@custfeedback')->name('custfeedback');
route::post('/custfeedback/store','FeedbackController@store');

Route::get('/login/cust', 'Auth\LoginController@showCustLoginForm2');
Route::get('/register/cust', 'Auth\RegisterController@showCustRegisterForm');

Route::post('/login/cust', 'Auth\LoginController@custLogin');
Route::post('/register/cust', 'Auth\RegisterController@createCust');

Route::view('/home', 'home')->middleware('auth');
Route::view('/cust', 'cust');




