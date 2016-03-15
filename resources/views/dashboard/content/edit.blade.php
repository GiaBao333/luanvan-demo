@extends('layout.dashboard')
@section('style')
<style type="text/css">
        #content-library-main,#content-library-main-large{
            display: none;
        }
        #content-library-main .bg-opacity{
            
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0.5;
            position: fixed;
            top: 0px;
            left: 0px;
            z-index: 99997;
        }
        #content-library-main-large .bg-opacity{
            
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0.5;
            position: fixed;
            top: 0px;
            left: 0px;
            z-index: 99997;
        }
        #content-library-picture{
            background-color: white;
                width: 84%;
                height: 580px;
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                opacity: 1;
                margin: auto;
                z-index: 99998;
                padding: 20px;
        }
        #content-library-picture-large{
            background-color: white;
                width: 84%;
                height: 580px;
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                opacity: 1;
                margin: auto;
                z-index: 99998;
                padding: 20px;
        }
        .table-custom{
            width: 100%;
        }
        .table-custom tr td{
            padding: 10px;
            width: 50%;
        }
        #btn-change-date{
            position: fixed;
            right: 90px;
            top: 125px;
        }
        .cropped{
            width: 171px !important;
            height: 107px !important;
            object-fit: cover;
        }
        .selected {
            background-color: #4390df;
        }
</style>
@stop
@section('main')
<?php 
use App\Content; 
use App\Category;
use App\User;        
?>
<div id="page-wrapper">

	<div class="container-fluid">
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Thêm bài viết mới
                </h1>
                <ol class="breadcrumb">
                    <li> <i class="fa fa-dashboard"></i>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li><i class="fa fa-table"></i>
                        <a href="{{ url('/content') }}" title="">Bài viết</a>
                    </li>
                    <li class="active"> <i class="fa fa-table"></i>
                        Thêm bài viết
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
        {!! Form::model($content,array('route'=>array('content.update',$content->id),'method'=>'PUT')) !!}
        	<div class="col-lg-8">
        		<div class="form-group">
                    <label for="title" class="control-label">Tiêu đề *</label>
                    {!! Form::text('title', Input::old('title'), array('class'=>'form-control')) !!}
                </div>

                <div class="form-group">
                    <label for="alias" class="control-label">Alias *</label>
                    {!! Form::text('alias', Input::old('alias'), array('class'=>'form-control')) !!}
                </div>

                <div class="form-group">
                    <label for="alias" class="control-label">Trích dẫn *</label>
                    {!! Form::textarea('quote', Input::old('quote'), array('class'=>'form-control','rows'=>3)) !!}
                </div>

                <div class="form-group">
                    <label for="alias" class="control-label">Nội dung *</label>
                    {!! Form::textarea('content', Input::old('contnet'), array('id'=>'content','class'=>'form-control')) !!}
                </div>
        	</div>
        	<div class="col-lg-4">
        		<div class="form-group">
                    <label for="title" class="control-label">Thể loại *</label>
                    <select name="category_id" class="form-control">
                    @foreach(Category::all() as $value)
                    	<option @if($content->category_id == $value->id) selected="selected" @endif value="{{ $value->id }}">{{ $value->category_name }}</option>
                    @endforeach
                    </select>
                </div>

                <div class="form-group">
                	<label for="title" class="control-label">Trạng thái *</label>
                	<select name="public" class="form-control">

                		<option @if($content->public == 0) selected="selectd" @endif value="0">Không xuất bản</option>
                		<option @if($content->public == 1) selected="selectd" @endif value="1">Xuất bản</option>
                	</select>
                </div>

                <div class="form-group">
                	<label for="title" class="control-label">Nổi bậc *</label>
                	<select name="featured" class="form-control">
                		<option @if($content->featured == 1) selected="selected" @endif value="1">True</option>
                		<option @if($content->featured == 0) selected="selected" @endif value="0">False</option>
                	</select>
                </div>

                <div class="form-group">
                    <label class="control-label">Hình ảnh thu nhỏ</label>
                    <div class="input-group" id="value-image-product">
                        <input type="text" value="{{ $content->thumbnail }}" class="form-control" id="image_intro" name="thumbnail" readonly="">
                        <span class="input-group-addon btn btn-default">
                            <div id="btn-new-image">
                                Chọn tập tin
                            </div>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label">Hình ảnh đầy đủ</label>
                    <div class="input-group" id="value-image-product-large">
                        <input type="text" value="{{ $content->image }}" class="form-control" name="image" readonly="">
                        <span class="input-group-addon btn btn-default">
                            <div id="btn-new-image-large">
                                Chọn tập tin
                            </div>
                        </span>
                    </div>
                </div>
                
                {!! Form::submit('Cập nhật', array('class'=>'btn-primary form-control')) !!}
        	</div>
        {!! Form::close() !!}
        </div>
	</div>
