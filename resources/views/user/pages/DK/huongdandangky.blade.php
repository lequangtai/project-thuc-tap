@extends('user.master')
@section('title','Hướng dẫn đăng ký')
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
		  					<h3 class="panel-title" style="color:#F80409">HƯỚNG DẪN SỬ DỤNG WEBSITE CSKH PHIÊN BẢN 2.0</h3>
		  				</div>
	  					<div class="panel-body">
		  					<div>
		  						<p style="text-align: center;">
									<span style="font-size: 20px;"><span style="color: rgb(255, 0, 0);"><strong>HƯỚNG DẪN KHÁCH HÀNG CÁCH ĐĂNG KÝ TÀI KHOẢN THÀNH VIÊN </strong></span></span></p>
								<p style="text-align: center;">
									<span style="font-size: 20px;"><span style="color: rgb(255, 0, 0);"><strong>TẠI WEBSITE CSKH.HCMPC.VN</strong></span></span></p>
								<p style="text-align: center;">
									&nbsp;</p>
								<p>
									Hiện nay khách hàng có thể đăng ký tài khoản tại website cskh.hcmpc.vn. Đối tượng đăng ký như sau:</p>
								<p>
									&nbsp; &nbsp;- Khách hàng chưa có tài khoản (do mới gắn điện kế)</p>
								<p>
									&nbsp; &nbsp;- Khách hàng đã có tài khoản do trước đây Trung tâm đã đăng ký mặc định.</p>
								<p>
									Cả 2 đối tượng này đều có thể đăng ký tài khoản. Cách đăng ký như sau:</p>
								<p>
									<u><strong>Bước 1</strong></u>: Vào website <u><span style="color: rgb(0, 0, 255);">cskh.hcmpc.vn</span></u>, nhấp vào nút “<strong>Đăng ký tài khoản</strong>”.</p>
								<p>
									&nbsp;</p>
								<p style="text-align: center;">
									<span style="display: none;">&nbsp;</span><img alt="" src="image/1a.png" style="width: 678px; height: 381px; border-width: 1px; border-style: solid;"></p>
								<p>
									&nbsp;</p>
								<p>
									<u><strong>Bước 2</strong></u>: Khách hàng điền đầy đủ thông tin vào các ô thông tin</p>
								<p>
									<strong>Ghi chú</strong>:&nbsp;</p>
								<p>
									&nbsp; &nbsp;- Họ tên: khách hàng có thể gõ bất kỳ, khuyến khích dùng tên trên điện kế</p>
								<p>
									&nbsp; &nbsp;- Địa chỉ: khuyến khích khách hàng nhập địa chỉ đăng ký điện kế</p>
								<p>
									&nbsp; &nbsp;- Sau khi đã thực hiện đăng ký, khách hàng có thể sử dụng ngay tài khoản của mình ngay lập tức.</p>
								<p>
									&nbsp;</p>
								<p style="text-align: center;">
									<img alt="" src="image/1a.png" style="width: 678px; height: 505px; border-width: 1px; border-style: solid;"></p>
								<p style="text-align: center;">
									&nbsp;</p>
								
								</div>
  	             </div>
  	         </div>	      
	   </div>
    </div>
 @endsection
	