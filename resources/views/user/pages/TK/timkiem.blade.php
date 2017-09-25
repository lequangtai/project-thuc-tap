@extends('user.master')
@section('title','Chi tiết tin')
@section('content')
<div id="content-left">
      <div id="thongtin" style="width: 750px">  
        <div class="TTCCD" style="width: 243px">
            <a href="index.php?xem=TTCCdien&id=1"><div class="panel panel-primary" id="pannel-TTCCD">
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
            <a href="index.php?xem=thanhtoantructuyen&id=1"><div class="panel panel-primary" id="pannel-TTTT">
              <div class="panel-heading">
                <h3 class="panel-title" id="panel-TTTT">THANH TOÁN TRỰC TUYẾN</h3>
              </div>
              <div class="panel-body">
                <img id="img-TTTT" src="{!! asset('public/tt13_user/image/logo_paying.gif')!!}" width="235px" height="100px">
              </div>
            </div></a>
          </div>
          <div class="HDDT">
            <a href="index.php?xem=hoadondientu&id=1"><div class="panel panel-primary" id="pannel-HDDT">
              <div class="panel-heading">
                <h3 class="panel-title" id="panel-HDDT">HÓA ĐƠN ĐIỆN TỬ</h3>
              </div>
              <div class="panel-body">
                <img src="{!! asset('public/tt13_user/image/logo_invoice.gif')!!}" width="220px" height="100px" id="img-HDDT">
              </div>
            </div></a>
          </div>
          <div class="xoa"></div>
          <!-- <div class="box-right"> -->
            <div class="panel panel-primary" id="tin">
              <div class="panel-heading">
                <h3 class="panel-title" style="color: white">THÔNG TIN TIM KIẾM</h3>
              </div>
              <div class="panel-body">
              @foreach($news as $item)
                <div style="text-align: left;">
                <p style="text-align: center; color: red"><strong>{!! $item["title"]!!}</strong></p>
                 <p style="text-align: center;"><strong>{!! $item["intro"]!!}</strong></p>
                  <p style="text-align: left;">
                     {!! $item["content"]!!}
                  </p>
                  </div>
               @endforeach
                  <a href="{!! url('/') !!}"><span class="glyphicon glyphicon-backward" aria-hidden="true"> Trở lại</span></a>
              </div>
             
     </div>
     </div>

 @endsection
