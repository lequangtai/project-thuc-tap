@extends('admin.app')
@section('title','Thông tin giá điện')
@section('content')
<table class="list_table">
    <tr class="list_heading">
        <td class="id_col">STT</td>
        <td>Tên khách hàng</td>
        <td>Ngày lắp </td>
        <td>Trạng thái</td> 
      
    </tr>
    <?php $stt =0;?>
    @foreach($data as $item)
    <?php $stt ++;?>
    <tr class="list_data">
        <td class="aligncenter">{!!$stt!!}</td>
        <td class="list_td aligncenter">{!! $item["khachhang"]["tenkh"]!!}</td>
       <td class="list_td aligncenter">{!! $item['ngaylap'] !!}</td>
        <td class="list_td aligncenter">{!! $item['trangthai'] !!}</td>
    
       
    </tr>
    @endforeach
</table>
@endsection