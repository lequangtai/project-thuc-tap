@extends('admin.app')
@section('title','Thêm Khách Hàng')
@section('content')
<form action="" method="POST" style="width: 650px;">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<fieldset>
		<legend>Thông Tin Khách Hàng</legend>
		<span class="form_label">Tên khách hàng(*):</span>
		<span class="form_item">
			<input type="text" name="txtTen" class="textbox" value="{!!old('txtTen')!!}" />
		</span><br />
		<span class="form_label">Quận(huyện)(*):</span>
		<span class="form_item">
			<select name="sltQuan" class="select">
                        <option></option>
                        <option>Quận 1</option>
                        <option>Quận 2</option>
                        <option>Quận 3</option>
                        <option>Quận 4</option>
                        <option>Quận 5</option>
                        <option>Quận 6</option>
                        <option>Quận 7</option>
                        <option>Quận 8</option>
                        <option>Quận 9</option>
                        <option>Quận 10</option>
                        <option>Quận 11</option>
                        <option>Quận 12</option>
                        <option>Quận Bình Tân</option>
                        <option>Quận Tân Phú</option>
                        <option>Quận Tân Bình</option> 
                        <option>Quận Gò Vấp</option>
                        <option>Quận Bình Thạnh</option>
                        <option>Quận Thủ Đức</option>
                        <option>Huyện Củ Chi</option>
                        <option>Huyện Bình Chánh</option>
            </select>
		</span><br />
		<span class="form_label">Phường(xã)(*):</span>
		<span class="form_item">
			<input type="text" name="txtPhuong" class="textbox" value="{!!old('txtPhuong')!!}" />
		</span><br />
		<span class="form_label">Địa chỉ(*):</span>
		<span class="form_item">
			<input type="text" name="txtDiachi" class="textbox" value="{!!old('txtDiachi')!!}" />
		</span><br />
		<span class="form_label">SĐT:</span>
		<span class="form_item">
			<input type="text" name="txtSDT" class="textbox" value="{!!old('txtSDT')!!}" />
		</span><br />
		<span class="form_label">CMND(*):</span>
		<span class="form_item">
			<input type="text" name="txtCMND" class="textbox" value="{!!old('txtCMND')!!}" />
		</span><br />
		<span class="form_label">Password(*):</span>
		<span class="form_item">
			<input type="password" name="txtPass" class="textbox" />
		</span><br />
		<span class="form_label">Nhập lại password(*):</span>
		<span class="form_item">
			<input type="password" name="txtRepass" class="textbox" />
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnAdd" value="Thêm Khách Hàng" class="button" />
		</span>
	</fieldset>
</form>  
@endsection  
	