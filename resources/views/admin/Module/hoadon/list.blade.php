@extends('admin.app')
@section('title','Thông tin hóa đơn')
@section('content')
<div style="text-align: right;margin:20px 150px">
<a href="{{ route("getHoadonAdd")}}" title=""><input id="aaa"  type="button" name="" value="THÊM" ></a>

</div>
<table class="list_table">
	<tr class="list_heading">
		<td class="id_col">STT</td>
		<td>Tên khách hàng</td>
		
		<td>Điện năng tiêu thụ</td>
		<td>Đơn giá</td>
		<td>Tình trạng </td>
		<td>Quản lý</td>
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
	                @if($ahuhu['trangthai']=='Chưa thanh toán')
                 			 <a href="{!!route('getSuahoadon', ['id'=>$ahuhu["pivot"]["hoadon_id"]])!!}">Sửa</a>
           
			        @else
			        <a href="{!!route('getInhoadon', ['id'=>$ahuhu["pivot"]["hoadon_id"]])!!}">In hoa don</a>
        		&nbsp;&nbsp;&nbsp;
	                <a href="{!!route('getIngiaybao', ['id'=>$ahuhu["pivot"]["hoadon_id"]])!!}">In giấy báo</a>
			       @endif
        		</td>
	      	@endforeach    
	  	@endforeach
</table>
@endsection