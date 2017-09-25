@extends('admin.app')
@section('title','Trang Chính')
@section('content')
 <table class="function_table" style="margin: 0px auto;">
    <tr>
        <td class="function_item user_add"><a href="{!! route('nhaptimdk')!!}">Tra cứu điện kế</a></td>
        <td class="function_item user_list"><a href="{!! route('nhaptimkh')!!}">Tra cứu khách hàng</a></td>
        <td class="function_item hdon_add"><a href="{!! route('nhaptimhd')!!}">Tra cứu công nợ </a></td>
        <td class="function_item hdon_add"><a href="{!! route('nohoai')!!}">quá hạn thanh toán </a></td>
</tr>
 
</table>   
@endsection