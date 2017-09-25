@extends('user.master')
@section('title','Đề phòng tai nạn điện')
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
          <!-- <div class="box-right"> -->
          @foreach($data as $item)
            <div class="panel panel-primary" id="tin">
              <div class="panel-heading">
                <h3 class="panel-title" style="color: white">{!! $item->title!!}</h3>
              </div>
              <div class="panel-body" style="text-align: left;">
                <p style="text-align: center;"><strong style="color: red;">{!! $item->intro!!}</strong></p>
                  <p>
                      {!! $item->content!!}
                  </p>
                   <p style="text-align: right;">Người đăng :<b>{!! $item->author!!}</b></P>
              </div>
     </div>
    </div>
@endforeach
@endsection
