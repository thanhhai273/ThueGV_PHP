@extends('layouts.app')
@section('content')
<div class='container'>

    <h1>Các lịch hẹn từ khách hàng</h1>
    <div class="col-md-12 m-5">
        <div class="row">
            <div class="col-md-3">
            Tên khách hàng
            </div>
            <div class="col-md-2">
            Bắt đầu lúc
            </div>
            <div class="col-md-2">
            Thời gian làm (giờ)
            </div>
            <div class="col-md-1">
            Chất tẩy
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-1">
            </div>
        </div>
        @if($notifies_e)
        @foreach($notifies_e as $notify_e)
        <div class="row">
        <div class="col-md-3">
            {{\App\UserModel::find($notify_e->guest_id)->name}}
        </div>
        <div class="col-md-2">
            {{$notify_e->datetime}}
        </div>
        <div class="col-md-2">
            {{$notify_e->hour}}
        </div>
        <div class="col-md-1">
            {{$notify_e->useChemical}}
        </div>
        @if($notify_e->status == null)
            <div class="col-md-1">
                <a href="{{ route('confirm', ['id' => $notify_e->id]) }}">Đồng ý</a>
            </div>
            <div class="col-md-2">
                <a href="{{ route('hide', ['id' => $notify_e->id]) }}">Đồng ý và ẩn dữ liệu</a>
            </div>
            <div class="col-md-1">
                <a href="{{ route('delete', ['id' => $notify_e->id]) }}">Từ chối</a>
            </div>
        @endif
        <br/>
        </div>
        @endforeach
        @endif
    </div>
    


    <h1>Các lịch hẹn đã tạo</h1>
    <div class="col-md-10 m-5">
        <div class="row">
            <div class="col-md-3">
            Tên người giúp việc
            </div>
            <div class="col-md-3">
            Bắt đầu lúc
            </div>
            <div class="col-md-2">
            Thời gian làm (giờ)
            </div>
            <div class="col-md-2">
            Chất tẩy
            </div>
            
        </div>
        @foreach($notifies_g as $notify_g)
        <div class="row">
        <div class="col-md-3">
            {{\App\UserModel::find($notify_g->employee_id)->name}}
        </div>
        <div class="col-md-3">
            {{$notify_g->datetime}}
        </div>
        <div class="col-md-2">
            {{$notify_g->hour}}
        </div>
        <div class="col-md-2">
            {{$notify_g->useChemical}}
        </div>
        @if($notify_g->status == null)
            <div class="col-md-2">
                <a href="{{ route('delete', ['id' => $notify_g->id]) }}">Hủy</a>
            </div>
        @endif
        <br/>
        </div>
        @endforeach
    </div>
</div>
@endsection