
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
		<?php $menu1=App\Models\Cate::select('id','name','parent_id')->orderBy('id','DESC')->get()->toArray(); ?> 
		@foreach($menu1 as $item_menu1)
		@if($item_menu1["parent_id"]==0 & $item_menu1["id"]!=11 & $item_menu1["id"]!=1 & $item_menu1["id"]!=2) 
		<li><a href="#">{!! $item_menu1["name"]!!}</a>
			<div>
				<ul>

					<?php $menu2=App\Models\Cate::select('id','name','parent_id')->orderBy('id','DESC')->get()->toArray(); ?> 

					@foreach($menu2 as $item_menu2)
					@if($item_menu2["parent_id"]==$item_menu1["id"] & $item_menu1["id"]!=1 & $item_menu1["id"]!=2)  
					<li><a href="{!! url('theloai/'.$item_menu2["id"])!!}">{!! $item_menu2["name"]!!}</a></li>
					@endif
					@endforeach
				</ul>
			</div>
		</li>
		@endif
		@endforeach
		<li><a href="{!! route('getHDSD') !!}">Hướng dẫn sử dụng</a></li>
		<li><a href="{!! route('getLH') !!}">Liên hệ</a></li> 
		<li style="padding-left: 30px">
			<div id="search" style="border: 1px solid blue; border-radius: 10px; padding:0px">
					<form method="get" action="http://www.google.com/cse" target="_blank">
					    <input type="hidden" name="ie" value="UTF-8">
				    	<input type="hidden" name="cx" value="008309359627747490150:y7bhvv7-d74">
				        <input type="text" name="q" placeholder="Nhập từ khóa tìm kiếm..." class="radius10">
				        <input type="submit" class="magnifier" value="" style="padding-left: 10px">
					</form>
			</div>
		</li>

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
							<form action="" method="POST" role="form">
								<div class="form-group">
									<input type="text" class="form-control" id="form-control" placeholder="Tên đăng nhập">
									<input type="text" class="form-control" id="" placeholder="Mật khẩu">
								</div>
							
								
							
								<button type="submit" class="btn btn-primary" id="button">Đăng nhập</button>
								<div id="quenMK"><a href="#">Quên mật khẩu</a></div>
								<div id="DKTK"><a href="{!! route('getDK') !!}">Đăng ký tài khoản</a></div>
								<div id="HDDK"><a href="{!! route('getHDDK') !!}">Hướng dẫn đăngg ký</a></div>
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
	  					<p><img src="{!! asset('public/tt13_user/image/support_app.gif')!!}" width="50px" height="50px"><a href="#">Ứng dụng di động</a></p>
	  					<p id="p-web"><img src="{!! asset('public/tt13_user/image/support_web.gif')!!}" width="40px" height="40px"><a href="www.stu.edu.vn">www.stu.edu.vn</a></p>
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
				            
				            </p><div id="captcha"> <!-- Delete Captcha -->
				            	Captcha:<b class="red">*</b> 
				                <input name="captcha_code" type="text" id="captcha_code">
				            </div>
				            <img class="captcha_img" src="image/captcha_img/khaosat" id="captcha_img">
				        <p></p>
				        <!-- <button class="myButton" id="bieuquyet" onclick="submit_khaosat();">Biểu Quyết</button> -->
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






