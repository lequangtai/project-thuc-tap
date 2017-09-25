

@extends('user.master')
@section('title','Xem hóa đơn điện tử')
@section('content')
@foreach($abc as $value)
      @foreach($value["dienke"] as $value1)
      @foreach($abc1 as $val)
<div id="content-left">
     <div id="thongtin" style="width: 750px">  
        <div class="TTCCD" style="width: 243px">
            <a href="{!! route('getXTTKH') !!}"><div class="panel panel-primary" id="pannel-TTCCD">
              <div class="panel-heading">
                <h3 class="panel-title" id="panel-TTCCD">THÔNG TIN KHÁCH HÀNG</h3>
              </div>
              <div class="panel-body">
                <img id="img_CCD" src="{!! asset('public/tt13_user/image/logo_outage.gif')!!}" width="220px" height="100px">
              </div>
            </div></a>
          </div>
      </div>
      <div class="TTTT">
            <a href="{!! route('getTT') !!}"><div class="panel panel-primary" id="pannel-TTTT">
              <div class="panel-heading">
                <h3 class="panel-title" id="panel-TTTT">THANH TOÁN TRỰC TUYẾN</h3>
              </div>
              <div class="panel-body">
                <img id="img-TTTT" src="{!! asset('public/tt13_user/image/logo_paying.gif')!!}" width="235px" height="100px">
              </div>
            </div></a>
          </div>
          <div class="HDDT">
            <a href="{!! route('getHD') !!}"><div class="panel panel-primary" id="pannel-HDDT">
              <div class="panel-heading">
                <h3 class="panel-title" id="panel-HDDT">HÓA ĐƠN ĐIỆN TỬ</h3>
              </div>
              <div class="panel-body">
                <img src="{!! asset('public/tt13_user/image/logo_invoice.gif')!!}" width="220px" height="100px" id="img-HDDT">
              </div>
            </div></a>
          </div>
          <div class="xoa"></div>
         <!--  <div class="box-right"> -->
            <div class="panel panel-primary" id="tin-HD">
              <div class="panel-heading">
                <h3 class="panel-title">HÓA ĐƠN ĐIỆN TỬ</h3>
              </div>
             <div class="panel-body" id="body-hoadon">
    <div class="container" id="container-hoadon" style="width: 700px">
        <div class="colmd12">
          <div class="colmd2"><img src="{!! asset('public/tt13_admin/templates/images/logodienluc.png')!!}" width="150px" height="70px"></div>
          <div class="colmd7"><strong><p id="p-HD">HÓA ĐƠN GTGT(TIỀN ĐIỆN)</p></strong>
          <p id="p-HD1">(Bản thể hiện của hóa đơn điện tử)</p>
          <p id="p-HD2">Kỳ: {{ $value["ky"] }} Từ ngày: {!!date('d-m-Y', strtotime(($value["tungay"])))!!} Đến ngày: {!!date('d-m-Y', strtotime(($value["denngay"])))!!}  </p>
          </div>
          <div class="colmd3">
          <p class="p-HD-3">Mẫu số:{{$val["khachhang"]["id"] }}{{$value1["id"] }}{{$val["id"] }}{{$val["khachhang"]["id"] }}</p>
          <p>Kí hiệu:<b>DN{{$val["khachhang"]["id"] }}{{$value1["id"] }}/E{{$val["id"] }}{{$val["khachhang"]["id"] }}<b></p>
          <p>Số:<b>{{$val["id"] }}</b></p>
          <p>ID HĐ:<b>HD{{$val["id"] }}</b></p>
          </div>
        </div>
      <div class="xoa"></div>
        <div class="col-HD-12">
          <div class="col-tenct-12">Công ty điện lực Thành phố Hồ Chí Minh</div>
        </div>
        <div class="col-HD2-12">
          <div class="col-dc-12">Địa chỉ: <b>180 Cao Lỗ - Phường 4 - Quận 8 - TP.Hồ Chí Minh</b></div>
        </div>
        <div class="col-HD2-12">
          <div class="dt">Điện thoại:<b>084333777</b></div>
          <div class="mst">MST:<b>MS{{$val["khachhang"]["id"] }}{{$value1["id"] }}</b></div>
          <div class="dtsc">ĐT sửa chữa:<b>084333555</b></div>
        </div>
      <div class="xoa"></div>
      
          <div class="col-HD-12">
            <div class="col-kh-12">Tên khách hàng: <b>{{$val["khachhang"]["tenkh"] }}</b></div>
          </div>
          
          <div class="col-HD2-12">
            <div class="col-dckh-12">Địa chỉ: <b>{{$val["khachhang"]["diachi"] }}-{{$val["khachhang"]["phuong"] }}-{{$val["khachhang"]["quan"] }}</b></div>
          </div>
             <div class="col-HD2-12">
            <div class="dt">Điện thoại:<b>{{$val["khachhang"]["sdt"] }}</b></div>
            <div class="mst">Mã KH:<b>KH{{$val["khachhang"]["id"] }}</b></div>
            <div class="dtsc">Số công tơ:<b>CT{{$val["khachhang"]["id"] }}{{$value1["id"] }}</b></div>
          </div>
      <div class="xoa"></div>
      <div class="xoa"></div>
          <div style="float: right; width: 130px; margin-top: 20px; padding-left: 15px">
            <div>
                  <div class="div_ringht">
                    <div>Ma KH:KH{{$val["khachhang"]["id"] }}</div>
                  </div>
                  <div class="div_ringht">
                    <div>Ma TT:PB{{$val["khachhang"]["id"] }}</div>
                  </div>
                   <!-- <div class="div_ringht">
                    <div>Ma NN:hfjgkg</div>
                  </div> -->
                   <div class="div_ringht">
                  
                    <div>Ma giá:{{$val["id"] }}</div>
                  </div>
                  
                   <div class="div_ringht">
                    <div>Mã DK:{{$value1["id"] }}</div>
                  </div>
                  
                   <!-- <div class="div_ringht">
                    <div>Ma Tổ:hfjgkg</div>
                  </div> -->
                   <div class="div_ringht">
                   
                    <div>Ma HĐ:HD{{$val["id"] }}</div>
                    
                  </div>
            </div>
          </div>
      <!-- <div class="col-tbhd-12" id="div-hoadon"> -->
      
