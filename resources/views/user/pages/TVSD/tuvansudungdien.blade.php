@extends('user.master')
@section('title','Tư vấn sử dụng điện')
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
            <div class="panel panel-primary" id="tin-HD">
              <div class="panel-heading">
                <h3 class="panel-title">TƯ VẤN SỬ DỤNG ĐIỆN AN TOÀN</h3>
              </div>
              <div class="panel-body">
             @php
                  $news = App\Models\Cate::select()->where('parent_id',5)->paginate(4);
                   
                  @endphp
                    @foreach($news as $item)
                  <li class="tin3">{!! $item["name"]!!}<img src="{!! asset('public/tt13_user/image/click_here.png')!!}" style="margin-right: 10px"><a href="{!! url('chitiettin/'.$item['id']) !!}">Nhấp vào để xem chi tiết</a></li>
                @endforeach
              </div>
     </div>
    </div>
@endsection
