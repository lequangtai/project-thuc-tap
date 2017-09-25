@extends('admin.app')
@section('title', 'Danh sách thể loại')
@section('content')
<div style="text-align: right;margin:20px 150px">
<a href="{{ route("getCateAdd")}}" title=""><input id="aaa"  type="button" name="" value="THÊM" ></a>

</div>
<table class="list_table">
    <tr class="list_heading">
      
        <td>Danh Mục</td>
        <td class="action_col">Quản lý?</td>
    </tr>
    <?php listCate($data); ?>
</table>
@endsection