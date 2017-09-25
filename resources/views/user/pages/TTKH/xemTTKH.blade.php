@extends('user.master')
@section('title','Chi tiết thông tin khách hàng')
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
		  					<h3 class="panel-title">THÔNG TIN KHÁCH HÀNG</h3>
		  				</div>
	  					<div class="panel-body">
                           
                            <table class="table table-hover table-striped" style="margin-bottom: 20px">
                            	<thead>
                            		<tr>
                            			<th>MÃ KH</th>
                            			<th>TÊN KHÁCH HÀNG</th>
                            			<th>QUẬN</th>
                            			<th>PHƯỜNG</th>
                            			<th>ĐỊA CHỈ</th>
                            			<th>SĐT</th>
                            			<th>CMND</th>
                            		</tr>
                            	</thead>
                            	<tbody>
                            	@foreach($data as $item)
                            		<tr>
                            			<td>{!! $item->id !!}</td>
                            			<td>{!! $item->tenkh !!}</td>
                            			<td>{!! $item->quan !!}</td>
                            			<td>{!! $item->phuong !!}</td>
                            			<td>{!! $item->diachi !!}</td>
                            			<td>{!! $item->sdt !!}</td>
                            			<td>{!! $item->cmnd !!}</td>
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
	