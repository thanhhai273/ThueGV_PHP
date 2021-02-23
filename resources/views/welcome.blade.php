@extends('layouts.app')

@section('content')

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
</head>
<div class="container">
    <div class="bg">
        <img class="img-responsive" src="images\bg.jpg" width="100%" height="345" />
    </div>
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">Dịch vụ vệ sinh
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('/dichvu_sauxaydung') }}">Vệ Sinh Công Nghiệp Sau Xây Dựng</a></li>
                    <li><a href="{{ url('/dichvu_vanphong') }}">Vệ sinh văn phòng</a></li>
                    <li><a href="{{ url('/dichvu_congnghiep') }}">Vệ sinh công nghiệp</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav">
            <li><a href="{{ url('/employees_list') }}">Danh sách giúp việc</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-inline typeahead" role="search" method="GET" id="searchform" action="{{route('search')}}">
                        <div class="form-group">
                            <input type="name" class="form-control search-input" name="key" autocomplete="off" placeholder="Tên giúp việc hoặc địa chỉ">
                        </div>
                        <button type="submit" class="btn btn-default">Tìm kiếm</button>
                    </form>
                </div>
            </div>
    </div>

    </ul>
</div>
<div class="slideshow" style="margin-top: 10px">
    <div class="p-3 mb-2 bg-primary text-white">Tin tức nổi bật</div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <a href="{{ url('/dichvu_congnghiep') }}">
                    <img src="images\services_2\vesinh_cn_sonla.jpg" alt="Vệ sinh công nghiệp tại Sơn La" width="100%">
                    <div class="carousel-caption">
                        <h3>Dịch vụ vệ sinh công nghiệp</h3>
                        <p>Vệ sinh công nghiệp tại Sơn La</p>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="{{ url('/dichvu_giatdem') }}">
                    <img src="images\services_2\giatdem_thanhxuan.jpg" alt="Giặt đệm Thanh Xuân" width="100%">
                    <div class="carousel-caption">
                        <h3>Dịch vụ giặt đệm</h3>
                        <p>Giặt đệm tại Thanh Xuân</p>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="{{ url('/dichvu_giatdem') }}">
                    <img src="images\services_2\vesinh_cn_phuyen.jpg" alt="Vệ sinh Công nghiệp" width="100%">
                    <div class="carousel-caption">
                        <h3>Dịch vụ vệ sinh công nghiệp</h3>
                        <p>Vệ sinh công nghiệp tại Phú Yên</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div style="margin-top: 10px; background-color: #ccffff">
        <div class="p-3 mb-2 bg-primary text-white">Dịch vụ nổi bật</div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ url('/service1') }}">
                    <img src="images\services\img1.jpg" style="height: 80%; weight: 100%; margin-top: 20px" />
                </a>
                <p><b>Dịch vụ vệ sinh hàng đầu Việt Nam</b></p>
            </div>
            <div class="col-md-4">
                <a href="{{ url('/service2') }}">
                    <img src="images\services\img2.jpg" style="height: 80%; weight: 100%; margin-top: 20px" />
                </a>
                <p><b>Cung ứng nguồn nhân lực chuyên nghiệp</b></p>
            </div>
            <div class="col-md-4">
                <a href="{{ url('/service3') }}">
                    <img src="images\services\img3.jpg" style="height: 80%; weight: 100%; margin-top: 20px" />
                </a>
                <p><b>Đu dây lau kính tòa nhà cao tầng</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ url('/dichvu_giatdem') }}">
                    <img src="images\services\img4.jpg" style="height: 80%; weight: 100%; margin-top: 20px" />
                </a>
                <p><b>Dịch vụ giặt thảm, ghế sofa tại nhà</b></p>
            </div>
            <div class="col-md-4">
                <a href="{{ url('/service4') }}">
                    <img src="images\services\img5.jpg" style="height: 80%; weight: 100%; margin-top: 20px" />
                </a>
                <p><b>Cung cấp máy móc, hóa chất vệ sinh công nghiệp</b></p>
            </div>
            <div class="col-md-4">
                <a href="{{ url('/service5') }}">
                    <img src="images\services\img6.jpg" style="height: 80%; weight: 100%; margin-top: 20px" />
                </a>
                <p><b>Dịch vụ diệt côn trùng gây hại</b></p>
            </div>
        </div>
    </div>
    @endsection