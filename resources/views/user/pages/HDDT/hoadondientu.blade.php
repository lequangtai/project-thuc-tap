@extends('user.master')
@section('title','Hóa đơn điện tử')
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
                <h3 class="panel-title">HÓA ĐƠN ĐIỆN TỬ</h3>
              </div>
              <div class="panel-body body-TTTT">
                    <img src="{!! asset('public/tt13_user/image/err_login.png')!!}" width="200px" height="auto">
                    <h3><strong>VUI LÒNG ĐĂNG NHẬP ĐỂ TRUY XUẤT NỘI DUNG NÀY</strong></h3>

                    <div class="panel panel-primary panel-TTTT" id="panel">
           <!--  <div class="panel-heading">
              <h3 class="panel-title">TÀI KHOẢN NGƯỜI DÙNG</h3>
            </div> -->
           
            <div class="panel-body">
            @include('admin.block.error') 
              <form action="{{ route('postdangnhap') }}" method="post" role="form">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                
                  <input required="vui long nhap ten khach hang" type="text" class="form-control" id="form-control" name="txtUser" placeholder="Tên đăng nhập">
                  <input required="vui long nhap mat khau" type="password" class="form-control" id="" name="txtPass" placeholder="Mật khẩu" >
                </div>
                <button type="submit" class="btn btn-primary" id="button" name="btnLogin">Đăng nhập</button>
                
                <div id="quenMK"><a href="#">Quên mật khẩu</a></div>
                <!-- <div id="DKTK"><a href="{!! route('getDK') !!}">Đăng ký tài khoản</a></div>
                <div id="HDDK"><a href="{!! route('getHDDK') !!}">Hướng dẫn đăngg ký</a></div> -->
              </form>
            </div>
          </div>
        </div>
                
              </div>
     </div>
    </div>
@endsection
