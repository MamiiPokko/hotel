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

Route::get('/room', 'HotelController@getroom');
Route::get('/welcome', 'HotelController@getwelcome');
Route::get('/map', 'HotelController@getmap');
Route::get('/contact', 'HotelController@getcontact');

//Roomtype
Route::get('/penhouse', 'HotelController@getpenhouse');
Route::get('/topfloor', 'HotelController@gettopfloor');
Route::get('/medium', 'HotelController@getmedium');
Route::get('/pool', 'HotelController@getpool');



Route::get('check-connect',function(){
 if(DB::connection()->getDatabaseName())
 {
 return "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
 }else{
 return 'Connection False !!';
 }

});


Route::get('change/{locale}', function ($locale) {
	App::setLocale($locale);
	// Session::set('locale', $locale);
	session(['locale' => $locale]);

	return Redirect::back();
});