index...
@extends('user.master')
@section('title','Trang Chủ')
@section('content')
	<div id="content-left">
		<div class="row_slide" style="border-radius: 10px">
					<!-- <div class="col-md-9" id="conten-left" style="padding: 0"> -->
			<div class="panel panel-primary">
				<div class="panel-body" style="padding: 0;border-radius: 10px">
					<div id="carousel-id" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-id" data-slide-to="0" class=""></li>
							<li data-target="#carousel-id" data-slide-to="1" class=""></li>
							<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
						</ol>
						<div class="carousel-inner" style="height: 260px;">
							<div class="item">
								<img alt="First slide" class="slide-img" src="{!! asset('public/tt13_user/image/1_vi.png') !!}" style="height: 260px">
							</div>
							<div class="item">
								<img alt="Second slide" class="slide-img" src="{!! asset('public/tt13_user/image/2_vi.png') !!}" style="height: 260px">
							</div>
							<div class="item active">
								<img alt="Third slide" class="slide-img" src="{!! asset('public/tt13_user/image/3_vi.png') !!}" style="height: 260px">
							</div>
						</div>
						<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
			</div>
		</div>
			<!-- <div></div> -->
			<div id="thongtin" style="width: 750px;">	
				<div class="TTCCD" style="width: 243px; padding-top: 20px">
		  			<a href="<!-- {!! route('getXTTCCD') !!} -->"><div class="panel panel-primary" id="pannel-TTCCD">
		  				<div class="panel-heading">
		  					<h3 class="panel-title" id="panel-TTCCD">THÔNG TIN CUNG CẤP ĐIỆN</h3>
		  				</div>
		  				<div class="panel-body">
		  					<img id="img_CCD" src="{!! asset('public/tt13_user/image/logo_outage.gif')!!}" width="220px" height="100px">
		  				</div>
		  			</div></a>
		  		</div>
			</div>
			<div class="TTTT">
		  			<a href="<!-- {!! route('getTT') !!} -->"><div class="panel panel-primary" id="pannel-TTTT">
		  				<div class="panel-heading">
		  					<h3 class="panel-title" id="panel-TTTT">THANH TOÁN TRỰC TUYẾN</h3>
		  				</div>
		  				<div class="panel-body">
		  					<img id="img-TTTT" src="{!! asset('public/tt13_user/image/logo_paying.gif')!!}" width="235px" height="100px">
		  				</div>
		  			</div></a>
		  		</div>
		  		<div class="HDDT">
		  			<a href="<!-- {!! ro<!-- ute('getHD') !!} --> -->"><div class="panel panel-primary" id="pannel-HDDT">
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
		  				<div class="panel-heading" id="panel-tin">
		  					<h3 class="panel-title" id="panel-title-tin">TIN MỚI</h3>
		  				</div>
	  					<div class="panel-body">
	  			@foreach($data as $item)
		  					<div class="box-tin">
		  					<div style="height: 210px;">
				        		<div class="tin-img"><img src="{!! asset('public/uploads/News/'.$item->image) !!}" width="160px" height="210px" /></div>
				        	<div class="tomtattin">
					      		<p class="tin1">{!! $item->title!!}</p>
					      		<img src="{!! asset('public/tt13_user/image/new.gif')!!}">
					      		<p class="tin2">{!! $item->intro!!}</p>
					      		<p class="tin3"><img src="{!! asset('public/tt13_user/image/click_here.png')!!}" style="margin-right: 10px"><a href="<!-- {!! route('getCTTM')!!} -->">Nhấp vào để xem chi tiết</a></p>
				    		</div>
						</div>  		
				@endforeach
				    	</div>
		  			</div>
		  		</div>
  	</div>
  	<!-- phantrang -->
     <div class="row text-center">
     <div class="col-md-12" style="margin:0;">
            <ul class="pagination">
                <li>
                    <a href="#">&laquo;</a>
                </li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li>
                    <a href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>
  	</div>	      
	</div>
	</div>
@endsection



ĐĂNG KKYS MUA ĐIỆN

