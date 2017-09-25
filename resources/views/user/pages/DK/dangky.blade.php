
@extends('user.master')
@section('title','Đăng ký')
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
		  			<div class="panel panel-primary" id="tin">
		  				<div class="panel-heading">
		  					<h3 class="panel-title" style="color:#F80409">ĐĂNG KÝ TÀI KHOẢN</h3>
		  				</div>
		  					<table width="550" border="0" style="margin: 50px 0px 50px 140px" id="table">
        <tbody>
          <tr>
            <td width="151" style="text-align:right; padding-right:10px">Mã khách hàng:<b>*</b></td>
            <td width="239"><input type="text" name="maKH" class="maKH" value="" style="width: 260px; border-radius: 10px; height: 25px; margin-top:5px; border-color:#04B8F8"/></td>
           <td></td>
          </tr>
          <tr>
            <td style="text-align:right; padding-right:10px">Tên đăng nhập:<b>*</b></td>
            <td><input type="text" name="tenDN" class="maKH" value="" style="width: 260px; border-radius: 10px; height: 25px; margin-top:5px; border-color:#04B8F8" /></td>
            <td></td>
          </tr>
          <tr>
            <td style="text-align:right; padding-right:10px">Mật khẩu:<b>*</b></td>
            <td><input type="text" name="MK" class="maKH" value="" style="width: 260px; border-radius: 10px; height: 25px; margin-top:5px; border-color:#04B8F8"/></td>
           
          </tr>
          <tr>
            <td style="text-align:right; padding-right:10px">Nhập lại mật khẩu:<b>*</b></td>
            <td><input type="text" name="nhaplaiMK" class="maKH" value="" style="width: 260px; border-radius: 10px; height: 25px; margin-top:5px; border-color:#04B8F8"/></td>
            
          </tr>
          <tr>
            <td style="text-align:right; padding-right:10px">Họ tên:<b>*</b></td>
            <td><input type="text" name="hoten" class="maKH" value="" style="width: 260px; border-radius: 10px; height: 25px; margin-top:5px; border-color:#04B8F8"/></td>
            
          </tr>
          <tr>
            <td style="text-align:right; padding-right:10px">Điện thoại:<b>*</b></td>
            <td><input type="text" name="dienthoai" class="maKH" value="" style="width: 260px; border-radius: 10px; height: 25px; margin-top:5px; border-color:#04B8F8"/></td>
           
          </tr>
          <tr>
            <td style="text-align:right; padding-right:10px">Email:<b>*</b></td>
            <td><input type="text" name="email" class="maKH" value="" style="width: 260px; border-radius: 10px; height: 25px; margin-top:5px; border-color:#04B8F8"/></td>
            
          </tr>
          <tr>
            <td style="text-align:right; padding-right:10px">Quận:<b>*</b></td>
            <td><select name="quan" style="width: 260px; border-radius: 10px; height: 25px; margin-top:5px; border-color:#04B8F8">
                      	
                          <option value="79760">Quận 1</option>
                      	
                          <option value="79769">Quận 2</option>
                      	
                          <option value="79770">Quận 3</option>
                      	
                          <option value="79773">Quận 4</option>
                   
                      	
                      </select></td>
           
          </tr>
          <tr>
            <td style="text-align:right; padding-right:10px">Phường:</td>
            <td><select name="quan" style="width: 260px; border-radius: 10px; height: 25px; margin-top:5px; border-color:#04B8F8">
                      	
                          <option value="79760">Quận 1</option>
                      	
                          <option value="79769">Quận 2</option>
                      	
                          <option value="79770">Quận 3</option>
                      	
                          <option value="79773">Quận 4</option>
                   
                      	
                      </select></td>
         
          </tr>
          <tr>
            <td style="text-align:right; padding-right:10px">Địa chỉ:<b>*</b></td>
            <td><input type="text" name="diachi" class="maKH" value="" style="width: 260px; border-radius: 10px; border-color:#04B8F8 ;height: 25px; margin-top: 5px"/></td>
           
          </tr>
          <!-- <tr>
          </tr> -->
           <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
           
          </tr>
          <tr style="margin-top:10px; padding-top: 20px">
            <td rowspan="2"; colspan="3">
            <ul>
            	<li>Không cung cấp thông tin sai lệch khi thực hiện gửi yêu cầu cung cấp dịch vụ cho điện lực.</li>
				<li> Sẵn sàng cung cấp các thông tin cần thiết liên quan đến dịch vụ bạn đăng ký khi có sự yêu cầu từ phía điện lực.</li>
        <li><input type="checkbox" name="checkbox"><b style="margin-bottom: 5px">*</b>Tôi đã đọc và đồng ý với các điều khoản</li>
        </ul></td>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
           
          </tr>
  
          <tr>
            <td>&nbsp;</td>
            <td><button type="button" class="btn btn-primary" style="margin-left: 70px">Đăng ký</button></td>
          
          </tr>
        </tbody>
      </table>

  	<!-- </div> -->
  	</div>	      
	</div>
    </div>
  @endsection
	