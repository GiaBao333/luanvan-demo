@extends('layout.guest')
@section('main')
<?php 
use App\Content;
use App\User;
?>
<div class="new-box">
	<blockquote style="border-left:5px solid #0281c3;">
		<p class="item-title" style="color:inherit; text-transform:uppercase;">{{ $cate->category_name }}</p>
		<small>
			<cite title="Source Title">{{ $cate->note }}</cite>
		</small>
	</blockquote>
	@foreach(Content::where('category_id','=',$cate->id)->where('public','=',1)->orderBy('created_at', 'DESC')->get() as $value)
	<div class="grid fluid bg-white">
        <div class="row">
            <div class=" span3">
                <img src="{{ url('public/asset/Images/'.$value->thumbnail) }}" class="img-responsive" alt="Image" style="width: 176px !important;height: 109px !important;object-fit: cover;">
            </div>
            <div class="span9 padding10">

                <a href="{{ url('tin-tuc/'.$cate->alias.'/'.$value->alias) }}">{{ $value->title }}</a>
                <small> <i class="text-grey">({{ $value->created_at }} - {{ User::find($value->author_id)->name }})</i> 
                </small>
                <section>{{ $value->quote }}</section>
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop