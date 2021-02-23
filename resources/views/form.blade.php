<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>        
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.4.0/lang/en-gb.js"></script>                
    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.0.0/js/bootstrap-datetimepicker.min.js"></script>`
</head>
<body>
   <div class="container">
      <form action="{{ route('form', ['id' => $employee_id, 'guest_id' => $guest_id]) }}" method="POST">

         {{ csrf_field() }}

         <div class="p-3 mb-2 bg-primary text-white"><b>Báo giá dịch vụ giúp việc</b></div>
         <div class="form-group" style="margin-top: 10px; background-color: #ccffff">
            <label for='datetimepicker2'>Lịch hẹn:</label>
            <div class='input-group date' id='datetimepicker2'>
               <input type='text' class="form-control" name="datetime"/>
               <span class="input-group-addon">
               <span class="glyphicon glyphicon-calendar"></span>
               </span>
            </div>
         </div>
         <script type="text/javascript">
            $(function () {
               $('#datetimepicker2').datetimepicker({
                     locale: 'ru'
               });
            });
         </script>
         <div class="form-group" style="margin-top: 10px; background-color: #ccffff">
            <label for="use-chemical">Bạn có yêu cầu chất tẩy không?</label>
            <div id="use-chemical" name="use-chemical">
               <div class="radio">
                  <label><input type="radio" name="optradio" value=1 checked>Dùng chất tẩy</label>
               </div>
               <div class="radio">
                  <label><input type="radio" name="optradio" value=0>Không dùng chất tẩy</label>
               </div>
            </div>
         </div>
         <div class="form-group" style="margin-top: 10px; background-color: #ccffff">
            <label for="price-calculate"><b>Báo giá</b></label>
            <div id="price-calculate">
               <p>Đơn giá: 60.000 vnd/giờ</p>
               <label for="hour-select">Chọn số giờ:</label>
               <div id="hour-select">
                  <select class="form-control form-control-lg" name="hour">
                     <option value=0.5>0.5</option>
                     <option value=1>1</option>
                     <option value=1.5>1.5</option>
                     <option value=2>2</option>
                     <option value=3>3</option>
                     <option value=4>4</option>
                     <option value=8>8</option>
                  </select>
               </div>
            </div>
         </div>
         <button type="submit" class="btn btn-default" style="margin-left: 500px">Gửi yêu cầu</button>
      </form>
   </div>
</body>
</html>

