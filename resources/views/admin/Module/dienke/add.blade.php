@extends('admin.app')
@section('title','Thêm Điện Kế')
@section('content')
<form action="" method="POST" style="width: 650px;">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<fieldset>
		<legend>Thêm điện kế</legend>
		<span class="form_label">Tên khách hàng:</span>
		<span class="form_item">
			<select name="sltDK" class="select">
				<option></option>
				<?php menuMulti1($data) ?>
					
			</select>
		</span><br />
		<span class="form_label">Ngày sản xuất:</span>
		<span class="form_item">
			<input type="Date" name="ngaysx" class="textbox" value="{!!old('ngaysx')!!}" />
		</span><br />
		<span class="form_label">Ngày lắp ĐK:</span>
		<span class="form_item">
			<input type="Date" name="ngaylap" class="textbox" value="{!!old('ngaylap')!!}" />
		</span><br />
		<span class="form_label">Mô tả:</span>
		<span class="form_item">
			<input type="text" name="txtMota" class="textbox" value="{!!old('txtMota')!!}" />
		</span><br />
		<span class="form_label">Trạng thái:</span>
		<span class="form_item">
			<input type="radio" name="rdoPublic" value="Đã lắp" checked="checked" 
			@if(old('rdoPublic')=="Đã lắp")
			checked 

			@endif
			/> Đã lắp
			<input type="radio" name="rdoPublic" value="Chưa lắp" 
			@if(old('rdoPublic')=="Chưa lắp")
			checked 

			@endif/> Chưa lắp
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnAdd" value="Thêm Điện Kế" class="button" />
		</span>
	</fieldset>
</form>  
@endsection  
	