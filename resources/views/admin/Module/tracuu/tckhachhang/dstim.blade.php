@extends('admin.app')
@section('title','Danh sách khách hàng')
@section('content')
<table class="list_table">
	<tr class="list_heading">
		<td class="id_col">STT</td>
		<td>Tên khách hàng</td>
		<td>Địa chỉ</td>
       
		<td class="action_col">Quản lý?</td>
	</tr>
<?php $stt =0;?>
    @foreach($data as $item)
    <?php $stt ++;?>
	<tr class="list_data">
        <td class="aligncenter">{!!$stt!!}</td>
        <td class="list_td aligncenter">{!!$item["tenkh"]!!}</td>
         <td class="list_td aligncenter">{!!$item["diachi"]!!}</td>
         
        <td class="list_td aligncenter">
            <a href="{!!route('getKhachhangEdit', ['id'=>$item["id"]])!!}"><img src="{!!asset('public/tt13_admin/images/edit.png')!!}" /></a>&nbsp;&nbsp;&nbsp;
            <a href="{!!route('getKhachhangDel', ['id'=>$item["id"]])!!}"onclick = "return xacnhanxoa ('Bạn có muốn xóa không?')"><img src="{!!asset('public/tt13_admin/images/delete.png')!!}" /></a>
        </td>
    </tr>
    @endforeach
	
</table>
@endsection