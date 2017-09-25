@extends('user.master')
@section('title','chi tiet tin')
@section('content')
<div class="news">
	<p id="h1-ct">{!! $data['title'] !!}</p>
	<p>{!! $data['content'] !!}</p>
	<div class="clearfix"></div>
</div>
@endsection
