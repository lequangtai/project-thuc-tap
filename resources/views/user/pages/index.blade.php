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
								<img alt="First slide" src="{!! asset('public/tt13_user/image/1_vi.png') !!}" style="width: 100%; height: 300px">
							</div>
							<div class="item">
								<img alt="Second slide" src="{!! asset('public/tt13_user/image/2_vi.png') !!}" style="width: 100%; height: 300px">
							</div>
							<div class="item active">
								<img alt="Third slide" src="{!! asset('public/tt13_user/image/3_vi.png') !!}" style="width: 100%; height: 300px">
							</div>
						</div>
						<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
			</div>
		</div>
			<!-- <div></div> -->
			<div style="padding-top: 20px">
			<div id="thongtin" style="width: 750px">	
				<div class="TTCCD" style="width: 243px">
		  			<a href="{!! route('getTTKH') !!}"><div class="panel panel-primary" id="pannel-TTCCD">
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
		  			<a href="{!! route('getTTTT') !!}"><div class="panel panel-primary" id="pannel-HDDT">
		  				<div class="panel-heading">
		  					<h3 class="panel-title" id="panel-HDDT">HÓA ĐƠN ĐIỆN TỬ</h3>
		  				</div>
		  				<div class="panel-body">
		  					<img src="{!! asset('public/tt13_user/image/logo_invoice.gif')!!}" width="220px" height="100px" id="img-HDDT">
		  				</div>
		  			</div></a>
		  		</div></div>
		  		<div class="xoa"></div>
		  		<!-- <div class="box-right"> -->
		  			<div class="panel panel-primary" id="tin">
		  				<div class="panel-heading">
		  					<h3 class="panel-title" style="color: white">TIN MỚI</h3>
		  				</div>
		  						@php
				  				$news = App\Models\News::select()->where('loaitin_id',11)->paginate(3);
				  				 
				  				@endphp
					        	@foreach($news as $item)
		  				<div class="panel-body" style="text-align: left;">
		  					<div class="box-tin">
				        		<div class="tin-img"><img src="{!! asset('public/uploads/News/'.$item->image) !!}" width="140px" height="140px" /></div>
				        	<div class="tomtattin">
					      		<p class="tin1">{!!$item["title"]!!}</p>
					      		<img src="{!! asset('public/tt13_user/image/new.gif')!!}">
					      		<p class="tin2">{!!$item["intro"]!!}</p>
					      		<p class="tin3"><img src="{!! asset('public/tt13_user/image/click_here.png')!!}" style="margin-right: 10px"><a href="{!! url('chitiettinmoi/'.$item['id']) !!}">Nhấp vào để xem chi tiết</a></p>
					      		
				    		</div>
				    		</div>
				    		</div>
				    		@endforeach	
		     <div class="row text-center">
			     	<div class="col-md-12" style="margin:0;">
			            {!!$news->links()!!}
			        </div>
		    </div>
  		</div>	      
	</div>
	</div>
@endsection
