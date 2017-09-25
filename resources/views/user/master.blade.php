
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<!-- Local bootstrap CSS & JS -->
	<link rel="stylesheet" media="screen" href="{{ asset('public/tt13_user/css/bootstrap.min.css')}}">
	<script src="{{ asset('public/tt13_user/js/jquery-1.11.3.min.js')}}"></script>
	<script src="{{ asset('public/tt13_user/js/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" media="screen" href="{{ asset('public/tt13_user/css/style.css')}}">
	
</head>
<script>   
		$('#myCarousel').carousel({ 
		    interval: 4000    
		});
</script>
<body>
	<div class="banner">
	<div class="container">
	<div class="row banner-row ">
		    <div class="col-md-3" style="padding: 0;"><img id="banner-img" src="{!! asset('public/tt13_user/image/EVN_HCMC_TRIAN.jpg') !!}"></div>
			<div class="col-md-9"><img id="banner-img1" src="{!! asset('public/tt13_user/image/banner_vi.png')!!}"></div>
	</div>
	</div>
</div>
<div class="menu">
	<ul id="nav">
		<li><a href="{!! route('getIndex') !!}">Trang chủ</a></li>
		<li><a href="#">Thông tin chung</a>
			<div>
				<ul>
					<li><a href="{!! route('getTTGD') !!}">Thông tin giá điện</a></li>
					<li><a href="{!! route('getHTTT') !!}">Hình thức thanh toán tiền điện</a></li>
					<li><a href="{!! route('getHDTT') !!}">Hướng dẫn thủ tục</a></li>
				</ul>
			</div>
		</li>
		<li><a href="#">Thông tin khách hàng</a>
			<div>
			<ul>
			<li><a href="{!! route('getTTDK') !!}">Thông tin điện kế</a></li>
			<li><a href="{!! route('getTTKH') !!}">Thông tin khách hàng</a></li>
			<li><a href="{!! route('getTTTT') !!}">Thông tin thanh toán</a></li>
			</ul>
			</div>
		</li>
		<li><a href="#">tư vấn sử dụng điện</a>
			<div>
			<ul>
			<li><a href="{!! route('getDPTND') !!}">Dề phòng tai nạn điện</a></li>
			<li><a href="{!! route('getTVSDD') !!}">Tư vấn sử dụng điện an toàn</a></li>
			<li><a href="{!! route('getCCD') !!}">Cấp cứu người bị điện giật</a></li>
			</ul>
			</div>
		</li>
		<li><a href="{!! route('getHDSD') !!}">Hướng dẫn sử dụng</a></li>
		<li><a href="{!! route('getLH') !!}">Liên hệ</a></li>
		<li style="padding-left: 20px; color: black">
			<div id="search" style="border: 1px solid blue; border-radius: 10px; padding:0px">
					<form method="post" action="Timkiem" role ="search">
					    <input type="hidden" name="_token" value="UTF-8">
				    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				        <input type="text" name="tukhoa" placeholder="Nhập từ khóa tìm kiếm..." class="radius10">
				        <input type="submit" class="magnifier" name="" value="" style="padding-left: 10px">
					</form>
			</div>
		

	</ul>
