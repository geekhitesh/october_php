<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeDetail;

class EmployeeController extends Controller
{
    //

    private $users;

    public function __construct() {
		
    }


    public function all() {
		
		$employee_list = EmployeeDetail::all();


		
		//var_dump($employee_list);

		return $employee_list->max('age');

    }
	
	public function get($id) {
		
		$employee = EmployeeDetail::find($id);

		return $employee;
	}	
	

	public function filteredEmployees() {

		$filteredEmployees = EmployeeDetail::where('city','Noida')
											->where('age','>=','29')
											->get();

		return $filteredEmployees;
	}

	public function create($name,$age,$city) {
		$employee = new EmployeeDetail();

		$employee->name = $name;
		$employee->age = $age;
		$employee->city = $city;

		$employee->save();

		return $employee->id;
	}	


	public function update($id,$age) {

		$employee = EmployeeDetail::find($id);

		$employee->age = $age;

		$employee->save();

		return $employee->age;
	}

}
