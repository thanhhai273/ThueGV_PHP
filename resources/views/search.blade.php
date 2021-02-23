@extends('layouts.app')
@section('content')
<div class='container'>
    <h2>Danh sách giúp việc</h2>
    @foreach($employee as $employee)
    <div class='row' style="margin-top:20px">
        <div class='col-md-4'>
            <img src="{{ \App\UserModel::find($employee->id)->employee->avatar }}" class="img-fluid img-thumbnail" style="height:200px; width:200px" alt="Avatar">
        </div>
        <div class='col-md=8'>
            <p>Họ và tên: {{ $employee->name }}</p>
            <p>Tuổi: {{ $employee->age }}</p>
            <p>Giới tính: {{ $employee->gender }}</p>
            <p>Địa chỉ: {{ $employee->address }}</p>
            <p>Mô tả: {{ \App\UserModel::find($employee->id)->employee->description }}</p>
            <a href="{{ route('employeedetail', ['id' => ($employee->id)]) }}">Chi tiết</a>
            <!-- <button onClick='EmployeeListController@detail($employee->id)'>Chi tieets</button> -->
        </div>
    </div>
    @endforeach
</div>
@endsection
