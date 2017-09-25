@extends('admin.app')
@section('title','Trang Chính')
@section('content')
 <table class="function_table" style="margin: 0px auto;">
    <tr>
        <td class="function_item user_add"><a href="{!! route('getUserAdd')!!}">Thêm admin</a></td>
        <td class="function_item user_list"><a href="{!! route('getUserList')!!}">Quản lý admin</a></td>
        <td class="function_item hdon_add"><a href="{!! route('getDienkeList')!!}">Thêm  hóa đơn </a></td>
        <td class="function_item hdon_list"><a href="{!! route('getHoadonList')!!}">Quản lý hóa đơn</a></td>
        <td rowspan="3" class="statistics_panel" >
            <h3>Thống kê:</h3>
            <ul>
                <li>Tổng số user: {!! $stas_user !!}</li>
                <li>Tổng số danh mục: {!! $stas_cate !!}</li>
                <li>Tổng số tin: {!! $stas_news !!}</li>
                <li>Tổng số khách hàng: {!! $stas_khachhang !!}</li>
                <li>Tổng số điện kế: {!! $stas_dienke !!}</li>
                <li>Tổng số giá điện: {!! $stas_giadien !!}</li>
                <li>Tổng số hóa đơn: {!! $stas_hoadon !!}</li>
            </ul>
        </td>
    </tr>
    <tr >
        <td class="function_item khang_add"><a href="{!! route('getKhachhangAdd')!!}">Thêm khách hàng</a></td>
        <td class="function_item khang_list"><a href="{!! route('getKhachhangList')!!}">Quản lý khách hàng</a></td>
        <td class="function_item dienke_add"><a href="{!! route('getDienkeAdd')!!}">Thêm điện kế</a></td>
        <td class="function_item dienke_list"><a href="{!!route('getDienkeList')!!}">Quản lý điện kế</a></td>
      

    </tr>
    <tr>
        <td class="function_item cate_add"><a href="{!! route('getCateAdd')!!}">Thêm loại tin</a></td>
        <td class="function_item cate_list"><a href="{!! route('getCateList')!!}">Quản lý loại tin</a></td>
        <td class="function_item new_add"><a href="{!! route('getNewsAdd')!!}">Thêm bài viết</a></td>
        <td class="function_item new_list"><a href="{!! route('getNewsList')!!}">Quản lý bài viết</a></td>
      

    </tr>
    <tr>
        <td class="function_item gdien_add"><a href="{!! route('getGiadienAdd')!!}">Thêm giá điện</a></td>
        <td class="function_item gdien_list"><a href="{!! route('getGiadienList')!!}">Quản lý giá điện</a></td>
        <td class="function_item tracuu"><a href="{!! route('tracuu')!!}">Tra cứu thông tin</a></td>
       

    </tr>
</table>   
@endsection