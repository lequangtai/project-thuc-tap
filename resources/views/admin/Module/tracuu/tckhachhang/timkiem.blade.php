@extends('admin.app')
@section('title','Tra cứu khách hàng')
@section('content')
<form action="{!! route('timkh')!!}" method="post" style="width: 650px;">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<fieldset >
		<legend>Tìm kiếm khách hàng</legend>
		<span class="form_label">Tìm theo tên:</span>
		<span class="form_item">
			<input type="text" name="tukhoa" class="textbox"  value="" />
		</span><br />
		<span class="form_label">Tìm theo quận:</span>
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
		<span class="form_label">Tìm theo phường</span>
		<span class="form_item">
			<input type="text" name="phuong" class="textbox"  value="" />
		</span><br />
		<span class="form_label"></span>
		<span class="form_item">
<button type="search" class="button">Search</button>
		</span>
	</fieldset>
</form>
@endsection
