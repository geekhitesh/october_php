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


Route::get('/welcome','WelcomeController@greet');

Route::get('/welcome/{name}','WelcomeController@greetMe');



Route::get('/employee/details','EmployeeController@userDetail');

Route::get('/environment','EnvironmentController@testEnv');


Route::post('/post','PostController@index');


Route::get('/sum/{num1}/{num2}','CalculatorController@sum');



Route::get('/employee/all','EmployeeController@all');
Route::get('/employee/get/{id}','EmployeeController@get');
Route::get('/employee/filter','EmployeeController@filteredEmployees');
Route::get('/employee/create/{name}/{age}/{city}','EmployeeController@create');
Route::get('/employee/update/{id}/{age}','EmployeeController@update');