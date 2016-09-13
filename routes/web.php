<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Accomodation
Route::resource('accommodation','AccommodationController');

//Medical
Route::get('/medical','MedicalController@index');

//News & Media
Route::get('/media','MediaController@index');

//VCC
Route::get('/vcc','VCCController@index');

//Transportation
Route::resource('transportation','TransportationController');

//Special Event
Route::get('/specialevents','SpecialEventController@index');

//Food
Route::get('/food','FoodController@index');

//Darshan
Route::get('/darshan','DarshanController@index');

//Security
Route::get('/security','SecurityController@index');
