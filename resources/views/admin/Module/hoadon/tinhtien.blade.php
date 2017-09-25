@extends('admin.app')
@section('title','Thêm Hóa Đơn')
@section('content')

<form action="" method="POST" style="width: 650px;">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<fieldset>
		<legend>Thông Tin Hóa Đơn</legend>
		
		<span class="form_label">Kỳ:</span>
		<span class="form_item">
			<input type="text" name="txtKy" class="textbox" value="{!!old('txtKy')!!}" />
		</span><br />
		<span class="form_label">Từ ngày:</span>
		<span class="form_item">
			<input type="Date" name="tungay" class="textbox" value="{!!old('tungay')!!}" />
		</span><br />
		<span class="form_label">Đến ngày:</span>
		<span class="form_item">
			<input type="Date" name="denngay" class="textbox" value="{!!old('denngay')!!}" />
		</span><br />
		<span class="form_label">Chỉ số đầu:</span>
		<span class="form_item">
			<input type="text" name="txtChisodau" class="textbox" value="{!!old('txtChisodau')!!}" />
		</span><br />
		<span class="form_label">Chỉ số cuối</span>
		<span class="form_item">
			<input type="text" name="txtChisocuoi" class="textbox" value="{!!old('txtChisocuoi')!!}" />
		</span><br />
		<span class="form_label">Ngày lập hóa đơn:</span>
		<span class="form_item">
			<input type="Date" name="txtngaylaphoadon" class="textbox" value="{!!old('txtngaylaphoadon')!!}" />
		</span><br />
		<span class="form_label">Trạng thái:</span>
		<span class="form_item">
			<input type="radio" name="rdoPublic" value="Đã thanh toán" checked="checked" 
			@if(old('rdoPublic')=="Đã thanh toán")
			checked 
			@endif
			/> Đã thanh toán
			<input type="radio" name="rdoPublic" value="Chưa thanh toán" 
			@if(old('rdoPublic')=="Chưa thanh toán")
			checked 
			@endif/> Chưa thanh toán
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnAdd" value="Thêm Hóa Đơn" class="button" />
		</span>
	</fieldset>
</form>  
@endsection  
	