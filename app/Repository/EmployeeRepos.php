<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class EmployeeRepos
{
 public static function getEmployees()
 {
  $employees = DB::table('employee')->get();
  return $employees;
 }

 public static function getEmployeeById($id)
 {
  $employee = DB::table('employee')->where('id', $id)->first();
  return $employee;
 }

 public static function insertEmployee($data)
 {
  $employee = DB::table('employee')->insert($data);
  
  return $employee;
 }

 public static function updateEmployee($id, $data)
 {
  $employee = DB::table('employee')->where('id', $id)->update($data);
  return $employee;
 }

 public static function deleteEmployee($id)
 {
  $employee = DB::table('employee')->where('id', $id)->delete();
  return $employee;
 }
}