</div>

<div id="content-library-main">
        <div class="bg-opacity">
            
        </div>
        <div id="content-library-picture" class="example">

        <div style="height:500px; overflow-y:scroll;">
        @for ($i = 0; $i < count($images); $i++)
            <div class="col-lg-2 col-md-4 col-xs-6 thumbnail image-container">
                <img src="{{ url('public/asset/Images/'.$images[$i]) }}" class="img-responsive cropped" alt="Image" data-path="{{$images[$i]}}">
            </div>
        @endfor
        </div>
            <br>
            <button class="btn btn-primary" type="button" id="btn-choosed-image">Chọn</button>
            <button class="btn btn-danger" id="btn-exit-add-recored" type="button">Thoát</button>
        </div>
</div>

<div id="content-library-main-large">
        <div class="bg-opacity">
            
        </div>
        <div id="content-library-picture-large" class="example">

        <div style="height:500px; overflow-y:scroll;">
        @for ($i = 0; $i < count($images); $i++)
            <div class="col-lg-2 col-md-4 col-xs-6 thumbnail image-container">
                <img src="{{ url('public/asset/Images/'.$images[$i]) }}" class="img-responsive cropped" alt="Image" data-path="{{$images[$i]}}">
            </div>
        @endfor
        </div>
            <br>
            <button class="btn btn-primary" type="button" id="btn-choosed-image-large">Chọn</button>
            <button class="btn btn-danger" id="btn-exit-add-recored-large" type="button">Thoát</button>
        </div>
</div>
@stop
@section('script')
	<script src="{{ url('public/asset/fckeditor/ckeditor/ckeditor.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        CKEDITOR.replace('content',{
            height: '300px'
        });
        jQuery(document).ready(function($) {
            $('#btn-new-image').click(function(event) {
                /* Act on the event */
                $('#content-library-main').show();
            });

            $('#btn-exit-add-recored').click(function(event) {
                /* Act on the event */
                $('#content-library-main').hide();
            });

            $('#content-library-picture .image-container').click(function(event) {
                /* Act on the event */
                $('#btn-choosed-image').removeAttr('disabled');
                $('#content-library-picture .image-container').removeClass('selected');
                $(this).addClass('selected');
            });

            $('#btn-choosed-image').click(function(event) {
                /* Act on the event */
                $('#content-library-picture .image-container').each(function(index, el) {
                    if ($(this).hasClass('selected')) {
                        $('#value-image-product').children('input').remove();
                        $('#value-image-product').append('<input type="text" name="thumbnail" readonly class="form-control" value="'+$(this).children('img').attr('data-path')+'">');
                        
                        $('#content-library-main').hide();
                    }; 
                });
            });
        });

         jQuery(document).ready(function($) {
            $('#btn-new-image-large').click(function(event) {
                /* Act on the event */
                $('#content-library-main-large').show();
            });

            $('#btn-exit-add-recored-large').click(function(event) {
                /* Act on the event */
                $('#content-library-main-large').hide();
            });

            $('#content-library-picture-large .image-container').click(function(event) {
                /* Act on the event */
                $('#btn-choosed-image-large').removeAttr('disabled');
                $('#content-library-picture-large .image-container').removeClass('selected');
                $(this).addClass('selected');
            });

            $('#btn-choosed-image-large').click(function(event) {
                /* Act on the event */
                $('#content-library-picture-large .image-container').each(function(index, el) {
                    if ($(this).hasClass('selected')) {
                        $('#value-image-product-large').children('input').remove();
                        $('#value-image-product-large').append('<input type="text" name="image" readonly class="form-control" value="'+$(this).children('img').attr('data-path')+'">');
                        
                        $('#content-library-main-large').hide();
                    }; 
                });
            });
        });
    </script>
@stop