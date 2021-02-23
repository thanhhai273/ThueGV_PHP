<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ServiceForm;

class FormController extends Controller
{
    public function create($guest_id, $id)
    {
        return view('form', ['guest_id' => $guest_id, 'employee_id' => $id]);
    }
    public function store($guest_id, $id)
    {
        $p = 50000*request('optradio') + 60000*request('hour');
        $dt = request('datetime');
        $h = request("hour");
        $h = (string)$h;
        $p = (string)$p;
        $employee = \App\UserModel::find($id)->first();

        echo "<h3 style='color:#6600ff; text-align: center;'>Bạn đã tạo một lịch hẹn vào lúc: </h3>";
        echo"<p style='text-align: center;'>{$dt}</p>";
        echo "<p style='color:#6600ff; text-align: center;'>Cho {$employee->name}, {$employee->age} tuổi</p>";

        if(request("optradio")==='1')
        {
            echo"<h3 style='color:#6600ff; text-align: center;'>Bạn có yêu cầu dùng chất tẩy. Chi phí cho chất tẩy là 50.000 đồng.</h3>";
        }
        else
        {
            echo"<h3 style='color:#6600ff; text-align: center;'>Bạn không yêu cầu dùng chất tẩy.</h3>";
        }
        echo"<h3 style='color:#6600ff; text-align: center;'>Dịch vụ vệ sinh bạn yêu cầu sẽ kéo dài trong: </h3>";
        echo"<p style='text-align: center;'>{$h} giờ</p>";
        echo"<h3 style='color:#6600ff; text-align: center;'>Tổng chi phí cho dịch vụ của bạn: </h3>";
        echo"<h2 style='color:red; text-align:center'>{$p} vnđ</h2>";
        $serviceform = new ServiceForm();
        $serviceform->datetime = $dt;
        if(request('optradio')==='1'){
            $serviceform->useChemical = 'Có';
        }
        else {
            $serviceform->useChemical = "Không";
        }
        $serviceform->hour = request('hour');
        $serviceform->guest_id = $guest_id;
        $serviceform->employee_id = $id;
        $serviceform->price = $p;
        $serviceform->save();
    }
}
