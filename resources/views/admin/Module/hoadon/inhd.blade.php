@extends('admin.app')
@section('title','Thông tin hóa đơn')
@section('content')
@foreach($abc as $value)
      @foreach($value["dienke"] as $value1)
      @foreach($abc1 as $val1)
       <div class="panel-body" id="body-hoadon">
    <div class="container" id="container-hoadon" >
            <div class="col-md-12">
                  <div class="col-md-2"><img src="{!! asset('public/tt13_admin/templates/images/logodienluc.png')!!}" width="200px" height="100px"></div>
                  <div class="col-md-7"><strong><p id="p-HD">HÓA ĐƠN GTGT(TIỀN ĐIỆN)</p></strong>
                        <p id="p-HD1">(Bản thể hiện của hóa đơn điện tử)</p>
                        <p id="p-HD2">Kỳ: 1 Từ ngày:{!!date('d/m/Y', strtotime(($value["tungay"])))!!}  Đến ngày: {!!date('d/m/Y', strtotime(($value["denngay"])))!!} </p>
                  </div>
                  <div class="col-md-3">
                        <p class="p-HD-3">Mẫu số:01234</p>
                        <p>Kí hiệu:<b>DN/14E<b></p>
                        <p>Số:<b>123</b></p>
                        <p>ID HĐ:<b>HD12345</b></p>
                  </div>
            </div>
            <div class="xoa"></div>
        <div class="col-HD-12">
          <div class="col-tenct-12" style="color: blue;font-weight: bold">Công ty điện lực Thành phố Hồ Chí Minh</div>
        </div>
        <div class="col-HD2-12">
          <div class="col-dc-12" style="float: left;color: blue">Địa chỉ:</div> <div >180 Cao Lỗ - Phường 4 - Quận 8 - TP.Hồ Chí Minh</div>
        </div>
        <div class="col-HD2-12">
         <div class="col-dc-12" style="float: left;color: blue">Điện thoại:</div> <div style="float: left;margin-right:50px " >180 </div>
          <div class="col-dc-12" style="float: left;color: blue">MST:</div> <div style="float: left;margin-right:50px " >180 Cao Lỗ </div>
           <div class="col-dc-12" style="float: left;color: blue">ĐT sửa chữa:</div> <div style="float: left;margin-right:50px " >180 Cao Lỗ </div>
          
        </div>
      <div class="xoa"></div>
      
          <div class="col-HD-12" style="margin-top: 20px">
            <div class="col-dc-12" style="float: left;color: blue">Tên khách hàng:</div> <div >{{$val1["khachhang"]["tenkh"] }}</div>
            
          
          <div class="col-HD2-12">
          <div class="col-dc-12" style="float: left;color: blue">Địa chỉ:</div> <div >{{$val1["khachhang"]["diachi"] }}</div>
           
              <div class="col-HD2-12">
         <div class="col-dc-12" style="float: left;color: blue">Điện thoại:</div> <div style="float: left;margin-right:50px " >180 </div>
          <div class="col-dc-12" style="float: left;color: blue">MST:</div> <div style="float: left;margin-right:50px " >180 Cao Lỗ </div>
           <div class="col-dc-12" style="float: left;color: blue">ĐT sửa chữa:</div> <div style="float: left;margin-right:50px " >180 Cao Lỗ </div>
          
        </div>
      <div class="xoa"></div>
      <div class="xoa"></div>

          <div style="float: right; width: 180px; margin-top: 20px">
            <div>
                  <div class="div_ringht">
                    <div>Mã KH:PB{{$val1["khachhang"]["id"] }}</div>
                  </div>
                  <div class="div_ringht">
                    <div>Mã TT:PB{{$val1["khachhang"]["id"] }}</div>
                  </div>
                   <div class="div_ringht">
                    <div>Mã NN:4401</div>
                  </div>
                   <div class="div_ringht">
                    <div>Mã giá:100%SHBT</div>
                  </div>
                  
                   <div class="div_ringht">
                    <div>Cấp điện áp:1</div>
                  </div>
                  
                   <div class="div_ringht">
                    <div>Mã Tổ:</div>
                  </div>
                   <div class="div_ringht">
                    <div>Mã HĐ:{{ $value["id"] }}</div>
                  </div>
            </div>
          </div>
      <div class="col-tbhd-12" id="div-hoadon">
      
          <table id="hoadon" border="1px">
<table width="101%" border="1" style="text-align: center;">
  <tr style="color: blue">
    <td width="12%">BỘ CS</td>
    <td width="10%">CSM</td>
    <td width="10%">CSC</td>
    <td width="10%">HS NHÂN </td>
    <td width="15%">DNTT</td>
    <td width="17%">ĐƠN GIÁ</td>
    <td width="15%">THÀNH TIỀN</td>
  </tr>
 
  <tr>
    <td rowspan="4">KT</td>
    <td rowspan="4">{{ $value["chisocuoi"] }}</td>
    <td rowspan="4">{{ $value["chisodau"] }}</td>
    <td rowspan="7">1</td>
    <td>{{ $value1["dntt"] }}</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr style="height: 22px">
    <td>{{ $zxc["kw1"] }}</td>
    <td>{{ $zxc1["gia1"] }}</td>
    <td>{{ $zxc2["ttien1"]  }}</td>
  </tr>
  <tr style="height: 22px">
    <td>{{ $zxc["kw2"] }}</td>
    <td>{{ $zxc1["gia2"]}}</td>
    <td>{{ $zxc2["ttien2"]  }}</td>
  </tr>
  <tr style="height: 22px">
    <td>{{ $zxc["kw3"] }}</td>
    <td>{{ $zxc1["gia3"]}}</td>
    <td>{{ $zxc2["ttien3"]  }}</td>
  </tr>
  <tr style="height: 22px">
    <td rowspan="6" colspan="3"></td>
    <td>{{ $zxc["kw4"] }}</td>
    <td>{{ $zxc1["gia4"]}}</td>
    <td>{{ $zxc2["ttien4"]  }}</td>
  </tr>
  <tr style="height: 22px">
    <td >{{ $zxc["kw5"] }}</td>
    <td>{{ $zxc1["gia5"]}}</td>
    <td>{{ $zxc2["ttien5"]  }}</td>
  </tr>
  <tr style="height: 22px">
  
   
    
    
    <td>{{ $zxc["kw6"] }}</td>
    <td>{{ $zxc1["gia6"]}}</td>
    <td>{{ $zxc2["ttien6"]  }}</td>
  </tr>
  <tr>
    <td style="color: blue">CỘNG</td>
    <td>{{ $value1["dntt"] }}</td>
    <td>&nbsp;</td>
    <td>{{ number_format($value["tongtien"],0,',','.') }}</td>
  </tr>
  <tr>
    <td colspan="3" style="color: blue">Thuế suất GTGT:10% Thuế GTGT:</td>
    
    <td>{{ number_format(($value["tongtien"] *10)/100,0,',','.') }}</td>
  </tr>
  <tr>
    <td colspan="3" style="color: blue">Tổng cộng tiền thanh toán:</td>
    <td>{{ number_format($value["tongtien"] + (($value["tongtien"] *10)/100),0,',','.') }}</td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: left;color: blue">Số tiền viết bằng chữ</td>
   
 
   
  </tr>
       @endforeach 
        @endforeach   
           @endforeach        
    </table></table></div></div></div></div></div>
@endsection