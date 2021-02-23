<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmployeesListController extends Controller
{
    public function list(){
        $employees = \App\UserModel::where('isEmployee', 1)->get();
        return view('employees_list', ['employees' => $employees]);
    }
    public function detail($id){
        $employees = \App\Employee::all();
        foreach ($employees as $employee) {
            if($employee->id === (int)$id){
                return view('employee_detail', \compact('employee'));
            }
        }
    }
}
