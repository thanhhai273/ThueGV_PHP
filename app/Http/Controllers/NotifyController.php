<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NotifyController extends Controller
{
    public function index($id)
    {
        $notifies_g = \App\UserModel::find($id)->serviceform;
        $notifies_e = \App\Employee::find($id)->serviceform;
        return view('notify',['notifies_e' => $notifies_e, 'notifies_g' => $notifies_g] );
    }
}
