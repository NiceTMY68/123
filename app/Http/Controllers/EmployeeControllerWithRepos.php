<?php

namespace App\Http\Controllers;

use App\Repository\EmployeeRepos;
use App\Repository\CategoryRepos;

//use App\Repository\FoodRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeControllerWithRepos extends Controller
{
  public function index()
  {
    $employees = EmployeeRepos::getEmployees();
    return view(
      'Zoo.EmployeeWithRepos.index',
      [
        'employees' => $employees,
      ]
    );
  }

  public function show($id)
  {
    $employee = EmployeeRepos::getEmployeeById($id); //this is always an array of objects

    return view(
      'Zoo.EmployeeWithRepos.show',
      compact('employee')
    );
  }

  public function create()
  {
    return view(
      'Zoo.EmployeeWithRepos.create',
    );
  }

  public function store(Request $request)
  {
    $employee = EmployeeRepos::insertEmployee($request->except('_token'));

    return redirect('employees');
  }

  public function edit($id)
  {
    $employee = EmployeeRepos::getEmployeeById($id); //this is always an array

    return view(
      'Zoo.EmployeeWithRepos.edit',
      compact('employee')
    );
  }

  public function update(Request $request, $id)
  {
    $employee = EmployeeRepos::getEmployeeById($id);

    $employee->name = $request->input('name');
    $employee->age = $request->input('age');
    $employee->email = $request->input('email');

    EmployeeRepos::updateEmployee($id, (array)$employee);

    return redirect('employees');
  }

  public function destroy($id)
  {
    //        FoodRepos::deleteAnimalFoodRelationship($id);
    EmployeeRepos::deleteEmployee($id);

    return redirect('employees');
  }
}
