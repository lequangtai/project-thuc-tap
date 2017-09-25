@extends('admin.app')
@section('title','Thông tin hóa đơn')
@section('content')
<form action="{!! route('TracuuCongno')!!}" method="post" class="navbar-form navbar-left pull-right" role ="search">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="search" name="tukhoa" value="" placeholder="nhập từ cần tìm">
<button type="search">Search</button>

</form>
<table class="list_table">
	<tr class="list_heading">
		<td class="id_col">STT</td>
		<td>Tên khách hàng</td>
		
		<td>Điện năng tiêu thụ</td>
		<td>Đơn giá</td>
		<td>Tình trạng </td>
		<td class="action_col">Quản lý</td>
	</tr>
	<?php $stt =0;?>     
        @foreach ($data as $value)
           @foreach ($value["hoadon"] as $ahuhu) 
                <?php $stt ++;?>  
                <tr class="list_data">
                <td class="aligncenter">{!!$stt!!}</td>
                <td class="list_td aligncenter">{{ $value["khachhang"]["tenkh"]}}</td>
              
                <td class="list_td aligncenter">{{ $ahuhu["dntt"]}}</td>
                <td class="list_td aligncenter">{{ $ahuhu["tongtien"]}}</td>
                <td class="list_td aligncenter">{{ $ahuhu["trangthai"]}}</td>
                <td class="list_td aligncenter">
	                <a href="{!!route('getInhoadon', ['id'=>$ahuhu["pivot"]["hoadon_id"]])!!}">In hoa don</a>
        		</td>
	      	@endforeach    
	  	@endforeach
</table>
@endsection