<table width="80%" border="1" style="text-align: center; margin: 20px 0px 20px 0px">
  <tr style="color: blue">
    <td width="12%">BO CS</td>
    <td width="10%">CSM</td>
    <td width="10%">CSC</td>
    <td width="10%">HS NHAN </td>
    <td width="15%">DNTT</td>
    <td width="17%">DON GIA</td>
    <td width="15%">thanh tien</td>
  </tr>
 
  <tr>
    <td rowspan="4" style="padding-bottom: 65px">KT</td>
    <td rowspan="4" style="padding-bottom: 65px">{{ $value["chisocuoi"] }}</td>
    <td rowspan="4" style="padding-bottom: 65px">{{ $value["chisodau"] }}</td>
    <td rowspan="7" style="padding-bottom: 130px">1</td>
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
    <td rowspan="6" colspan="3" style="padding-bottom: 90px">Ngày lập HĐ:{!!date('d-m-Y', strtotime(($value["ngaylaphd"])))!!}
    <p>Bên bán điện</p></td>
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
    <td style="color: blue; text-align: left;">CỘNG</td>
    <td>{{ $value1["dntt"] }}</td>
    <td>&nbsp;</td>
    <td>{{ number_format($value["tongtien"],0,',','.') }}</td>
  </tr>
  <tr>
    <td colspan="3" style="color: blue; text-align: left;">Thuế suất GTGT:10% Thuế GTGT:</td>
    
    <td>{{ number_format(($value["tongtien"] *10)/100,0,',','.') }}</td>
  </tr>
  <tr>
    <td colspan="3" style="color: blue;text-align: left;">Tổng cộng tiền thanh toán:</td>
    <td>{{ number_format($value["tongtien"] + (($value["tongtien"] *10)/100),0,',','.') }}</td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: left; color: blue;text-align: left;">Số tiền viết bằng chữ :</td>
   
 
   
  </tr>
</table>
           
      <!-- </div> -->
      </div>
      </div>
       </div>
    </div>
       @endforeach 
        @endforeach   
           @endforeach        
   
 <!--    </div> -->
   
@endsection 