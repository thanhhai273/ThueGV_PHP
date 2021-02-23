<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServiceController extends Controller
{
    public function confirm($id)
    {
        $service = \App\ServiceForm::find($id);
        $service->status = true;
        $service->save();

        $notifies_g = \App\UserModel::find($service->guest_id)->serviceform;
        $notifies_e = \App\Employee::find($service->employee_id)->serviceform;
        return view('notify',['notifies_e' => $notifies_e, 'notifies_g' => $notifies_g] );
    }

    public function hide($id)
    {
        $service = \App\ServiceForm::find($id);
        $service->status = 'hide';
        $service->save();
    }

    public function delete($id)
    {
        $deleteRow = \App\ServiceForm::find($id)->delete();
    }
}
