@extends('admin.app')
@section('title','Thông tin giá điện')
@section('content')
<div style="text-align: right;margin:20px 150px">
<a href="{{ route("getGiadienAdd")}}" title=""><input id="aaa"  type="button" name="" value="THÊM" ></a>

</div>
<table class="list_table">
	<tr class="list_heading">
		<td class="id_col">STT</td>
        <td>Mã bậc</td>
		<td>Tên bậc</td>
		<td>Giá điện</td>
        <td>Ngày áp dụng</td>
		
	</tr>
<?php $stt =0;?>
    @foreach($data as $item)
    <?php $stt ++;?>
	<tr class="list_data">
        <td class="aligncenter">{!!$stt!!}</td>
        <td class="list_td aligncenter">{!!$item["mabac"]!!}</td>
        <td class="list_td aligncenter">{!!$item["tenbac"]!!}</td>
        <td class="list_td aligncenter">{!!$item["dongia"]!!}</td>
        <td class="list_td aligncenter">{!!date('d-m-Y', strtotime(($item["ngayapdung"])))!!}</td>
       
    </tr>
    @endforeach
	
</table>
@endsection