</div>
<div class="content">


    @yield('content')

	<!-- content-right -->

	<div id="content-right">
	<div id="col-md-3">
					<div class="panel panel-primary" id="panel">
						<div class="panel-heading">
							<h3 class="panel-title">TÀI KHOẢN NGƯỜI DÙNG</h3>
						</div>

						<div class="panel-body">
						<div style="color: red">
							@include('user.block.flash')
						</div>
						 
							<form action="{!!route('postdangnhap')!!}" method="post" role="form">

							<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="form-group">
								
									<input required="vui long nhap ten khach hang" type="text" class="form-control" id="form-control" name="txtUser" placeholder="Tên đăng nhập">
									<input required="vui long nhap mat khau" type="password" class="form-control" id="" name="txtPass" placeholder="Mật khẩu" >
								</div>
								<button type="submit" class="btn btn-primary" id="button" name="btnLogin">Đăng nhập</button>		
								<div id="quenMK"><a href="{!!route('getdangxuat')!!}">Đăng xuất</a></div>
							</form>
							
						</div>
					</div>
				</div>

			<div class="panel panel-primary" id="pannel-HTTT">
	  				<div class="panel-heading">
	  					<h3 class="panel-title" id="pannel-h3-HTTT">HỖ TRỢ TRỰC TUYẾN</h3>
	  				</div>
	  				<div class="panel-body">
	  					<p id="p-DT"><img src="{!! asset('public/tt13_user/image/support_dt.gif')!!}" width="50px" height="50px">1900.54.54.54</p>
	  					<p><img src="{!! asset('public/tt13_user/image/support_app.gif')!!}" width="50px" height="50px"><a href="http://www.thamdinhgia.org/phan-mem-tinh-tien-dien-va-in-hoa-don-dien-sinh-hoat-san-xuat-bac-thang-eman_topic2735.html " target="_blank">Ứng dụng di động</a></p>
	  					<p id="p-web"><img src="{!! asset('public/tt13_user/image/support_web.gif')!!}" width="40px" height="40px"><a href="http://www.stu.edu.vn/" target="_blank">www.stu.edu.vn</a></p>
	  					<p id="p-email"><img src="{!! asset('public/tt13_user/image/support_mail.gif')!!}" width="40px" height="40px">stu@edu.vn</p>
	  				</div>
	  			</div>

	  		<div class="panel panel-primary" id="panel-TDYK">
	  				<div class="panel-heading">
	  					<h3 class="panel-title" style="font-size: 15px; text-align: center;">THĂM DÒ Ý KIẾN</h3>
	  				</div>
	  				<div class="panel-body">
	  					<form name="frm_khaosat" method="post" onsubmit="return false;">
					        <p id="p-khasat">Đối tượng được tham gia  là các khách hàng gọi vào Trung tâm CSKH yêu cầu giải quyết các dịch vụ trong thời gian diễn ra chương trình và được lựa chọn ngẫu nhiên 100 khách hàng bằng hình thức quay số trúng thưởng. Anh/Chị có biết đến nội dung và đối tượng khách hàng tham gia chương trình này không?</p>
					        <p id="answer">
				            <input type="hidden" name="id_question" value="50">
				            
				            <label class="lbl"><input type="radio" name="id_answer" value="130" class="lbl">-  Có được phổ biến</label><br>
				            
				            <label class="lbl"><input type="radio" name="id_answer" value="131" class="lbl">- Chưa được phổ biến</label><br>
				            
				            <label class="lbl"><input type="radio" name="id_answer" value="132" class="lbl">- Không quan tâm</label><br>
				          
				        <button type="button" class="btn btn-primary" id="bieuquyet" onclick="submit_khaosat();">Biểu Quyết</button>
				    </form>
	  				</div>
	  			</div>

	  			<div class="panel panel-primary" id="panel-VDTT" style="margin-bottom: 20px">
	  				<div class="panel-heading">
	  					<h3 class="panel-title" id="panel-h3-VDTT">VIDEO TUYÊN TRUYỀN</h3>
	  				</div>
	  				<div class="panel-body" id="panel-body-VDTT">
	  					<iframe width="243" height="250" src="https://www.youtube.com/embed/WMga94xa7BA" frameborder="0" allowfullscreen></iframe>
	  				</div>
	  			</div>
	  		</div>
</div>
	     <div style="clear:both;"></div>
	<div id="footer">Copyright&copy; trường đai học Công Nghệ Sài Gòn<br />
		    Địa chỉ: 180 Cao Lỗ Phường 4 Quận 8 Tp.HCM<br />
		    Điện thoại: 0909123456
	</div>

</body>
</html>