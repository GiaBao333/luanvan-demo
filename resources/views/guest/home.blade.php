@extends('layout.guest')
@section('main')
<?php use App\Content;
      use App\Category; 
      use App\User;
?>
<div class="news-box">
    <blockquote style="border-left:5px solid #0281c3;">
        <p class="item-title">
        
        <a style="color:inherit; text-transform:uppercase;" href="{{ url('tin-tuc/'.Category::find(1)->alias) }}" title="">{{ Category::find(1)->category_name }}</a>
        </p>
        <small>
            <cite title="Source Title">{{Category::find(1)->note}}</cite>
        </small>
    </blockquote>
    <br>
    <section id="box-image-large">
        <?php  $contentMain = Content::where('category_id','=',1)->
        where('featured','=',1)->orderBy('created_at', 'DESC')->first(); ?>
                         @if(count($contentMain)>0)
                 
                        <img src="{{ url('public/asset/Images/'.$contentMain->image) }}" class="img-responsive" alt="Image" style="width: 100% !important;height: 285px !important;object-fit: cover;">
        <div id="box-shadow"></div>
        <div id="box-infor">
            <h2 class="fg-white no-margin"><a href="{{ url('tin-tuc/'.Category::find(1)->alias.'/'.$contentMain->alias) }}">{{ $contentMain->title }}</a></h2>
            <p class="fg-white">
                <small>{{ $contentMain->quote }}</small>
            </p>
        </div>
        @endif
    </section>

    <div class="grid fluid">
        <div class="row">
            @foreach(Content::where('category_id','=',1)->where('featured','!=',1)->orderBy('created_at', 'DESC')->take(3)->get() as $value )
            <div class="span4 text-center">
                <div class="grid fluid">
                    <div class="row no-margin bg-white">
                        <div class="span6">
                            <img src="{{ url('public/asset/Images/'.$value->
                            thumbnail) }}" style="width: 117px !important;height: 90px !important;object-fit: cover;" alt="Image">
                        </div>
                        <div style="text-align: left;" class="span6">
                            <a href="{{ url('tin-tuc/'.Category::find(1)->alias.'/'.$value->alias) }}">{{ $value->title }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="news-box">
    <blockquote style="border-left:5px solid #0281c3;">
        <p class="item-title" >
        <a style="color:inherit; text-transform:uppercase;" href="{{ url('tin-tuc/'.Category::find(3)->alias) }}" title="">{{ Category::find(3)->category_name }}</a></p>
        <small>
            <cite title="Source Title">{{ Category::find(3)->note }}</cite>
        </small>
    </blockquote>
    @foreach(Content::where('category_id','=',3)->where('public','=',1)->orderBy('created_at', 'DESC')->take(5)->get() as $value)
    <div class="grid fluid bg-white">
        <div class="row">
            <div class=" span3">
                <img src="{{ url('public/asset/Images/'.$value->thumbnail) }}" class="img-responsive" alt="Image" style="width: 176px !important;height: 109px !important;object-fit: cover;">
            </div>
            <div class="span9 padding10">

                <a href="{{ url('tin-tuc/'.Category::find(3)->alias.'/'.$value->alias) }}">{{ $value->title }}</a>
                <small> <i class="text-grey">({{ $value->created_at }} - {{ User::find($value->author_id)->name }})</i> 
                </small>
                <section>{{ $value->quote }}</section>
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop