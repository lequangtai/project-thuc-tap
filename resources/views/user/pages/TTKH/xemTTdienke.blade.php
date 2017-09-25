@extends('user.master')
@section('title','Chi tiết thông tin điện kế')
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
                <h3 class="panel-title">THÔNG TIN ĐIỆN KẾ</h3>
              </div>
              <div class="panel-body">
                           
                            <table class="table table-hover table-striped" style="margin-bottom: 20px">
                              <thead>
                                <tr>
                                  <th>MÃ ĐK</th>
                                  <th>TÊN KHÁCH HÀNG</th>
                                  <th>NGÀY SX</th>
                                  <th>NGÀY LẬP</th>
                                  <th>MÔ TẢ</th>
                                  <th>TRẠNG THÁI</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($data as $item)
                                <tr>
                                  <td>{!! $item->id !!}</td>
                                  <td>{!! $item->tenkh !!}</td>
                                  <td>{!!date('d-m-Y', strtotime(($item->ngaysx)))!!}</td>
                                  <td>{!!date('d-m-Y', strtotime(($item->ngaylap)))!!}</td>
                                  <td>{!! $item->mota !!}</td>
                                  <td>{!! $item->trangthai !!}</td>
                                </tr>
                              @endforeach
                              </tbody>
                            </table>
                            </div>
                 </div>
             </div>       
     </div>
    </div>
  @endsection
  