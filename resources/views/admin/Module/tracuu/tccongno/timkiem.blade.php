@extends('admin.app')
@section('title','Tra cứu công nợ')
@section('content')
<form action="{!! route('timhd')!!}" method="post" style="width: 650px;">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<fieldset >
		<legend>Tìm kiếm công nợ</legend>
		
		<span class="form_label">Mời chọn trạng thái:</span>
		<span class="form_item">
			<select name="sltQuan" class="select">
                        <option></option>
                        <option>Đã thanh toán</option>
                        <option>Chưa thanh toán</option>
                        
            </select>
		</span><br />
		
		<span class="form_label"></span>
		<span class="form_item">
<button type="search" class="button">Search</button>
		</span>
	</fieldset>
</form>
@endsection
