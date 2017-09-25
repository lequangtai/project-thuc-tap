@extends('admin.app')
@section('title','Thông tin hóa đơn')
@section('content')
<table class="list_table">
	<tr class="list_heading">
		<td class="id_col">STT</td>
		<td>Tên khách hàng</td>
		
		<td>Điện năng tiêu thụ</td>
		<td>Đơn giá</td>
		<td>Tình trạng </td>
		<td>Ngày Lập HĐ</td>
	</tr>
	<?php $stt =0;?>     
        @foreach ($data1 as $value)
           @foreach ($value["dienke"] as $ahuhu) 
                <?php $stt ++;?>  
                <tr class="list_data">
                <td class="aligncenter">{!!$stt!!}</td>
                <td class="list_td aligncenter">{{ $ahuhu["khachhang"]["tenkh"]}}</td>
              
                <td class="list_td aligncenter">{{ $value["chisocuoi"] - $value["chisodau"]}}</td>
                <td class="list_td aligncenter">{{ $value["tongtien"]}}</td>
                <td class="list_td aligncenter">{{ $value["trangthai"]}}</td>
                <td class="list_td aligncenter">{!!date('d-m-Y', strtotime(($value["ngaylaphd"])))!!}</td>
	      	@endforeach    
	  	@endforeach
</table>
@endsection