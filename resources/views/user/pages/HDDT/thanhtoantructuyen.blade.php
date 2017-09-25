@extends('user.master')
@section('title','Thanh toán trực tuyến')
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
                <h3 class="panel-title">THANH TOÁN TRỰC TUYẾN</h3>
              </div>
              <div class="panel-body">

                <fieldset class="fld-TTTT">
                  <form name="frm_filter" class="form-TTCCD" method="post">
                    <table class="right_left_table table-TTCCD">
                        <tbody><tr>
                            <td><b>Mã khách hàng: </b></td>
                               <td>
                                <input type="text" name="maKH" class="maKH" value="" placeholder="Nhập mã khách hàng">
                            </td>
                          </tr>
                        <tr>
                            <td><b>Điện thoại: </b></td>
                              <td>
                                <input type="text" name="dienthoai" class="maKH" value="" placeholder="Nhập số điện thoại">
                                <!-- <script> $('#tu_ngay').datepicker({ dateFormat:"dd-mm-yy" }); </script> -->
                            </td>
                          </tr>
                        <tr>
                            <td><b>Email: </b></td>
                              <td>
                                <input type="text" name="email" class="maKH" value="" placeholder="Nhập email">
                            </td>
                          </tr>
                         
                      </tbody></table>
                  </form>
              </fieldset>
              <h5><b>VUI LÒNG NHẤP VÀO BIỂU TƯỢNG CỦA NGÂN HÀNG CẦN THANH TOÁN:</b></h5>
              <table class="table-TTNH">
                  <tr>
                    <td><img src="{!! asset('public/tt13_user/image/ACB.gif')!!}" width="100px" height="100px"></td>
                    <td><img src="{!! asset('public/tt13_user/image/Agribank.jpg')!!}" width="100px" height="100px"></td>
                    <td><img src="{!! asset('public/tt13_user/image/DongA.jpg')!!}" width="100px" height="100px"></td>
                    <td><img src="{!! asset('public/tt13_user/image/Eximbank.jpg')!!}" width="100px" height="100px"></td>
                    <td><img src="{!! asset('public/tt13_user/image/HDBank.jpg')!!}" width="100px" height="100px"></td>
                  </tr>
                  <tr style="padding-top: 20px">
                    <td><img src="{!! asset('public/tt13_user/image/BIDV.jpg')!!}" width="130px" height="100px"></td>
                    <td><img src="{!! asset('public/tt13_user/image/AnBinh.gif')!!}" width="130px" height="100px"></td>
                    <td><img src="{!! asset('public/tt13_user/image/PhuongDong.png')!!}" width="130px" height="100px"></td>
                    <td><img src="{!! asset('public/tt13_user/image/OceanBank.jpg')!!}" width="130px" height="100px"></td>
                    <td><img src="{!! asset('public/tt13_user/image/Sacombank.jpg')!!}" width="130px" height="100px"></td>
                  </tr>
              </table>
              </div>
     </div>
    </div>
@endsection