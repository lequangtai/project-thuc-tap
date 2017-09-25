@extends('admin.app')
@section('title','Thông tin User')
@section('content')
<table class="list_table">
	<tr class="list_heading">
		<td class="id_col">STT</td>
		<td>Username</td>
		<td>Level</td>
		<td class="action_col">Quản lý?</td>
	</tr>
<?php $stt =0;?>
    @foreach($data as $item)
    <?php $stt ++;?>
	<tr class="list_data">
        <td class="aligncenter">{!!$stt!!}</td>
        <td class="list_td aligncenter">{!!$item["username"]!!}</td>
        <td class="list_td aligncenter">
            @if($item["id"]==1)
                <span style="color: red; font-weight: bold;">Admin supper man</span>

            @elseif($item["level"]==1)
                <span style="color: green; font-weight: bold;">Admin </span>
            @else
                <span style="color: blue; font-weight: bold;">Thành viên</span>
            @endif

        </td>
        <td class="list_td aligncenter">
            <a href="{!!route('getUserEdit', ['id'=>$item["id"]])!!}"><img src="{!!asset('public/tt13_admin/images/edit.png')!!}" /></a>&nbsp;&nbsp;&nbsp;
            <a href="{!!route('getUserDel', ['id'=>$item["id"]])!!}"  onclick = "return xacnhanxoa ('Bạn có muốn xóa không?')"><img src="{!!asset('public/tt13_admin/images/delete.png')!!}" /></a>
        </td>
    </tr>
    @endforeach
	
</table>
@endsection