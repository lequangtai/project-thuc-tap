@extends('user.master')
@section('title','Thông tin thanh toán')
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
<div class="panel panel-primary" id="tin-HD">
              <div class="panel-heading">
                <h3 class="panel-title">HÓA ĐƠN ĐIỆN TỬ</h3>
              </div>
             <div class="panel-body" id="body-hoadon">

	<table class="list_table" style="width: 700px; border: 1px solid blue" >
		<tr class="list_heading" style="background-color: green; height: 40px; font-size: 15px">
			<td class="id_col">STT</td>
			<td>Tên khách hàng</td>
			
			<td>Điện năng tiêu thụ</td>
			<td>Đơn giá</td>
			<td>Tình trạng </td>
			<td>Quản lý</td>
		</tr>
	<?php $stt =0;?>     
        @foreach ($data as $value)
           @foreach ($value["dienkekh"] as $ahuhu) 
           @foreach ($ahuhu["hoadon"] as $ahihi) 
                <?php $stt ++;?>  
                <tr class="list_data" style="height: 30px;">
                <td class="aligncenter" style="text-align: center;">{!!$stt!!}</td>
                <td class="list_td aligncenter">{{ $value["tenkh"]}}</td>
              
                <td class="list_td aligncenter">{{ $ahihi["chisocuoi"] - $ahihi["chisodau"]}}</td>
                <td class="list_td aligncenter">{{ $ahihi["tongtien"]}}</td>
                <td class="list_td aligncenter">{{ $ahihi["trangthai"]}}</td>
                <td class="list_td aligncenter">
	              
             <a href="{!!route('getinhoadon', ['id'=>$ahihi["pivot"]["hoadon_id"]])!!}">In hoa don</a>
            &nbsp;&nbsp;&nbsp;
                  <a href="{!!route('getingiaybao', ['id'=>$ahihi["pivot"]["hoadon_id"]])!!}">In giấy báo</a>
            
        		</td>
	      	@endforeach  
	      	@endforeach  
	  	@endforeach
</table>
</div>
</div>
</div>
</div>
@endsection