<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Trang Pham" />
    <link rel="stylesheet" href="{!! asset('public/tt13_admin/templates/css/style.css') !!}" />
  
	<title>@yield('title')</title>
    <script src="{{ asset('public/tt13_user/js/jquery-1.11.3.min.js')}}"></script>
    <script type="text/javascript" src ="{!!asset('public\tt13_admin\templates\js\plugin\ckeditor/ckeditor.js')!!}"></script>
</head>

<body style="overflow: visible;"  >
<div id="layout">
    <div id="top">
		<div id="left">	
			<img src="{!! asset('public/tt13_admin/templates/images/logo.png') !!}">
		</div>
		<div id="right">Xin chào {!! Auth::user()->username !!}| <a href="{!! url('logout') !!}">Logout</a></div>
    </div>
    
    <div class="clear"></div>
    <div style="margin:10px 50px">
     <ul class="menu">
                <li><a href="{!!url("admin")!!}">Trang Chủ</a></li>
                <li><a href="#">Quản Lý</a>
                    <ul class="submenu">
                        <li><a href="{!!route('getUserList')!!}">Quản Lý Admin</a></li>
                        <li><a href="{!!route('getKhachhangList')!!}">QL Khách Hàng</a></li>
                        <li><a href="{!!route('getCateList')!!}">Quản Lý Loại Tin</a></li>
                        <li><a href="{!!route('getNewsList')!!}">Quản Lý Bài Viết</a></li>
                        <li><a href="{!!route('getGiadienList')!!}">Quản Lý Giá Điện</a></li>
                        <li><a href="{!!route('getDienkeList')!!}">Quản Lý Điện Kế</a></li>
                        <li><a href="{!!route('getHoadonList')!!}">Quản Lý Hóa Đơn</a></li>
                    </ul>
                </li>
                <li class="active"><a href="#">Thêm</a>
                    <ul class="submenu">
                        <li><a href="{!!route('getUserAdd')!!}">Thêm Admin</a></li>
                        <li><a href="{!!route('getKhachhangAdd')!!}">Thêm Khách Hàng</a></li>
                        <li><a href="{!!route('getCateAdd')!!}">Thêm Loại Tin</a></li>
                        <li><a href="{!!route('getNewsAdd')!!}">Thêm Bài Viết</a></li>
                        <li><a href="{!!route('getGiadienAdd')!!}">Thêm Giá Điện</a></li>
                        <li><a href="{!!route('getDienkeAdd')!!}">Thêm Điện Kế</a></li>
                        <li><a href="{!!route('getHoadonAdd')!!}">Thêm Hóa Đơn</a></li>
                    </ul>
                </li>
                <li><a href="{!! route('tracuu')!!}">Tra cứu</a></li>
                <li><a href="{!! route('getIndex')!!}" target="_blank">Font_end</a></li>
 
            </ul>
</div>
	<div class="clear"></div>
<div id="content">
    <div id="main">
    @include('admin.block.error')
    @include('admin.block.flash')
    @include('admin.block.error-flash')
    @yield('content') 
   </div>
   </div>
    <div id="bottom">
        TRANG WEB MANG TINH THAM KHAO 
    </div>
</div>
</body>
<script src="{{asset('public/js/myscript.js')}}"></script>
</html>