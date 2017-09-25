@extends('admin.app')
@section('title','Thông tin giá điện')
@section('content')
<div style="text-align: right;margin:20px 150px">
<a href="{{ route("getDienkeAdd")}}" title=""><input id="aaa"  type="button" name="" value="THÊM" ></a>

</div>
<table class="list_table">
    <tr class="list_heading">
        <td class="id_col">STT</td>
        <td>Tên khách hàng</td>
        <td>Ngày lắp </td>
        <td>Trạng thái</td> 
        <td>Tính tiền</td>
    </tr>
    <?php $stt =0;?>
    @foreach($data1 as $item)
    <?php $stt ++;?>
    <tr class="list_data">
        <td class="aligncenter">{!!$stt!!}</td>
        <td class="list_td aligncenter">{!! $item["khachhang"]["tenkh"]!!}</td>
       <td class="list_td aligncenter">{!! $item['ngaylap'] !!}</td>
        <td class="list_td aligncenter">{!! $item['trangthai'] !!}</td>
        <td class="list_td aligncenter"><a href ="{!!route('getHoadonAdd', ['id'=>$item["id"]])!!}">Tính tiền</a></td>
       
    </tr>
    @endforeach
</table>
@endsection