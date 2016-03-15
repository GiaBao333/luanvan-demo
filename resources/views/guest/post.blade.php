@extends('layout.guest')
@section('main')
<div class="new-box bg-white padding20">
	<blockquote style="border-left:5px solid #0281c3;">
		<p class="item-title" style="color:inherit;">{{ $post->title }}</p>
	</blockquote>
	{!! $post->content !!}
</div>
@stop