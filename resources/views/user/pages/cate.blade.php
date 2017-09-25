@extends('user.master')
@section('title','loai tin')
@section('content3')
<p id="cate_tl">Trang Chủ >>{!! $cate['name'] !!}</p>
@foreach($news as $item)
<div class="news">
	<h1>{!! $item['title'] !!}</h1>
	<img src="{!! asset('public/uploads/news/'.$item['image']) !!}" class="thumbs" />
	<p>{!! $item['intro'] !!}</p>
	<a href="{!! url('ct-tin/'.$item['id'] .'/'.$item['alias'].'.html') !!}" class="readmore">Đọc thêm</a>
	<div class="clearfix"></div>
</div>
@endforeach
@endsection
