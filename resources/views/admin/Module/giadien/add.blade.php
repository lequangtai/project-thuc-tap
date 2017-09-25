@extends('admin.app')
@section('title','Thêm Giá Điện')
@section('content')
<form action="" method="POST" style="width: 650px;">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<fieldset>
		<legend>Thêm bảng giá điện</legend>
		<span class="form_label">Mã bậc:</span>
		<span class="form_item">
			<input type="text" name="txtMabac" class="textbox" value="{!!old('txtMabac')!!}" />
		</span><br />
		<span class="form_label">Tên bậc:</span>
		<span class="form_item">
			<input type="text" name="txtTenbac" class="textbox" value="{!!old('txtTenbac')!!}" />
		</span><br />
		<span class="form_label">Từ KW:</span>
		<span class="form_item">
			<select name="sltTuKW" class="select">                        
                        <option value="0" {{ (old('sltTuKW') == "0") ? "selected" : "" }} >0</option>
                        <option value="101" {{ (old('sltTuKW') == "101") ? "selected" : "" }} >101</option>
                        <option value="151" {{ (old('sltTuKW') == "151") ? "selected" : "" }} >151</option>
                        <option value="201" {{ (old('sltTuKW') == "201") ? "selected" : "" }} >201</option>
                        <option value="301" {{ (old('sltTuKW') == "301") ? "selected" : "" }} >301</option>
                        <option value="401" {{ (old('sltTuKW') == "401") ? "selected" : "" }} >401</option>
            </select>
		</span><br />
		
		<span class="form_label">Đến KW:</span>
		<span class="form_item">
			<select name="sltDenKW" class="select">
                        
                        <option value="100" {{ (old('sltDenKW') == "100") ? "selected" : "" }} >100</option>
                        <option value="150" {{ (old('sltDenKW') == "150") ? "selected" : "" }} >150</option>
                        <option value="200" {{ (old('sltDenKW') == "200") ? "selected" : "" }} >200</option>
                        <option value="300" {{ (old('sltDenKW') == "300") ? "selected" : "" }} >300</option>
                        <option value="400" {{ (old('sltDenKW') == "400") ? "selected" : "" }} >400</option>
                        <option value="100000" {{ (old('sltDenKW') == "100000") ? "selected" : "" }} >100000</option>
            </select>
		</span><br />
		<span class="form_label">Đơn giá:</span>
		<span class="form_item">
			<input type="text" name="txtDongia" class="textbox" value="{!!old('txtDongia')!!}" />
		</span><br />
		<span class="form_label">Ngày áp dụng:</span>
		<span class="form_item">
			<input type="Date" name="ngayapdung" class="textbox" value="{!!old('ngayapdung')!!}" />
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
			<input type="submit" name="btnAdd" value="Thêm Giá Điện" class="button" />
		</span>
	</fieldset>
</form>  
@endsection  
	