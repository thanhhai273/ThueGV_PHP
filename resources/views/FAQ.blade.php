@extends('layouts.app')
@section('content')

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
</head>
<div class="collapse navbar-collapse" id="app-navbar-collapse">
    <li class="list-group-item font-weight-bold collpane d-flex" style="padding:15px 20px;line-height:20px;width:1000px; margin-left:150px">
        <a class="dropdown-toggle" data-toggle="dropdown">
            <span class="font-size16 " style="font-family:Arial, Helvetica, sans-serif ;font-size: large; color:black ">
                <b>CleanExpress quản lý hồ sơ của nhân viên giúp việc theo giờ như thế nào?</b>
            </span>
            <span class="caret" style="margin-left:280px; color:black"></span>
        </a>
        <ul class="dropdown-menu">
            <span style="font-family:Arial, Helvetica, sans-serif ;font-size:15px;">
                -Tất cả các nhân viên giúp việc nhà theo giờ khi đăng ký làm đều bắt buộc phải có đủ chứng minh thư/hộ chiếu, sổ hộ khẩu và sơ yếu lý lịch có xác nhận của chính
                quyền địa phương. Hồ sơ của các nhân viên bao gồm số chứng minh thư hay quê quán đều đã được kiểm tra và lưu trữ lại hệ thống dữ liệu và luôn có thể truy suất
                nếu cần thiết.
                <br>
                - Bạn có thể kiểm tra thông tin nhân viên sẽ thực hiện dịch vụ cho bạn ngay trên website hoặc ứng dụng của CleanExpress sau khi bạn đặt xong dịch vụ.
            </span>
        </ul>
    </li>
</div>
<div class="collapse navbar-collapse" id="app-navbar-collapse">
    <li class="list-group-item font-weight-bold collpane d-flex" style="padding:15px 20px;line-height:20px;width:1000px; margin-left:150px; margin-top:30px">
        <a class="dropdown-toggle" data-toggle="dropdown">
            <span class="font-size16 " style="font-family:Arial, Helvetica, sans-serif ;font-size: large; color:black ">
                <b>CleanExpress quản lý chất lượng dịch vụ giúp việc, dọn vệ sinh theo giờ như thế nào?</b>
            </span>
            <span class="caret" style="margin-left:180px; color:black"></span>
        </a>
        <ul class="dropdown-menu">
            <span style="font-family:Arial, Helvetica, sans-serif ;font-size:15px;">
                - 100% nhân viên giúp việc nhà theo giờ đều đã trải qua quá trình đào tạo từ lý thuyết đến thực hành. Chỉ những nhân viên phù hợp và vượt qua các bài kiểm tra
                theo quy định của công ty mới được đi làm.<br>
                - Trong quá trình làm việc, những nhân viên bị khách hàng đánh giá thấp (điểm trung bình < 4 sao) sẽ bị loại khỏi hệ thống.<br>
                    - Đặc biệt, nếu bạn thấy không hài lòng với chất lượng dịch vụ dọn vệ sinh theo giờ, CleanExpress sẽ cử một nhân viên khác tới làm lại cho bạn hoàn toàn miễn phí!
            </span>
        </ul>
    </li>
</div>
<div class="collapse navbar-collapse" id="app-navbar-collapse">
    <li class="list-group-item font-weight-bold collpane d-flex" style="padding:15px 20px;line-height:20px;width:1000px; margin-left:150px; margin-top:30px">
        <a class="dropdown-toggle" data-toggle="dropdown">
            <span class="font-size16 " style="font-family:Arial, Helvetica, sans-serif ;font-size: large; color:black ">
                <b>Làm sao để đảm bảo mất mát không xảy ra trong quá trình dọn vệ sinh, giúp việc theo giờ?</b>
            </span>
            <span class="caret" style="margin-left:140px; color:black"></span>
        </a>
        <ul class="dropdown-menu">
            <span style="font-family:Arial, Helvetica, sans-serif ;font-size:15px;">
                - Với CleanExpress, đạo đức của nhân viên dọn nhà theo giờ là yếu tố luôn được đặt lên hàng đầu. Tuy vậy, chúng tôi vẫn khuyến cáo khách hàng nên có người ở nhà khi nhân viên đến làm.<br>
                - Khách hàng vui lòng kiểm tra giấy tờ tuỳ thân của nhân viên trước ca làm và đảm bảo rằng thông tin cá nhân của nhân viên đó trùng khớp với thông tin bạn đã được cung cấp trên hệ thống qua website hoặc ứng dụng CleanExpress.<br>
                - Ngoài ra, khách hàng vui lòng cất giữ hết những đồ đạc quý giá như tiền bạc hay đồ trang sức nếu có thể. CleanExpress luôn yêu cầu nhân viên giúp việc theo giờ, nếu thấy tiền hay đồ quý giá thì không được đụng đến mà phải chủ động thông báo để khách biết và yêu cầu khách cất lại.
            </span>
        </ul>
    </li>
</div>
<div class="collapse navbar-collapse" id="app-navbar-collapse">
    <li class="list-group-item font-weight-bold collpane d-flex" style="padding:15px 20px;line-height:20px;width:1000px; margin-left:150px; margin-top:30px">
        <a class="dropdown-toggle" data-toggle="dropdown">
            <span class="font-size16 " style="font-family:Arial, Helvetica, sans-serif ;font-size: large; color:black ">
                <b>Tôi có thể đặt dịch vụ dọn nhà theo giờ trước bao lâu?</b>
            </span>
            <span class="caret" style="margin-left:450px; color:black"></span>
        </a>
        <ul class="dropdown-menu">
            <span style="font-family:Arial, Helvetica, sans-serif ;font-size:15px;">
                Bạn có thể đặt lịch ngay trong ngày, vào hôm sau hoặc có thể đặt cho các tuần hoặc các tháng tiếp theo. Tuy nhiên, bạn vui lòng đặt trước ít nhất 4 tiếng để CleanExpress có thể kịp sắp xếp nhân viên phù hợp nhất với yêu cầu của bạn.
            </span>
        </ul>
    </li>
</div>
<div class="collapse navbar-collapse" id="app-navbar-collapse">
    <li class="list-group-item font-weight-bold collpane d-flex" style="padding:15px 20px;line-height:20px;width:1000px; margin-left:150px; margin-top:30px">
        <a class="dropdown-toggle" data-toggle="dropdown">
            <span class="font-size16 " style="font-family:Arial, Helvetica, sans-serif ;font-size: large; color:black ">
                <b>Tôi đã đặt dịch vụ dọn nhà theo giờ thành công thì tức là chắc chắn sẽ có nhân viên qua làm?</b>
            </span>
            <span class="caret" style="margin-left:110px; color:black"></span>
        </a>
        <ul class="dropdown-menu">
            <span style="font-family:Arial, Helvetica, sans-serif ;font-size:15px;">
            Sau khi đặt dịch vụ trên website hoặc ứng dụng, sẽ có điện thoại gọi tới xác nhận bạn đặt thành công dịch vụ. Ngoài ra, nhân viên nhận làm cho bạn sẽ liên hệ và thông báo ngay khi nhận việc.
            </span>
        </ul>
    </li>
</div>
@endsection
<!-- <li class="list-group-item font-weight-bold collpane d-flex" style="color:#333333;padding:10px 20px;line-height:20px"><h3><span class="font-size16 font-weight-bold">Tidy.vn quản lý hồ sơ của nhân viên giúp việc theo giờ như thế nào?</span></h3><div><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-up" clas -->