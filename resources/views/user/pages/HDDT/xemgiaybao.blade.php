

@extends('user.master')
@section('title','Xem hóa đơn điện tử')
@section('content')
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
          
            <div class="panel panel-primary" id="tin-HD">
              <div class="panel-heading">
                <h3 class="panel-title">GIẤY BÁO TIỀN ĐIỆN</h3>
              </div>
              <div class="panel-body" id="body-hoadon">
                    <div class="container col-md-12" id="container-hoadon">
                      <table id="tbl" class="table table-hover" border="0">
    @foreach($abc as $value)
    @foreach($value["dienke"] as $value1)
    @foreach($abc1 as $item)
      <tbody>
      <tr>
      <td class="cl_td"><h5 class="h5" colspan="2" style="font-size: 17px;color: blue">CÔNG TY ĐIỆN LỰC MIỀN NAM<BR/>CÔNG TY ĐIỆN LỰC LONG AN<br/>ĐIỆN LỰC : 
      <b class="cl_b">điện lực cần duộc</b></h5></td>
      </tr>
        <tr style="text-align: center;">
          <td class="td" colspan="2"><h5><b style="font-size: 20px;color: blue">GIẤY BÁO TIỀN ĐIỆN<b><BR/>(Không phải hóa đơn)</h5></td>
        </tr>
        <tr>
          <td class="cl_td">Kỳ <b class="cl_b">{{ $value["ky"] }}</b> tháng <b class="cl_b">3</b> năm <b class="cl_b">2017</b></td>
          <td class="cl_td"></td>
        </tr>
        <tr>
          <td class="cl_td">KH: <b class="cl_b">{{ $item["khachhang"]["tenkh"] }}</b></td>
          <td class="cl_td"></td>
        </tr>
         <tr>
          <td class="cl_td">Địa chỉ : <b class="cl_b">{{ $item["khachhang"]["diachi"] }}-{{ $item["khachhang"]["phuong"] }}-{{ $item["khachhang"]["quan"] }}</b></td>
          <td class="cl_td"></td>
        </tr>
         <tr>
          <td class="cl_td">Mã KH:<b class="cl_b">PB{{ $item["khachhang"]["id"] }}</b></td>
          <td class="cl_td"></td>
        </tr>
         <tr>
          <td class="cl_td">CSM:<b class="cl_b">KT {{ $value["chisocuoi"] }}</b></td>
          <td class="cl_td"></td>
        </tr>
        <tr>
          <td class="cl_td">CSC:<b class="cl_b">KT {{ $value["chisodau"] }}</b></td>
          <td class="cl_td"></td>
        </tr>
        <tr>
          <td class="cl_td">HSN:<b class="cl_b">1</b></td>
          <td class="cl_td"></td>
        </tr>
        <tr>
          <td class="cl_td">ĐNTT:<b class="cl_b">{{ $value1["dntt"] }}</b></td>
          <td class="cl_td"></td>
        </tr>
        <tr>
          <td class="cl_td">Tiền điện:<b class="cl_b">{{ number_format($value["tongtien"],0,',','.') }}</b></td>
          <td class="cl_td"></td>
        </tr>
        <tr>
          <td class="cl_td">Tiền GTGT:<b class="cl_b">{{ number_format(($value["tongtien"] *10)/100,0,',','.')  }}</b></td>
          <td class="cl_td"></td>
        </tr>
        <tr>
          <td class="cl_td"></td>
          <td class="cl_td"><b class="cl_b">STT in:123</b>
          <p class="cl_td"><b class="cl_b">ID HD:2345</b></p></td>
        </tr>
        <tr>
          <td class="cl_td">cộng tiền:<b class="cl_b">{{ number_format($value["tongtien"] + (($value["tongtien"] *10)/100),0,',','.') }}</b></td>
          <td></td>
        </tr>
        <tr>
          <td class="td" colspan="2" class="cl_td" style="text-align: center;">Đề nghị khách hàng thanh toán đúng thời hạn<br/>ký tên</td>
        </tr>
      </tbody>
      @endforeach
       @endforeach
      @endforeach
    </table></div></div></div></div></div>
@endsection 