@extends('user.master')
@section('title','Đăng kí mua điện')
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
                            <h3 class="panel-title">ĐĂNG KÝ MUA ĐIỆN</h3>
                        </div>
                            <form name="frm_dangky" method="post" id="form-DKMD">
                    <table id="DKMD">
                        <tbody><tr>
                            <td width="236" height="35">Họ tên:<i class="red">*</i> </td>
                          <td width="494"><input type="text" name="hoten" class="hoten"></td>
                        </tr>
                        <tr>
                            <td height="35">Điện thoại:<i class="red">*</i> </td>
                          <td><input type="text" name="sdt" maxlength="11" class="hoten"></td>
                        </tr>
                        <tr>
                            <td height="35">Email: <i class="red">*</i></td>
                          <td><input name="email" type="text" class="hoten"></td>
                        </tr>
                        <tr>
                            <td height="35">Quận:<i class="red">*</i> </td>
                            <td>
                                <select name="quan" class="quan">
                                    
                                    <option value="79760">Quận 1</option>
                                    
                                    <option value="79769">Quận 2</option>
                                    
                                    <option value="79770">Quận 3</option>
                                    
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td height="35">Phường: </td>
                            <td id="phuong">
                  <select name="phuong" class="quan">
                        
                        <option value="7976026740">Bến Nghé</option>
                        
                        <option value="7976026743">Bến Thành</option>
                        
                        <option value="7976026761">Cầu Kho</option>
                        
                    </select>
                </td>
                        </tr>
                        <tr>
                            <td height="35">Địa chỉ:<i class="red">*</i> </td>
                          <td><input type="text" name="diachi" class="hoten"></td>
                        </tr>
                    
                        <tr>
                            <td height="35">Mục đích sử dụng:<i class="red">*</i> </td>
                            <td>
                                <select name="mucdich" class="quan">
                                    
                                    <option value="sinhhoat">Sinh hoạt</option>
                                    
                                    <option value="ngoaisinhhoat">Ngoài sinh hoạt</option>
                                    
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td height="99">Nội dung:<i class="red">*</i></td>
                          <td><textarea name="noidung" class="hoten" rows="5"></textarea></td>
                        </tr>
                        
                        <!-- <tr><td height="35" colspan="2"><hr></td></tr>
                        <tr>
                          <td colspan="2" class="align_left">
                              <b>GIẤY TỜ HIỆN CÓ (đánh dấu vào ô tương ứng)</b><br>
                              
                              <label><input type="checkbox" name="giayto[]" value="Giấy chứng nhận đăng ký kinh doanh hoặc quyết định thành lập hoặc giấy chứng nhận đầu tư..."> Giấy chứng nhận đăng ký kinh doanh hoặc quyết định thành lập hoặc giấy chứng nhận đầu tư...</label><br>
                                
                              <label><input type="checkbox" name="giayto[]" value="Giấy chứng nhận quyền sở hữu sử dụng nhà ở"> Giấy chứng nhận quyền sở hữu sử dụng nhà ở</label><br>
                                
                              <label><input type="checkbox" name="giayto[]" value="Giấy chứng nhận sử dụng đất"> Giấy chứng nhận sử dụng đất</label><br>
                                
                              <label><input type="checkbox" name="giayto[]" value="Hợp đồng thuê nhà"> Hợp đồng thuê nhà</label><br>
                                
                              <label><input type="checkbox" name="giayto[]" value="Sổ hộ khẩu hoặc giấy đăng ký tạm trú"> Sổ hộ khẩu hoặc giấy đăng ký tạm trú</label><br>
                                
                              <label><input type="checkbox" name="giayto[]" value="Quyết định cấp đất,cấp nhà, thông báo tạm cấp số nhà"> Quyết định cấp đất,cấp nhà, thông báo tạm cấp số nhà</label><br>
                                
                              <label><input type="checkbox" name="giayto[]" value="Hợp động mua bán, chuyển nhượng nhà, đất ở"> Hợp động mua bán, chuyển nhượng nhà, đất ở</label><br>
                                
                            </td>
                        </tr> -->
                        <tr>
                        <td></td>
                        <td>
                          <input type="hidden" name="ma_kh" value="">
                          <button type="button" class="btn btn-primary" id="btn">Đăng ký</button>
                        </td></tr>
                    </tbody></table>
                    </form>
                 </div>
	</div>
</div>
  @endsection
	