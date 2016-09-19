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
Route::get('/about',function() {
    return view('about');
});

Route::get('/home', 'HomeController@index');
Route::get('/home/clearlogs', 'HomeController@destroy');

//Coordinator
Route::resource('coordinator','CoordinatorController');

//Accomodation
Route::resource('accommodation','AccommodationController');

//Medical
Route::resource('medical','MedicalController');

//Emergency
//Route::get('emergency/create','EmergencyController@create');
//Route::post('emergency/store','EmergencyController@store');
//Route::get('emergency/edit','EmergencyController@edit');
Route::resource('emergency','EmergencyController',
                  ['names'=>[
                              'index'=>'medical.index',
                              'store'=>'emergency.store',
                              'edit'=>'emergency.edit',
                              'update'=>'emergency.update',
                              'destroy'=>'emergency.destroy'
                            ]

                  ]);

//News & Media
Route::resource('media','MediaController');

//VCC
Route::resource('vcc','VCCController');

//Transportation
Route::resource('transportation','TransportationController');

//Special Event
Route::resource('specialevents','SpecialEventController');

//Food
Route::resource('food','FoodController');

//Darshan
Route::resource('darshan','DarshanController');

//Security
Route::resource('security','SecurityController');

//Faq
Route::resource('faq','FaqController');

Route::get('downloadExcel/{database}/{type}', 'ImportExportController@downloadExcel');
Route::post('importExcel/{database}', 'ImportExportController@importExcel');
