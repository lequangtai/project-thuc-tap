<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="" />
    <link rel="stylesheet" href="{!! asset('public/tt13_admin/templates/css/admin.css') !!}" />
    <link rel="stylesheet" href="{!! asset('public/tt13_admin/templates/css/demo.css') !!}" />
	<title>Login</title>
</head>
<body>
    <div id="main"> 
        @include('admin.block.error')       
		<form action="" method="POST" style="width: 650px; margin: 30px auto;">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">                  
				<h1>THÔNG TIN ĐĂNG NHẬP</h1>
                  <input placeholder="Username" name="txtUser" type="text" required="">
                  <input placeholder="Password" name="txtPass" type="password" required="">
                  <button name="btnLogin">Submit</button>
            <h2>DESIGN BY :TRANG NHÚ KHÙNG</h2>
        </form>
</div>
</body>
</html>