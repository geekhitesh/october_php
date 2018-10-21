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



Route::get('/test', function() {

//********************Sample tests for Student*******************
	//return App\Student::all();
	//return App\Student::find(10001);
	//return App\Student::find(10001)->phone;

//********************Sample tests for Phone*********************
	//return App\Phone::find(50002);
	//return App\Phone::find(50002)->student;


//********************Sample tests for Tutorial*******************

//return App\Tutorial::find(90001);
//return App\Tutorial::find(90001)->lecture;


//********************Sample tests for Lectures********************
//return App\Lecture::find(40001);
//return App\Lecture::find(40001)->tutorial;

//********************Sample tests for Tutorial & Student***********

	//return App\Tutorial::find(90001);
   // return App\Tutorial::find(90001)->student;

	//return App\Student::find(10001);
	//return App\Student::find(10001)->tutorial;


//********************Sample tests for Lectures From Student*********

	return App\Student::with('tutorial.lecture')->find(10001);


//********************Tutorial & Lecture Eager Loading*********
	//return App\Tutorial::with('Lecture')->find(90001);


	/*
		1. List of all students
		2. student by id
		3. tutorial by student 
		4.
		5.
		6.

	*/
});



	Route::get('/student/create', function() {
		
		/*$student =new  App\Student();

		$student->name = 'Dheeraj';
		$student->age = 20;

		$student->create();*/

		$student = App\Student::create(['name' => 'Dheeraj',
	                                     'age' => '10']);



		return "student is created. id:".$student->id;

	});




	Route::get('/student/create/mass/{array}', function($array) {

		$student = App\Student::create($array);



		return "student is created. id:".$student->id;

	});