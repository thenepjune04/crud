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

Route::get('/vehicle', 'VehicleController@index');
Route::get('/vehicle/create', 'VehicleController@create');
Route::post('/vehicle', 'VehicleController@store');
Route::get('/vehicle/{id}', 'VehicleController@show');
Route::get('/vehicle/{id}/edit', 'VehicleController@edit');
Route::put('/vehicle/{id}', 'VehicleController@update');
Route::delete('/vehicle/{id}', 'VehicleController@destroy');

Route::get('/buffet', 'BuffetController@index');
Route::get('/buffet/create', 'BuffetController@create');
Route::post('/buffet', 'BuffetController@store');
Route::get('/buffet/{id}', 'BuffetController@show');
Route::get('/buffet/{id}/edit', 'BuffetController@edit');
Route::put('/buffet/{id}', 'BuffetController@update');
Route::delete('/buffet/{id}', 'BuffetController@destroy');
Route::resource('post', 'PostController');
Route::resource('buffet', 'buffetController');
Route::resource('newbuffet', 'newbuffetController');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get("/teacher" , function (){
	    return view("teacher/index");
    });
});



Route::get("/student" , function (){
	return view("student/index");
});
Route::get('/table', function () {
    return view('table');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('june', function(){
    return view('june');
});

Route::get('/example/create', 'ExampleController@create');
Route::post('/example', 'ExampleController@store');
Route::get('/example/pdf', 'ExampleController@pdf_index');
Route::resource('book', 'BookController');