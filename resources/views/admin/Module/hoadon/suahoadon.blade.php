@extends('admin.app')
@section('title','Sửa Hóa Đơn')
@section('content')

<form action="" method="POST" style="width: 650px;">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<fieldset>
		<legend>Thông Tin Hóa Đơn</legend>
		
		
		<span class="form_label">Trạng thái:</span>
		<span class="form_item">

{{-- 		<option value="1" {{ (old('sltLevel',$data["level"]) == 1) ? "selected" : "" }}>Admin</option>
 --}}			<input type="radio" name="rdoPublic" value="Đã thanh toán" {{(old('rdoPublic', $data["trangthai"])=="Đã thanh toán")?"checked":""}}
			
			/> Đã thanh toán
			<input type="radio" name="rdoPublic" value="Chưa thanh toán" {{(old('rdoPublic', $data["trangthai"])=="Chưa thanh toán")?"checked":""}}/>
			 Chưa thanh toán
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnAdd" value="Cập nhật" class="button" />
		</span>
	</fieldset>
</form>  
@endsection  
