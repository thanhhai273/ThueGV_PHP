<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
  // public function findByName(Request $request)
  // {
  //   $employee = DB::table('employees')->where('name', 'like', '%' . $request->get('q') . '%')->get();
  //   return view('employee_detail', compact('employee'));
  //   //return response()->json($employee);
  // }
  // public function findByAddr(Request $request)
  // {
  //   $employee = DB::table('employees')->where('address', 'like', '%' . $request->get('q') . '%')->get();
  //   // return view('employee_detail', compact('employee'));
  //   return response()->json($employee);
  // }
  public function search(Request $req){
    $employee = DB::table('users')->where('name', 'like', '%' . $req->key . '%')
                                      ->orwhere('address', 'like', '%' . $req->key . '%')->where('isEmployee', 1)
                                      ->get();
    return view('search', compact('employee'));
  }
}
