@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg">
        <img class="img-responsive" src="images\bg.jpg" width="100%" height="345" />
    </div>
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="{{ url('/home') }}">Môi giới</a></li>
        </ul>
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dịch vụ vệ sinh
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Danh sách dịch vụ</a></li>
                    <li><a href="#">Dịch vụ nổi bật</a></li>
                    <li><a href="#">Đăng yêu cầu dịch vụ</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav">
            <li><a href="{{ url('/home') }}">Danh sách giúp việc</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="search">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </ul>
    </div>
</div>
@endsection
@yield('content2')