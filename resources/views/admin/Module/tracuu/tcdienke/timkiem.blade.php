@extends('admin.app')
@section('title','Tra cứu điện kế')
@section('content')
<form action="{!! route('timdk')!!}" method="post" style="width: 650px;">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<fieldset >
		<legend>Tìm kiếm điện kế</legend>
		
		<span class="form_label">Mời chọn trạng thái:</span>
		<span class="form_item">
			<select name="sltQuan" class="select">
                        <option></option>
                        <option>Đã lắp</option>
                        <option>Chưa lắp</option>
                        
            </select>
		</span><br />
		
		<span class="form_label"></span>
		<span class="form_item">
<button type="search" class="button">Search</button>
		</span>
	</fieldset>
</form>
@endsection
